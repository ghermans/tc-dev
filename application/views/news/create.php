<div class="page-header">
<h3>Create news item</h3>
</div>
<div class="row">
<form action="" method="post" class="form-horizontal">

<div class="form-group">
   <label for="title" class="col-sm-2 control-label">Message title</label>
	<div class="col-sm-5">
	<input type="text" name="title" class="form-control" id="title" value="">
		</div>
</div>

<div class="form-group">
   <label for="message" class="col-sm-2 control-label">Message</label>
	<div class="col-sm-5">
	<textarea id="message" name="text" rows="6" class="form-control"></textarea>
		</div>
</div>

<div class="form-group">
   <label for="notify" class="col-sm-2 control-label">Notify departement?</label>
	<div class="col-sm-5">   
   <input id="notify" type="checkbox" name="subscribe">
    <p><select id="notify" name="department" class="form-control conditionally-loaded" multiple>
         <option value="blah">Billing</option>
         <option value="blah">Development</option>
         <option value="blah">Sales</option>         
       </select>     
    </p>
</div>
</div>	

<div class="form-group">
   <label for="field-1" class="col-sm-2 control-label">&nbsp;</label>
	<div class="col-sm-5">
	 <button type="submit" name="submit" class="btn btn-primary">Save message</button>
    <button type="reset" name="reset" class="btn btn-danger">Reset</button>
   </div>
</div>
					
</form>
</div>