<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="glenn" >

    <title>Time Control - Dashboard</title>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url("css/jquery-ui.min.css");?>" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">    
    <link href="<?php echo base_url("css/jquery.circliful.css");?>" rel="stylesheet">     
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url("css/fullcalendar.css");?>" rel="stylesheet">
    <link href="http://dev.timecontrol.be/css/app.css" rel="stylesheet">
    <link href="<?php echo base_url("css/bootstrap-switch.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("css/listnav.css");?>" rel="stylesheet">   
    <link href="<?php echo base_url("css/jBox.css");?>" rel="stylesheet">       
    <link href="<?php echo base_url("css/jquery.bootgrid.css");?>" rel="stylesheet">       
    
    <link href="<?php echo base_url("css/bootstrapValidator.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("css/bootstrap-formhelpers.css")?>" rel="stylesheet" media="screen">
    <link href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.css" rel="stylesheet">
    <link href="//cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url("css/jquery.datetimepicker.css");?>" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<link href="http://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="http://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<script src="<?php echo base_url("js/jquery.circliful.js");?>"></script>	

<style>
th.ui-widget-header {
    font-size: 30pt;
    font-family: Verdana, Arial, Sans-Serif;
}

	#external-events {
		float: left;
		width: 150px;
		padding: 0 10px;
		border: 1px solid #ccc;
		background: #eee;
		text-align: left;
	}
		
	#external-events h4 {
		font-size: 16px;
		margin-top: 0;
		padding-top: 1em;
	}
		
	#external-events .fc-event {
		margin: 10px 0;
		cursor: pointer;
	}
		
	#external-events p {
		margin: 1.5em 0;
		font-size: 11px;
		color: #666;
	}
		
	#external-events p input {
		margin: 0;
		vertical-align: middle;
	}
	
.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

    #editor { 
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

</style>

</head>
<body>


    <div id="wrapper">

    <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
         <a class="navbar-brand" href="<?php echo base_url()?>"><i class="glyphicon glyphicon-time"></i> Time Control </a>
            </div>
            
          <div class="navbar-collapse collapse" style="margin-left:230px;">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://timecontrol.be" target="_blank"><i class="fa fa-globe fa-lg"></i> Time Control</a></li>
            <li><a href="<?php echo base_url("/help/")?>"><i class="fa fa-support fa-lg"></i> Support</a></li>
            <li><a href="<?php echo base_url("/auth/logout")?>"><i class="fa fa-power-off fa-lg"></i> <span>Log out</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
<?php
  		  $this->load->view('templates/sidebar/admin');	
	
		?>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <div class="container-fluid">                
