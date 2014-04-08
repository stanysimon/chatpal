<?php
/* @var $this UserController */

$this->breadcrumbs=array(
	'User',
);
?>
<div class="row">
                <div class="col-lg-12">
                    <h1 style="float:left;width:700px" class="page-header"><p style="font-size:15px;width:auto">Logged in as: </p>&nbsp;&nbsp;&nbsp; 
                    <div style="margin-top: -84px;margin-left: 106px;font-family: 'just_me_again_down_hereRg'"><?php echo Yii::app()->user->username; ?></div>
                    
                    
                    <div style="float: right;margin-top: -30px;margin-right: 0px;">
                    
                    <!-- Settings Box-->
                    <div style="float: left;margin-right: 51px;margin-top: -2px;font-size: 13px;">
                    <div class="btn-group pull-right">
                                <button id="chatsettings_button" type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" style="width: 94px; height: 31px; font-size: 14px;margin-top: 2px;margin-right: -40px;">
  <i style="margin-right: 2px;" class="fa fa-gear fa-fw"></i>Settings</button>
                                <ul class="dropdown-menu slidedown">
                                    <li onclick="setStatus()">
                                        <a href="#" onclick="setStatus()">
                                           <i class="fa fa-edit fa-fw"></i> Set Status
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                    
                    </div>
					<!-- End of Settings Box-->

					<!-- Availibility Box -->
                    <div class="btn-group pull-right">
                                <button id="status_button" type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" style="width: 162px;height: 31px;font-size: 14px; color:red">Unavailable
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li onclick="connect()">
                                        <a href="#" onclick="connect()">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh / Connect
                                        </a>
                                    </li>
                                    <li onclick="setAvailibilityStatus('available','Available',true)">
                                        <a href="#" onclick="setAvailibilityStatus('available',true)">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li onclick="setAvailibilityStatus('away','Busy',true)">
                                        <a href="#" onclick="setAvailibilityStatus('away','Busy',true)">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li onclick="setAvailibilityStatus('away','User is away',true)">
                                        <a href="#" onclick="setAvailibilityStatus('away','User is away',true)">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" onclick="disconnect()">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    
                    </div>
                    
                    <!-- End Of Availibility Box -->
                    </h1>
                    <div id="connecting" style="float:right;margin-top:40px; margin-right:50px; width:auto">
						<div id="connecting_gif" style="float:left"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/loading-dark.png", 'Connecting',$htmlOptions = array('width'=>'25px')); ?></div>
						<div id="connecting_states" class="authentication" style="float:left;margin-left: 19px;margin-top:1px">states</div>
					</div>
                </div>
                
                
                <!-- /.col-lg-12 -->
            </div>
            <div id="magpie_birdie">
<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/welcome_magpie.png", 'Connecting',$htmlOptions = array('class'=>'birdie','width'=>'30%','style'=>'margin-top: 133px;margin-left: 20%;opacity:0.4;')); ?>
<div class="oval-quotes" style="float: right;margin-top: -38%;margin-right: 42%;"><p>Welcome,<?php echo " ".Yii::app()->user->username; ?>!!!</p></div>
</div>
<p>
	
<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pill Tabs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Home</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Profile</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Messages</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Settings</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home-pills">
                                    <h4>Home Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>Profile Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                 
<!-- Modal -->
<div class="modal fade" id="setStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Set Status Messages</h4>
      </div>
      <div class="modal-body">
		<div class="form-group">
			<input id="busy_message" class="form-control" placeholder="Message to be set when Status is 'Busy'"></input>
		</div>
		<div class="form-group">
			<input id="away_message" class="form-control" placeholder="Message to be set when Status is 'Away'"></input>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="setStatus( true )" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</p>
<script>
	
	$(document).ready(function(){
			<?php 
        echo CHtml::ajax(array(
            'url'=>array('user/credentials'),
            'data'=>array('username'=>Yii::app()->user->username),
            'type'=>'POST',
            'success' =>"function(data) { 
				
				var data = $.parseJSON( data );
				connect( data.username,data.password,data.uniqueid);
				  
			}",
        ));
    ?>
	
		})
 
 
    </script>

