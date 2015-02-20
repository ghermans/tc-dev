<div class="page-header">
<h3><span class="fa fa-clock-o"></span> <?php echo lang('task_heading');?></h3>
</div>

<p><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addshift"><?php echo lang('task_button_new') ?></button> </p>

<div class="clearfix">&nbsp;</div>


<?php echo form_open('', 'class="form-horizontal"'); ?>
<div class="row">

<div class="col-md-10">
 <div class="panel panel-default">
  <div class="panel-body"> 
   <div class="form-group">  
   <label for="type" class="control-label col-md-3">Assign to </label>
     <div class="col-md-5">
      <select class="form-control"> 
       <?php foreach($users as $user_item):?>
       <option value=""><?php echo $user_item->first_name; ?> <?php echo $user_item->last_name; ?></option>
       <?php endforeach ?>   
      </select>
     </div>
   </div>
   
   <div class="form-group">  
   <label for="type" class="control-label col-md-3"> Task type </label>
     <div class="col-md-5">
      <select class="form-control"> 
       <?php foreach($tasks as $task_item):?>
       <option value="<?php echo $task_item['task_id'];?>"><?php echo $task_item['task_type']; ?></option>
       <?php endforeach ?>   
      </select>
     </div>
   </div> 

   <div class="clearfix">&nbsp;</div>
   
   <div class="form-group">  
   <label for="type" class="control-label col-md-3"> Task starts </label>
     <div class="col-md-5">
      <select class="form-control"> 
       <?php foreach($tasks as $task_item):?>
       <option value="<?php echo $task_item['task_id'];?>"><?php echo $task_item['task_type']; ?></option>
       <?php endforeach ?>   
      </select>
     </div>
   </div> 
   
   <div class="form-group">  
   <label for="type" class="control-label col-md-3"> Task ends </label>
     <div class="col-md-5">
      <select class="form-control"> 
       <?php foreach($tasks as $task_item):?>
       <option value="<?php echo $task_item['task_id'];?>"><?php echo $task_item['task_type']; ?></option>
       <?php endforeach ?>   
      </select>
     </div>
   </div>
   
  <div class="form-group">  
   <label class="control-label col-md-3"></label>
   <div class="col-md-5">
    <?php echo form_submit('submit','Save settings','class="btn btn-primary"'); ?>
   </div>
  </div>       
   
  </div>
</div> 
</div>

</div>