<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="glenn" >

    <title>Time Control - Dashboard</title>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url("css/user.default.css");?>" rel="stylesheet">    



<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="icon" href="<?php echo base_url("favicon.ico");?>" type="image/x-icon">
<style type="text/css">
body
{
background: linear-gradient(183deg, #3d5976, #dcdddd);
background-size: 400% 400%;

-webkit-animation: AnimationName 30s ease infinite;
-moz-animation: AnimationName 30s ease infinite;
animation: AnimationName 30s ease infinite;
}

a {
    outline: none !important;
        color: #000;
}

a:hover,
a:active,
a:focus {
    text-decoration: none;
    color: #000;
}

.panel-primary > .panel-heading {
  color: #fff;
  background-color: #20638f;
  border-color: #d6e9c6;
}

.form-horizontal .control-label{
/* text-align:right; */
text-align:left;
}

@-webkit-keyframes AnimationName {
    0%{background-position:51% 0%}
    50%{background-position:50% 100%}
    100%{background-position:51% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:51% 0%}
    50%{background-position:50% 100%}
    100%{background-position:51% 0%}
}
@keyframes AnimationName { 
    0%{background-position:51% 0%}
    50%{background-position:50% 100%}
    100%{background-position:51% 0%}
}



</style>
</head>
<body>


<div class="clearfix">&nbsp;</div>    
<div class="clearfix">&nbsp;</div>    
    <div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
     <div class="panel panel-primary">
     <div class="panel-heading"><span class="fa fa-info-circle"> <?php echo lang('login_subheading');?></span></div>
     <div class="panel-body">


<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login", 'class="form-horizontal"');?>
<div class="clearfix">&nbsp;</div>
  <div class="form-group">
    <label class="form-label col-md-3"><?php echo lang('login_identity_label');?></label>
     <div class="col-md-6"><?php echo form_input($identity);?></div>
  </div>

  <div class="form-group">
     <label class="form-label col-md-3"><?php echo lang('login_password_label');?></label>
    <div class="col-md-6"><?php echo form_input($password);?></div>
  </div>

<div class="form-group">
<div class="form-label col-md-3">&nbsp;</div>
  <div class="col-md-6 checkbox">
    <label>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?><?php echo lang('login_remember_label', 'remember');?>
  </label>
  </div>
  </div>

</div>
  <div class="panel-footer">
    <p>    <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-default"');?> <a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
   </div>
<?php echo form_close();?>
</div>

</div>
</div>
</div>
</body>
</html>