<div class="row">
<div class="col-lg-5">

<div id="BreakStatus"
          data-dimension="260"
          data-text="<?php echo count($department_in_break) ."/". $department_settings['slots']; ?>"
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

if(count($me_in_queue) > 0 ){
	
	if((count($department_in_break) + $me_in_queue['prio']) <= $department_settings['slots']){
		
	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
	echo form_open('', $attributes);


	echo "<div class='form-group'>";
	echo "<div class='col-sm-offset-5 col-sm-10'>";
	
	$options = array(
					'class'=>"btn btn-sm btn-primary",
					'id'=> 'maxidletime',
					'name'=> 'submit',
					'value'=>'Take break',
				);
	echo form_submit($options);
	echo "</div>";
	echo "</div>";	
 
	echo form_close();
		
	}else{
		
	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
	echo form_open('', $attributes);


	echo "<div class='form-group'>";
	echo "<div class='col-sm-offset-5 col-sm-10'>";
	
	$options = array(
					'class'=>"btn btn-sm btn-primary",
					'id'=> 'maxidletime',
					'name'=> 'submit',
					'value'=>'Leave Queue',
				);
	echo form_submit($options);
	echo "</div>";
	echo "</div>";	
 
	echo form_close();		
		
		
	}

	
}elseif(count($me_in_break) >0){
	
	
		$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
	echo form_open('', $attributes);


	echo "<div class='form-group'>";
	echo "<div class='col-sm-offset-5 col-sm-10'>";
	
	$options = array(
					'class'=>"btn btn-sm btn-primary",
					'id'=> 'maxidletime',
					'name'=> 'submit',
					'value'=>'Quit Break',
				);
	echo form_submit($options);
	echo "</div>";
	echo "</div>";	
 
	echo form_close();
	
}else{
	
	if((count($department_in_break) + count($department_in_queue)) >= $department_settings['slots']){
		
		
	
	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
	echo form_open('', $attributes);


	echo "<div class='form-group'>";
	echo "<div class='col-sm-offset-5 col-sm-10'>";
	
	$options = array(
					'class'=>"btn btn-sm btn-primary",
					'id'=> 'maxidletime',
					'name'=> 'submit',
					'value'=>'Go in Queue',
				);
	echo form_submit($options);
	echo "</div>";
	echo "</div>";	
 
	echo form_close();		
		
		
	}else{
		

	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
	echo form_open('', $attributes);


	echo "<div class='form-group'>";
	echo "<div class='col-sm-offset-5 col-sm-10'>";
	
	$options = array(
					'class'=>"btn btn-sm btn-primary",
					'id'=> 'maxidletime',
					'name'=> 'submit',
					'value'=>'Take break',
				);
	echo form_submit($options);
	echo "</div>";
	echo "</div>";	
 
	echo form_close();		
		
		
	}
	
	

	
	
}
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
 <th class="col-lg-1">&nbsp;</th> 
</thead> 
<tbody>
<?php
	foreach($break as $inbreak){
		echo "<tr class=''>
				<td>".$inbreak->first_name." ".$inbreak->last_name."</td>  
			    <td>".$inbreak->breaktime." min</td>
				<td></td>
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
 <th class="col-lg-1">&nbsp;</th>
</thead> 
<tbody>
<?php
	$i=1;
	foreach($queue as $inqueue){
		echo "<tr class=''>
				<td>".$inqueue->first_name." ".$inqueue->last_name."</td>  
			    <td>".$inqueue->queuetime." min</td>
			    <td>";
			       if(($inqueue->userid == $user->id) && ($i < count($department_in_queue))){
							   echo "<a href='breaktool/demote' title='Move down'><i class='fa fa-arrow-down fa-lg'></i></a>";					   
				   }			       
				   echo "</td>
  		     </tr>";
			 $i++;
	}
?>

   

</tbody> 
 </table>
</div>  
</div>    
      </div>