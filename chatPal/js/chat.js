	
var User = {
	
	username:null,
	password:null,
	conn:null,
	uniqueid:null,
	log: function (msg) {
		$("#log").append("<p>" + msg + "</p>");
	}
};

function connect( username,password,uniqueid ){
		
		console.log("Called Connect");
		
		var setRoster = true;
		
		if( username === undefined && password === undefined && uniqueid === undefined){
			username = User.username;
			password = User.password;
			
			setRoster = false; 
		}
		else{
		User.username = username;
		User.password = password;
		User.uniqueid = uniqueid;
		}
	 
		console.log("bin connect functon");
		
		var conn = new Strophe.Connection("http://localhost:5280/http-bind");
		conn.connect(username, password, function (status) {
		
		if (status === Strophe.Status.CONNECTED) {
			connected( conn , setRoster );	
		}
		 else if (status === Strophe.Status.DISCONNECTED) {
			setAvailibilityStatus( "offline" )
		}
		 else if (status === Strophe.Status.CONNECTING) {
			$("#connecting_states").html(" Connecting ").css("color","rgb(11,98,164)");
		}
		 else if (status === Strophe.Status.AUTHFAIL || status === Strophe.Status.CONNFAIL || status === Strophe.Status.DISCONNECTING ) {
			setAvailibilityStatus( "offline" )
		}
		});
		
		User.conn = conn;

	}

function setAvailibilityStatus( status , message , sendStanza){
	
		if( status==undefined && message === undefined && sendStanza === undefined){
			$("#connecting_states").html(" Unavailable ");
			$("#connecting_gif").find("img").attr("src","/chatPal/chatPal/images/offline.png");
		}
		
		if( status=="online" && message === undefined && sendStanza === undefined){
			$("#connecting_states").html(" You are Online ").css("color","rgb(64, 182, 93)");
			$("#connecting_gif").find("img").attr("src","/chatPal/chatPal/images/online.png");
		
			setAvailibilityStatus("available","Available",true);
	
		}
		
		if( status=="offline" && message === undefined && sendStanza === undefined){
			$("#connecting_states").html(" Disconnected ").css("color","red");
			$("#connecting_gif").find("img").attr("src","/chatPal/chatPal/images/offline.png");		
			$('#status_button').css("color","red").html("Unvailable");
		}
		
		if( status=="available" && message!== undefined && sendStanza == true){
			
			var conn = User.conn;
			var presence = $pres();
			conn.send( presence );
			$('#status_button').css("color","rgb(64, 182, 93)").html("Available");
		}
		
		if( status=="away" && message!== undefined && sendStanza == true){
			
			var conn = User.conn;
		
			if( message=="Busy"){
				
				$.jStorage.get(User.uniqueid+"_busy_msg") == null ? message = "Busy" : message = $.jStorage.get(User.uniqueid+"_busy_msg") ;
				$('#status_button').css("color","DarkRed").html("Busy");
				
			}
			else
			{
				$.jStorage.get(User.uniqueid+"_away_msg") == null ? message = "Away" : message = $.jStorage.get(User.uniqueid+"_away_msg") ;
				$('#status_button').css("color","orange").html("Away");
			}
			
			var presence = $pres().c("show").t("away").up().c("status").t(message);
			console.log( presence );
			conn.send( presence );
			
		}
		
		
}

function connected( connection ,setRoster) {
	
	//add message and presence handlers
	connection.addHandler(messageHandler,null,"message","chat");
	connection.addHandler(presenceHandler,null,"presence");

	var jid = Strophe.getDomainFromJid(connection.jid);

	if( setRoster ) getRoster();

	setTimeout( function(){ 
		setAvailibilityStatus( "online" )
	}, 5000 );
	
	//alert("You are now online");
	
	
	
};

function getChatBox( chatData ){
	
	if( $('#magpie_birdie').is(':visible') )
	{
			$('#magpie_birdie').hide();
	}
	else
	{
			console.log("Hidden");
	}

}

function send( messageText )
{
	var messageText = document.getElementById("messageboxInput").value;

	var conn = User.conn;
	
	var username = Strophe.getDomainFromJid(conn.jid);
	
	var data = $msg({to: "stany@localhost", type: "chat" , from: "remy@localhost"}).c("body").t(messageText);
	conn.send(data);
	User.log(username+" : "+messageText);
}

function disconnect()
{
	console.log("disconnect function");
		var conn = User.conn;
		setAvailibilityStatus("offline");
		var data = $pres({ type: "unavailable"});
		conn.send( data );
		conn.disconnect();
		
		$.jStorage.flush();
}

function messageHandler( stanza )
{
	console.log("got a call");

	var senderName = stanza.getAttribute('from');
	
	 var elems = stanza.getElementsByTagName('body');
	 var body = elems[0];

		//alert(Strophe.getText(body));
		User.log(senderName+" : "+Strophe.getText(body));
		return true;
}

function sendpresence(){
	
	var conn = User.conn; 
	var data = $pres();
	//alert(data);
	conn.send(data);
	
	}

function presenceHandler( stanza ){
	
	console.log("presence called");
	var ptype = $(stanza).attr("type");
	var from = $(stanza).attr("from");
	
	var username = from.split("/");
	username = username[0].replace("@", "_");
	console.log("username: "+username);
	
	if( ptype === undefined){
			
			console.log("#link"+username);
			console.log($("#link"+username).length);
			console.log($("#icon"+username).length);
			
			$("#link"+username).css("color","yellowgreen");
			$("#icon"+username).css("color","yellowgreen");
	}
	else if( ptype == "unavailable")
	{
		console.log('#link'+username);
		
			console.log($("#link"+username).length);
			console.log($("#icon"+username).length);
		
			$("#link"+username).css("color","white");
			$("#icon"+username).css("color","white");
	}
	
	
	 //alert("Presence: "+ptype+"@"+username[0]);

	return true;
	}


function getRoster(){
	
	var conn = User.conn;
	var rosterdata = $iq({type: "get"}).c("query",{xmlns: "jabber:iq:roster"});
	
	//alert( rosterdata );
	
	conn.sendIQ(rosterdata, function( iq ){
		
			$(iq).find("item").each(function(){
				var jid = $(this).attr("jid");
				var group = $(this).find("group").text();
				
				addRosterUsers( jid,group );
				//$('#rosterdata').append("<p>"+ jid +"</p>");
			});
		
		});


}


function activeClick( data )
{
	
	var str= "ul"+data.id;
	//$("#"+str).removeClass("collapse in");
	//$("#"+str).delay(1000).addClass("collapsing", 1000);
	
	if($(data).hasClass("active"))
	{
		$(data).removeClass("active");
		$("#"+str).removeClass("in");		
		$("#"+str).removeClass("collapsing");
		$("#"+str).addClass("collapse");
	}
	else
	{
		$(data).addClass("active");
		$("#"+str).addClass("in");
		$("#"+str).addClass("collapsing");
		$("#"+str).css("height","80px");
		$("#"+str).addClass("collapse");
		$("#"+str).css("height","auto");
	}
}


function addRosterUsers( username,group)
{
	var rosterCloumn = $(".sidebar-collapse ul:first");
		
		username = username.replace("@", "_");
		if( rosterCloumn.length > 0)
		{
				if( group=="" || group==null){
					rosterCloumn.append("<li><a style='cursor: pointer;' onclick='getChatBox( this )' id='link"+username+"'><i id='icon"+username+"' class='fa fa-user fa-fw'></i>"+username+"</a></li>");		
				}
				else if($('#'+group).length==0){
					rosterCloumn.append("<li onclick='activeClick(this)' id='"+group+"'><a style='color: #1CD693;font-size: 20px;' name='"+group+"'><i class='fa fa-sitemap fa-fw'></i> "+group+"<span class='fa arrow'></span></a><ul id='ul"+group+"' class='nav nav-second-level collapse' style='height: 0px;'></ul></li>");
				}
				else{
					$('#'+group+" ul").append("<li><a style='cursor: pointer;' onclick='getChatBox( this )' id='link"+username+"' ><i id='icon"+username+"' class='fa fa-user fa-fw'></i>"+username+"</a></li>");
				}
		}
}

function setStatus( setdata ){
	
	if( setdata === undefined){
		$('#setStatus').modal('show');
	}
	else
	{	
		var away_msg = $("#away_message").val();
		var busy_msg = $("#busy_message").val();
		
		if( away_msg==null || away_msg=="")
		{
			away_msg = "Away";
		}
		
		if( busy_msg==null || busy_msg=="")
		{
			busy_msg="Busy";
		}
		
		$.jStorage.set(User.uniqueid+"_away_msg", away_msg);
		$.jStorage.set(User.uniqueid+"_busy_msg", busy_msg);

		console.log($.jStorage.get(User.uniqueid+"_away_msg")+" :" +$.jStorage.get(User.uniqueid+"_busy_msg"));	
		$('#setStatus').modal('hide');
		
	}	
	
}
	
	
$(document).bind("connecting", function () {
	User.log("Connecting");
});

$(document).bind("disconnected", function () {
	User.log("disconnected");
	//alert("You are now offline");
});

$(document).bind("failure", function () {
	//alert("Authentication failure");
});



