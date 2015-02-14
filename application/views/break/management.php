<div class="page-header">
<h3>Break management</h3>

</div>



<div class="row">
<div class="col-lg-5">

<div id="BreakStatus"
          data-dimension="260"
          data-text="<?php echo count($department_in_break)."/".$department_settings['slots'] ?>"
          data-info="Break"
          data-width="30"
          data-fontsize="38"
          data-fgcolor="#61a9dc"
          data-bgcolor="#eee"
          data-fill="#f1f1f1"
          data-total="1"
          data-part="1"
          data-type="full"
          data-animationstep="0" 
          data-bordersize="20"
          style="margin-left:120px;">
   </div>
   
<div class="clearfix">&nbsp;</div> 


<?php
	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
	echo form_open('', $attributes);

	$data["class"] = "col-sm-3 control-label";
	echo form_label('Open Slots', 'slots', $data);

	$options = array(
					'0'=>'Closed',
					'1'=>'1',
					'2'=>'2',
					'3'=>'3',
					'4'=>'4',
					'5'=>'5',
					'6'=>'6',
					'7'=>'7',
					'8'=>'8',
					'9'=>'9',
					'10'=>'10',	
	);
	

	echo "<div class='form-group'>";
	echo "<div class='col-sm-5'>";
	echo form_dropdown('slots', $options, $department_settings['slots'], 'class="form-control input-sm"');
	echo "</div>";
	echo "</div>";
	

	echo form_label('Max idle time', 'maxidletime', $data);
	echo "<div class='form-group'>";
	echo "<div class='col-sm-5'>";
	
	$options = array(
					'class'=>"form-control input-sm",
					'value'=>$department_settings['max_break'],
					'name'=> 'max_break',
				);
	echo form_input($options);
	echo "</div>";
	echo "</div>";	

	echo form_label('Max idle time', 'maxidletime', $data);
	echo "<div class='form-group'>";
	echo "<div class='col-sm-5'>";
	
	$options = array(
					'class'=>"form-control input-sm",
					'value'=>$department_settings['max_queue'],
					'name'=>'max_queue',
				);
	echo form_input($options);
	echo "</div>";
	echo "</div>";		
	
	
	echo "<div class='form-group'>";
	echo "<div class='col-sm-offset-3 col-sm-10'>";
	
	$options = array(
					'class'=>"btn btn-sm btn-primary",
					'name'=> 'saveDepartmentInfo',
					'value'=>'Update settings',
					
				);
	echo form_submit($options);
	echo "</div>";
	echo "</div>";	
 
	echo form_close();


?>
  
   
  </div>

<div class="col-lg-7">
<div class="clearfix">&nbsp;</div>
<div  class="panel panel-success">
 <div class="panel-heading"><i class="fa fa-coffee"></i> Who is taking break</div>
 <table class="table  table-hover">
<thead>
 <th>Agent</th>
 <th class="col-lg-2">In break</th>
 <th class="col-lg-2">&nbsp;</th> 
</thead> 
<tbody>


<?php
	foreach($break as $inbreak){
		
		echo "<tr class=''>
				<td>".$inbreak->first_name." ".$inbreak->last_name."</td>  
			    <td>".$inbreak->breaktime." min</td>
			    <td><a href='#' data-toggle='tooltip' data-placement='bottom' title='Kick agent'><i class='fa fa-times fa-lg'></i></a></td>  
  		     </tr>";
		
	}



?>


</tbody> 
 </table>
 </div>


<div  class="panel panel-danger">
 <div class="panel-heading"><i class="fa fa-headphones"></i> hold list</div>
 
 <table class="table table-striped">
 <thead>
 <th>Agent</th>
 <th class="col-lg-2">Hold time</th>
 <th class="col-lg-2">&nbsp;</th>
</thead> 
<tbody>





<?php
	foreach($queue as $inqueue){
		
		echo "<tr class=''>
				<td>".$inqueue->first_name." ".$inqueue->last_name."</td>  
			    <td>".$inqueue->queuetime." min</td>
			    <td><a href='promote/".$inqueue->userid."/up' data-toggle='tooltip' data-placement='bottom' title='Move up'><i class='fa fa-arrow-up fa-lg'></i></a> <a href='promote/".$inqueue->userid."/down' data-toggle='tooltip' data-placement='bottom' title='Move down'><i class='fa fa-arrow-down fa-lg'></i></a> <a href='kick/".$inqueue->userid."' data-toggle='tooltip' data-placement='bottom' title='Kick agent'><i class='fa fa-times fa-lg'></i></a></i></td>  
  		     </tr>";
		
	}



?>

   

</tbody> 
 </table>
</div>  
</div>    
      </div>