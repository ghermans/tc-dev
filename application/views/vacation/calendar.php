
<div class="row">
<div class="col-lg-8">
<div class="panel panel-primary">
<div class="panel-heading">Vacation calendar</div>
<div class="panel-body">
  <div id='calendar'></div>
  </div>
</div>  
 </div>
 
<div class="col-lg-4">
<div class="panel panel-primary">
<div class="panel-heading">Filter</div>
<div class="panel-body">
<form action="" method="post" class="form-horizontal">
  <div class="form-group">
        <label for="department" class="col-sm-3 control-label">Department</label>
        <div class="col-md-6">            
     <select name="department" id="department" class="form-control input-sm">
    <?php foreach ($department as $item): ?>
      <option value="<?php echo $item['id'];?>"><?php echo $item['name'];?></option>
      <?php endforeach ?>    
     </select>

      </div>
  </div>

  <div class="form-group">
        <label for="licenses" class="col-sm-3 control-label">Date</label>
        <div class="col-md-6">            
<input type="text"name="date" id="datepicker" class="form-control input-sm datepicker">
      </div>
  </div>

  <div class="form-group">
        <label for="" class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-md-6">            
          <button class="btn btn-primary"><i class="fa fa-search"></i> Search now</button>
      </div>
  </div>  
  
 </form>
 </div>
 </div>

</div>
</div>
 