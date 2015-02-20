<div class="page-header"> 
 <h2>Request tasks</h2>
</div>
<p><a href="<?php echo base_url('planning/request_task'); ?>" class="btn btn-success"><?php echo lang('task_button_new') ?></a> </p>

<div class="clearfix">&nbsp;</div>
<?php if(!empty($message)) { ?>

<div class="row">
<div class="col-md-12">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p><?php echo $message;?></p></div>
</div>
</div>

<?php } ?>
<div class="clearfix">&nbsp;</div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
     <div id="myStat"
          data-text="30"
          data-type="full"
          data-info="New tasks"
          data-fontsize="35"
          data-fgcolor="#f89406"
          data-bgcolor="#eee"
          data-fill="#ffffff"
          data-total="100"
          data-part="60"
          data-animationstep="0"  
          data-bordersize="20"
          style="margin-left:50px;">
      </div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
     <div id="myStat2"
          data-text="30"
          data-type="full"
          data-info="Approved tasks"
          data-fontsize="35"
          data-fgcolor="#469408"
          data-bgcolor="#eee"
          data-fill="#ffffff"
          data-total="100"
          data-part="60"
          data-animationstep="0"  
          data-bordersize="20"
          style="margin-left:50px;">
      </div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
     <div id="myStat3"
          data-text="30"
          data-type="full"
          data-info="Declined tasks"
          data-fontsize="35"
          data-fgcolor="#d9230f"
          data-bgcolor="#eee"
          data-fill="#ffffff"
          data-total="100"
          data-part="60"
          data-animationstep="0"  
          data-bordersize="20"
          style="margin-left:50px;">          
      </div>
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
     <div id="myStat4"
          data-text="30"
          data-type="full"
          data-info="New tasks"
          data-fontsize="35"
          data-fgcolor="#d9230f"
          data-bgcolor="#eee"
          data-fill="#ffffff"
          data-total="100"
          data-part="60"
          data-animationstep="0"  
          data-bordersize="20">
      </div>
                    
                </div>
            </div>
        </div>
   </div>

<div class="clearfix">&nbsp;</div>
   
<div class="row">
<div class="col-md-12">

<div class="panel panel-info">
<div class="panel-heading">Details</div>
<div class="panel-body">
 <table class="table table-hover table-responsive">
  <thead>
    <tr>
     <th>Task id</th>
     <th>Created</th>     
     <th>Type</th>
     <th>Task starts</th>
     <th>Task ends</th>
     <th>Assigned to</th>
     <th>Requested by</th>     
     <th>Status</th>
    </tr>  
  </thead>
  <tbody>
       <?php foreach ($task as $task_item):?>  
     <tr>
     <td><a href="">#<?php echo $task_item['request_id'];?></a></td>
     <td>19/03/2015 07:00</td>
     <td><?php echo $task_item['task_type'];?></td>
     <td><?php echo $task_item['request_start'];?></td>
     <td><?php echo $task_item['request_stop'];?></td>
     <td><a href="#"><?php echo $task_item['first_name'];?> <?php echo $task_item['last_name'];?></a></td>
     <td><a href="#"><?php echo $task_item['first_name'];?> <?php echo $task_item['last_name'];?></a></td>
     <td><p class="badge label label-success">Open</p></td>
    </tr> 
    
       <?php endforeach ?> 
  </tbody>
 
 </table>

</div>
</div>
</div>
</div>   