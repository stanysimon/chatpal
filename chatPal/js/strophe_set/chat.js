

var Commons = {
	
	conn:null,
	
	log: function (msg) {
		$("#log").append("<p>" + msg + "</p>");
	}
};


$(document).ready(function () {

	$("#login_dialog").dialog({
		autoOpen: true,
		draggable: true,
		modal: true,
		title: "Connect to XMPP",
		buttons: {
		"Connect": function () {
		$(document).trigger("connect", {
		jid: $("#jid").val(),
		password: $("#password").val()
		});
		$("#password").val("");
		$(this).dialog("close");
		}
		}
	});
}); 

		
	function clearText( messageBox )
	{
		messageBox.value = "";
	}


$(document).bind("connect", function (ev, data) {
		
		var conn = new Strophe.Connection("http://localhost:5280/http-bind");
		conn.connect(data.jid, data.password, function (status) {
		
		if (status === Strophe.Status.CONNECTED) {
			$(document).trigger("connected",conn);
		}
		 else if (status === Strophe.Status.DISCONNECTED) {
			$(document).trigger("disconnected");
		}
		 else if (status === Strophe.Status.CONNECTING) {
			$(document).trigger("connecting"); 
		}
		 else if (status === Strophe.Status.AUTHFAIL || status === Strophe.Status.CONNFAIL || status === Strophe.Status.DISCONNECTING ) {
			$(document).trigger("failure");
		}
		});
		
		Commons.conn = conn;
});


$(document).bind("connected", function (e,connection) {
	
	$('#login_dialog').hide();
	$('#messageBox').load("chatBox.html");
	
	
	//add message and presence handlers
	connection.addHandler(messageHandler,null,"message","chat");
	connection.addHandler(presenceHandler,null,"presence");

	var jid = Strophe.getDomainFromJid(connection.jid);

	var data = $pres();
	connection.send(data);
	alert("You are now online");
	
	getRoster();
	
});


function send( messageText )
{
	var messageText = document.getElementById("messageboxInput").value;

	var conn = Commons.conn;
	
	var username = Strophe.getDomainFromJid(conn.jid);
	
	var data = $msg({to: "stany@localhost", type: "chat" , from: "remy@localhost"}).c("body").t(messageText);
	conn.send(data);
	Commons.log(username+" : "+messageText);
}

function disconnect()
{
		var conn = Commons.conn;
		var data = $pres({ type: "unavailable"});
		alert(data);
		conn.send( data );
		conn.disconnect();
		$( "#login_dialog" ).show();
		$('#messageBox').hide("chatBox.html");
		Commons.conn = null;
		window.location.href = "http://localhost/chat/chat.php";
}

function messageHandler( stanza )
{
	console.log("got a call");

	var senderName = stanza.getAttribute('from');
	
	 var elems = stanza.getElementsByTagName('body');
	 var body = elems[0];

		alert(Strophe.getText(body));
		Commons.log(senderName+" : "+Strophe.getText(body));
		return true;
}

function sendpresence(){
	
	var conn = Commons.conn; 
	var data = $pres();
	alert(data);
	conn.send(data);
	
	}

function presenceHandler( stanza ){
	
	console.log("presence called");
	var ptype = $(stanza).attr("type");
	var from = $(stanza).attr("from");
	
	alert("Presence: "+ptype+"@"+from);

	return true;
	}

function getRoster(){
	
	var conn = Commons.conn;
	var rosterdata = $iq({type: "get"}).c("query",{xmlns: "jabber:iq:roster"});
	
	conn.sendIQ(rosterdata, function( iq ){
		
			$(iq).find("item").each(function(){
				var jid = $(this).attr("jid");
				$('#rosterdata').append("<p>"+ jid +"</p>");
			});
		
		});


}

$(document).bind("connecting", function () {
	Commons.log("Connecting");
});

$(document).bind("disconnected", function () {
	Commons.log("disconnected");
	alert("You are now offline");
});

$(document).bind("failure", function () {
	alert("Authentication failure");
});



