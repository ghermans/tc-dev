<div class="page-header">
<h3>Edit announcement</h3>
</div>
<div class="row">
<form action="" method="post" class="form-horizontal">

<div class="form-group">
   <label for="title" class="col-sm-2 control-label">Message title</label>
	<div class="col-sm-5">
	<input type="text" name="name" value="<?php echo $template_item['name']; ?>" class="form-control" id="name" value="">
		</div>
</div>

<div class="form-group">
   <label for="location" class="col-sm-2 control-label">Location</label>
	<div class="col-sm-5">
	<input type="text" name="title" value="<?php echo $template_item['location']; ?>" class="form-control" id="location" value="">
		</div>
</div>

<div class="form-group">
   <label for="field-1" class="col-sm-2 control-label">Content</label>
	<div class="col-sm-5">
	<textarea class="form-control">
	<?php echo $file; ?>
</textarea>
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

