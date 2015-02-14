<div class="page-header">
<h3>Manage Shifts</h3>
</div>
<p>Select the employee you want to manage</p>
	<div class="clearfix">&nbsp;</div>
	
 <div class="row clearfix">
<ul id="user_list" class="well">
	<div class="clearfix">&nbsp;</div>
    <?php foreach ($users as $user):?>
		<li><a href="<?php echo base_url("planning/agentplanning/$user->id");?>">
        <h3 class="ul_userName">
        <span class="ul_firstName"><?php echo $user->first_name;?></span>
        <span class="ul_lastName"><?php echo $user->last_name;?></span>
        </h3>	
        <br>
         <p><i class="fa fa-phone"></i>
            <span class=""><?php echo $user->phone;?></span>
           <br>
            <i class="fa fa-envelope"></i>
            <span class=""><?php echo $user->email;?></span></p>	
		</a></li>
<?php endforeach;?>
	
</ul>
  </div>

