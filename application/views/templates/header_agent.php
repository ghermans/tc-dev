<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Glenn Hermans" >

    <title>Time Control - Dashboard</title>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   
    <link href="<?php echo base_url("css/jquery.circliful.css");?>" rel="stylesheet">     
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url("css/fullcalendar.css");?>" rel="stylesheet">

    <link href="<?php echo base_url("css/jquery.bootgrid.css");?>" rel="stylesheet">   
    <link href="<?php echo base_url("css/bootstrapValidator.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("css/bootstrap-formhelpers.css")?>" rel="stylesheet" media="screen">
    <link href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.css" rel="stylesheet">
    <link href="hyyp://cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url("css/user.default.css");?>" rel="stylesheet">    



<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url("js/jquery.circliful.js");?>"></script>	
<link rel="shortcut icon" href="<?php echo base_url("favicon.ico");?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url("favicon.ico");?>" type="image/x-icon">
</head>
<body>




    <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>"><i class="fa fa-clock-o fa-lg text-warning"></i> Time Control</a>
            </div>
            
          <div class="navbar-collapse collapse" style="margin-left:230px;">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="<?php echo base_url("/help/")?>"><i class="fa fa-support fa-lg"></i> Support</a></li>
            <li><a href="<?php echo base_url("/auth/logout")?>"><i class="fa fa-power-off fa-lg"></i> <span>Log out</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="clearfix">&nbsp;</div>    
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
		<nav id="top_navigation">
				<div class="container">
					<ul id="icon_nav_h" class="top_ico_nav clearfix">
						<li>
							<a href="<?php echo base_url();?>">
								<i class="fa fa-home fa-4x"></i>
								<span class="menu_label">Home</span>
							</a>
						</li>
						<li>             
							<a href="<?php echo base_url('profile');?>">
								<i class="fa fa-user fa-4x"></i>
								<span class="menu_label">Profile settings</span>
							</a>
						</li>
						<li>             
							<a href="<?php echo base_url('tasks');?>">
								<span class="label label-danger">12</span>							
								<i class="fa fa-tasks fa-4x"></i>
								<span class="menu_label">Tasks</span>
							</a>
						</li>
						<li>             
							<a href="<?php echo base_url('calls');?>">
								<span class="label label-danger">2</span>							
								<i class="fa fa-phone fa-4x"></i>
								<span class="menu_label">Outbound</span>
							</a>
						</li>						
						<li>             
							<a href="<?php echo base_url("breaktool"); ?>">
								<i class="fa fa-coffee fa-4x"></i>
								<span class="menu_label">Break</span>
							</a>
						</li>
						<li>             
							<a href="<?php echo base_url("lunch"); ?>">
								<i class="fa fa-cutlery fa-4x"></i>
								<span class="menu_label">Lunch file</span>
							</a>
						</li>		
						<li>             
							<a href="<?php echo base_url("vacation"); ?>">
								<i class="fa fa-calendar fa-4x"></i>
								<span class="menu_label">Vacation</span>
							</a>
						</li>		
						<li>             
							<a href="<?php echo base_url("overtime"); ?>">
								<i class="fa fa-clock-o fa-4x"></i>
								<span class="menu_label">Overtime</span>
							</a>
						</li>	
						<li>             
							<a href="<?php echo base_url("planning"); ?>">
								<i class="fa fa-calendar-o fa-4x"></i>
								<span class="menu_label">Planning</span>
							</a>
						</li>																						
						
					</ul>
				</div>
			</nav>
			</div>

		<div class="container">	
			
