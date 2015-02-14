<div id="main_menu">
<div class="panel-group" id="accordion" style="background:#fff;">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="fa fa-folder"></span> General</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="<?php if($this->uri->segment(1)==""){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?>
<?php if($this->uri->segment(1)=="profile"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?> ">
                        <div class="panel-body">
                 <ul class="nav nav-pills nav-stacked">
								<li class="<?php if($this->uri->segment(1)==""){echo "active";}?>"><a href="<?php echo base_url(""); ?>">Dashboard</a></li>
								<li><a href="<?php echo base_url("news"); ?>">Announcements</a></li>								
								<li class="<?php if($this->uri->segment(1)=="profile"){echo "active";}?>"><a href="<?php echo base_url("profile"); ?>">Change password</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0)">Help</a></li>
							</ul>
                        </div>
                    </div>
                </div>
                <div class="panel"> 
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#break"><span class="fa fa-coffee"></span> Break</a>
                        </h4>
                    </div>
                    <div id="break" class="<?php if($this->uri->segment(1)=="breaktool"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?> ">
                        <div class="panel-body">
                       <ul class="nav nav-pills nav-stacked">
								<li class="nav-header">Break management</li>                       
 <?php  foreach ($department as $department_item): ?>
   <li><a href="<?php echo base_url("breaktool/manage");?>/<?php echo $department_item['department_id'];?>"><?php echo $department_item['department_name'];?></a></li>                     
        <?php endforeach; ?> 

<hr>
								<li><a href="javascript:void(0)">Help</a></li>
							</ul>
                        </div>
                    </div>
                </div> 
                

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#planning"><span class="fa fa-calendar-o"></span> Planning</a>
                        </h4>
                    </div>
                      <div id="planning" class="<?php if($this->uri->segment(1)=="planning"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?> 
                       <?php if($this->uri->segment(1)=="planning"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?>                       
                      
                      ">
                        <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
								<li class="nav-header">Work hours</li>
								<li class="<?php if($this->uri->segment(1)=="shifts"){echo "active";}?>"><a href="<?php echo base_url("planning/shifts");?>">Manage shifts</a></li>

								</ul>
                        </div>
                    </div>
                </div> 

                               
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="fa fa-users"></span> Staff</a>
                        </h4>
                    </div>
                      <div id="collapseThree" class="<?php if($this->uri->segment(1)=="auth"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?> 
                       <?php if($this->uri->segment(1)=="departments"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?>                       
                       <?php if($this->uri->segment(1)=="teams"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?>                       
                      
                      ">
                        <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
								<li class="nav-header">Departements</li>
								<li class="<?php if($this->uri->segment(1)=="departments"){echo "active";}?>"><a href="<?php echo base_url("departments");?>">Departments</a></li>
								<li class="<?php if($this->uri->segment(1)=="teams"){echo "active";}?>"><a href="<?php echo base_url("teams");?>">Teams</a></li>
								<li class="nav-header">Staff</li>
								<li class="<?php if($this->uri->segment(1)=="auth" && $this->uri->segment(2)=="list"){echo "active";}?>"><a href="<?php echo base_url("auth/index"); ?>">Users</a></li>
								<li class="<?php if($this->uri->segment(1)=="auth" && $this->uri->segment(2)=="groups"){echo "active";}?>"><a href="<?php echo base_url("auth/groups");?>">User Access Roles</a></li>								
								</ul>
                        </div>
                    </div>
                </div>    
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="fa  fa-calendar"></span> Vacation</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="<?php if($this->uri->segment(1)=="vacation"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?>">
                        <div class="panel-body">
                       <ul class="nav nav-pills nav-stacked">
								<li class="nav-header">Verlofuren</li>
								<li class="<?php if($this->uri->segment(1)=="vacation" && $this->uri->segment(2)=="calendar"){echo "active";}?>"><a href="<?php echo base_url("vacation/calendar");?>">Calendar</a></li>
								<li><a href="javascript:void(0)">Vacation slots</a></li>
								<li class="nav-header">Requests</li>
								<li><a href="javascript:void(0)">Half day <span class="badge pull-right">12</span></a></li>
								<li><a href="javascript:void(0)">Overtime <span class="badge pull-right">12</span></a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0)">Help</a></li>
							</ul>
                        </div>
                    </div>
                </div>

                 <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="fa  fa-cogs"></span> Settings</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="<?php if($this->uri->segment(1)=="settings"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?>">
                        <div class="panel-body">
                       <ul class="nav nav-pills nav-stacked">
								<li class="nav-header">General</li>
								<li><a href="<?php echo base_url("settings/");?>">General</a></li>
                   	   <li class="nav-header">Email and notifications</li>						
								<li><a href="<?php echo base_url("settings/mailboxes");?>">Mail accounts</a></li>										
								<li><a href="<?php echo base_url("settings/templates");?>">Mail templates</a></li>		
								<li><a href="javascript:void(0)">Notifications</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0)">Help</a></li>
							</ul>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><span class="fa fa-file"></span> Reports</a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="<?php if($this->uri->segment(1)=="reports"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?>">
                        <div class="panel-body">
                     <ul class="nav nav-pills nav-stacked">
								<li class="nav-header">General</li>
								<li><a href="javascript:void(0)">Help</a></li>
							</ul>
                        </div>
                    </div>
        </div>
                        <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"><span class="fa fa-users"></span> Announcements</a>
                        </h4>
                    </div>
                      <div id="collapseSeven" class="<?php if($this->uri->segment(1)=="news"){echo "panel-collapse collapse in";} else {echo "panel-collapse collapse" ;}?>">>
                        <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
								<li class="nav-header">Manage</li>
								<li><a href="<?php echo base_url("news/create");?>">Post</a></li>
								<li><a href="<?php echo base_url("news/index"); ?>">List</a></li>
								</ul>
                        </div>
                    </div>
                </div> 
        </div>
       </div>
