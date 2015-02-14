<div class="page-header">
<h3>Create a new mailbox</h3>
</div>

<?php if (!empty($message)) {
?>
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
 <div id=\"infoMessage\">
  <br> 
 <p><?php echo $message ?></p></div>
  </div>
  <?php
}
else {
	
	
	}; 
?>

<?php
	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
	$css = 'class="form-control"';

	echo form_open('', $attributes);
?>

<div class="form-group">
<label for="licenses" class="col-sm-3 control-label">SSL</label>
<div class="col-md-3">            
<?php $Types = array(
                  'IMAP'  => 'IMAP',
                  'POP3'  => 'POP3',
                  'SMTP'  => 'SMTP'
                  );
echo form_dropdown('mailbox_type', $Types, 'IMAP', $css);
 ?>
</div>
</div>

<div class="form-group">
<label for="hostname" class="col-sm-3 control-label">Server hostname</label>
<div class="col-md-3">            
  <?php echo form_input('mailbox_hostname', '', $css); ?>
</div>
</div>

<div class="form-group">
<label for="hostname" class="col-sm-3 control-label">Server port</label>
<div class="col-md-3">            
  <?php echo form_input('mailbox_port', '', $css); ?>
</div>
</div>


<div class="form-group">
<label for="email" class="col-sm-3 control-label">Email address</label>
<div class="col-md-3">            
  <?php echo form_input('mailbox_email', '', $css); ?>
</div>
</div>


<div class="form-group">
<label for="licenses" class="col-sm-3 control-label">Login</label>
<div class="col-md-3">            
  <?php echo form_input('mailbox_login', '', $css); ?>
</div>
</div>

<div class="form-group">
<label for="licenses" class="col-sm-3 control-label">Password</label>
<div class="col-md-3">            
<?php echo form_password('mailbox_password', '', $css); ?>
</div>
</div>

<div class="form-group">
<label for="mailbox_ssl" class="col-sm-3 control-label">SSL</label>
<div class="col-md-3">            
<?php $options = array(
                  'small'  => 'SSL',
                  'med'    => 'TLS',
                  'no'     => 'No SSL'
                  );
echo form_dropdown('ssl', $options, 'no', $css);
 ?>
</div>
</div>

<div class="form-group">
<label for="mailbox_description" class="col-sm-3 control-label">&nbsp;</label>
<div class="col-md-3">            
  <?php echo form_input('mailbox_description', '', $css); ?>
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-3 control-label">&nbsp;</label>
<div class="col-md-3">            
<?php echo form_submit('create', 'Create', 'class="btn btn-primary"'); ?> &nbsp; <?php echo form_reset('mailbox_reset', 'Cancel', 'class="btn btn-danger"'); ?>
</div>
</div>

<?php
echo form_close();
?>

