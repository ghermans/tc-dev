<div class="page-header">
<h3>Settings</h3>
</div>


<ul class="nav nav-tabs">
  <li class="active"><a href="#tab_a" data-toggle="tab">General settings</a></li>
  <li><a href="#tab_b" data-toggle="tab">Email settings</a></li>
  <li><a href="#authentication" data-toggle="tab">Authentication</a></li>

</ul>

<div class="tab-content">
        <div class="tab-pane fade in active" id="tab_a">

<form role="form" method="post" class="form-horizontal form-groups-bordered validate" action="">
<div class="row">
		<div class="col-md-12">
			
			<div class="panel" data-collapsed="0">
				
				<div class="panel-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Comapny</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" value="Time Control" id="field-1">
						</div>
					</div>

	            <hr>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Open from</label>
						
						<div class="col-sm-5">
<div name="open" class="bfh-timepicker" data-time="now" data-mode="12h"> </div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Closed from</label>
						
						<div class="col-sm-5">
							<div name="closed" class="bfh-timepicker"  data-time="now" data-mode="12h"> </div>
						</div>
					</div>					
	            <hr>
            <div class="form-group">
        <label for="config-site" class="col-sm-3 control-label">Application status</label>
		 <div class="col-sm-5">
          <input type="checkbox" id="config-site" name="config-site" checked  data-on-color="success" data-off-color="danger" data-on-text="&nbsp; Online" data-off-text="Offline"  class="form-control " >
         </div>
		</div>
	
					<div class="form-group">
						<label for="field-3" class="col-sm-3 control-label">Application URL</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="site-url" id="field-3" data-validate="required,url" value="http://dev.timecontrol.be">
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-4" class="col-sm-3 control-label">Email address</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="bugContact" id="field-4" value="bugs@idevelopment.be" placeholder="bugs@idevelopment.be" data-validate="required,email" readonly="">
							<span class="description">Here you will receive site notifications.</span>
						</div>
					</div>

               <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">&nbsp;</label>
						<div class="col-sm-5">
							<button type="submit" id="save" name="save" class="btn btn-primary">Save changes</button>
						</div>
					</div>
					
					
				 	</form>
				</div>
			
			</div>
		
		</div>
	</div>
        </div>
        <div class="tab-pane fade in" id="tab_b">
			<div class="panel panel-default" data-collapsed="0">
				<div class="panel-body">
		<form class="form-horizontal">
<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">IMAP host name and port</label>
						
						<div class="col-sm-4">
							<input type="text" name="mail°hostname" placeholder="mail.idevelopment.be" class="form-control col-lg-4" id="field-2">
						</div>
						<div class="col-sm-1">
							<input type="text" name="mail°port" value="143" class="form-control col-lg-1" id="field-2">
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-3" class="col-sm-3 control-label">Email address</label>
						
						<div class="col-sm-5">
							<input type="email" class="form-control" placeholder="planning@idevelopment.be" name="mail_email" id="field-3">
							<span class="description">Here you will receive site notifications.</span>
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-4" class="col-sm-3 control-label">Password</label>
						
						<div class="col-sm-5">
							<input type="password" class="form-control" value="" name="mail_password" id="field-4">

						</div>
					</div>

	          <hr>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">SMTP hostname and port</label>
						
						<div class="col-sm-4">
							<input type="text" name="mail°hostname" class="form-control col-lg-4" id="field-2">
						</div>
						<div class="col-sm-1">
							<input type="text" name="mail°port" value="25" class="form-control col-lg-1" id="field-2">
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-3" class="col-sm-3 control-label">Email address</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" name="mail_email" id="field-3">
						</div>
					</div>
	
					<div class="form-group">
						<label for="field-4" class="col-sm-3 control-label">Password</label>
						
						<div class="col-sm-5">
							<input type="password" class="form-control" name="mail_password" id="field-4">
							<span class="description">Here you will receive site notifications.</span>
						</div>
					</div>
					
               <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">&nbsp;</label>
						<div class="col-sm-5">
							<button type="submit" id="save" name="save" class="btn btn-primary">Save changes</button>
						</div>
					</div>					
					
					
					
					
				</form>	
				</div>
			
			</div>
        </div>
       <div class="tab-pane fade in" id="authentication">
        <div class="panel panel-default" data-collapsed="0">
		  <div class="panel-body">
		   <form action="" method="post" class="form-horizontal">
        <div class="form-group">
						<label for="ldap_hostname" class="col-sm-3 control-label">Login DN</label>
						<div class="col-sm-4">
							<input type="text" name="ldap_hostname" id="ldap_hostname" value="cn=Manager,dc=ip-ops,dc=be" class="form-control col-lg-4" id="field-2">
						</div>
		  </div>
        
        <div class="form-group">
						<label for="ldap_password" class="col-sm-3 control-label">LDAP password</label>
						<div class="col-sm-4">
							<input type="password" name="ldap_password" id="ldap_password"  class="form-control col-lg-4" id="field-2">
						</div>
		  </div>		  		  
        <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">&nbsp;</label>
						<div class="col-sm-5">
							<button type="submit" id="save" name="save" class="btn btn-primary">Save changes</button> &nbsp; <button type="button" id="test" name="test" class="btn btn-default">Test settings</button>
						</div>
					</div>					
					
				</form>	
        </div>

</div><!-- tab content -->
</form>