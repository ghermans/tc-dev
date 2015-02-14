<div class="row">
<div class="col-md-12">
 <div class="col-md-4">
     <div id="myStat"
          data-text="40"
          data-type="full"
          data-info="New tasks"
          data-fontsize="35"
          data-percent="100" 
          data-fgcolor="#f89406"
          data-bgcolor="#eee"
          data-fill="#ffffff"
          data-total="100"
          data-part="60"
          data-animationstep="0"  
          data-bordersize="20"                  
>
      </div>
</div> 
 
 <div class="col-md-4">
     <div id="myStat2"
          data-text="30"
          data-info="Vacation requests"
          data-width="30"
          data-fontsize="48"
          data-percent="35" 
          data-fgcolor="#469408"
          data-bgcolor="#eee"
          data-fill="#ffffff"
          data-total="100"
          data-part="35"
          data-animationstep="0"
          data-bordersize="20"              
>
      </div>
</div>

 <div class="col-md-3">
     <div id="myStat3"
          data-text="30"
          data-info="Break"
          data-width="30"
          data-fontsize="38"
          data-fgcolor="#d9230f"
          data-bgcolor="#eee"
          data-fill="#ffffff"
          data-total="5"
          data-part="4"
          data-type="full"
          data-animationstep="0" 
          data-bordersize="20"    
>
      </div>
</div>



</div>
</div>
<div class="clearfix">&nbsp;</div>



  <div class="row">
<div class="col-md-6 col-sm-2">
<div class="column">

<div class="panel panel-primary">
		<div class="panel-heading">Recent action</div>
		<div class="panel-body">
<div class="list-group">
    <?php 
    foreach ($log as $log_item): 
if($log_item["type"] == 'user' ) {
	$type = "fa fa-user";
}
if($log_item["type"] == 'break' ) {
	$type = "fa fa-coffee";
}
if($log_item["type"] == 'lunch' ) {
	$type = "fa fa-cutlery";
}    
if($log_item["type"] == 'task' ) {
	$type = "fa fa-tasks";
}  
if($log_item["type"] == 'overtime') {
	$type = "fa fa-tasks";
}  

$time = $log_item["time"];
$now = time();

// will echo "2 hours ago" (at the time of this post)

?>

    <a href="#" class="list-group-item">
       <h4 class="list-group-item-heading">
       <i class="<?php echo $type ?>"></i> <?php echo $log_item["first_name"]."&nbsp;". $log_item["last_name"]; ?> <?php echo $log_item["action"]; ?></h4>
       <p class="list-group-item-text">
<abbr class="timeago" title="<?php echo $log_item["time"];?>"><?php echo $log_item["time"];?></abbr>
       </p>    
    </a>
<?php endforeach ?> 
            
 </div>
      
</div>
	</div>
<div class="clearfix">&nbsp;</div>
<div class="panel panel-primary">
		<div class="panel-heading">Open tasks</div>
		<div class="panel-body">
        <table class="table table-striped">
         <tr>
           <th>Created at</th>   
           <th>Requester</th>         
           <th>Type</th>   
           <th>&nbsp;</th>                 
         </tr>        

<tr>
           <td><abbr class="timeago" title="2011-12-17 09:24:17"> </abbr></td>   
           <td>Glenn Hermans</td>         
           <td>Side by side</td>
           <td><a href="<?php echo base_url("")  ?>"><i class="fa fa-search"></i></a></td>               
</tr>     
<tr>
           <td><abbr class="timeago" title="2014-10-28 08:24:17"> </abbr></td>   
           <td>Glenn Hermans</td>         
           <td>Coaching</td>
           <td><a href="<?php echo base_url("")  ?>"><i class="fa fa-search"></i></a></td>               
</tr>  
<tr>
           <td><abbr class="timeago" title="2014-10-27 02:00:00"> </abbr><</td>   
           <td>Glenn Hermans</td>         
           <td>Project</td>    
           <td><a href="<?php echo base_url("")  ?>"><i class="fa fa-search"></i></a></td>           
</tr>               
        </table>  
             </div> 
	     </div>


          </div>




</div>



<div class="col-md-6 col-sm-4">
<div class="column">

<div class="panel panel-primary">
		<div class="panel-heading">Monthly statistics</div>
		<div class="panel-body">
<div id="container" style="height:334px;"></div>

<table id="datatable" style="display:none">
	<thead>
		<tr>
 <?php  foreach ($department as $department_item): ?>
			<th><?php echo $department_item['name'];?></th>
        <?php endforeach; ?> 

		</tr>
	</thead>
	<tbody>

		<tr>
			<th>Absent</th>
			<td>30</td>
			<td>20</td>
			<td>6</td>
			<td>30</td>
			<td>20</td>

		</tr>
		<tr>
			<th>Break</th>
			<td>30</td>
			<td>20</td>
			<td>6</td>
			<td>30</td>
			<td>20</td>
		</tr>
		<tr>
			<th>Lunch file</th>
			<td>30</td>
			<td>20</td>
			<td>6</td>
			<td>30</td>
			<td>20</td>
		</tr>


		<tr>
			<th>Tasks</th>
			<td>30</td>	
			<td>20</td>
			<td>6</td>
			<td>30</td>
			<td>20</td>
		</tr>
		<tr>
			<th>Vacation</th>
			<td>30</td>
			<td>20</td>
			<td>6</td>
			<td>30</td>
			<td>20</td>

		</tr>
		<tr>
			<th>Overtime</th>
			<td>30</td>
			<td>20</td>
			<td>6</td>
			<td>30</td>
			<td>20</td>

		</tr>
	</tbody>
</table>

              </div>
	</div>



<div class="clearfix">&nbsp;</div>
    
                        </div><!-- row -->
                        
<div class="column">
<div class="panel panel-primary">
		<div class="panel-heading">Vacation requests</div>
		<div class="panel-body">
        <table class="table table-striped">
         <tr>
           <th>Created at</th>   
           <th>Requester</th>         
           <th>Type</th>      
           <th>&nbsp;</th>   
         </tr>        

<tr>
           <td>2014-10-27 02:00:00Z</td>   
           <td>Glenn Hermans</td>         
           <td>Halve dag</td>    
           <td><a href="<?php echo base_url("")  ?>"><i class="fa fa-search"></i></a></td>
</tr>     
<tr>
           <td>2014-10-27 02:00:00Z</td>   
           <td>Glenn Hermans</td>         
           <td>Halve dag</td>    
           <td><a href="<?php echo base_url("")  ?>"><i class="fa fa-search"></i></a></td>
</tr>   
<tr>
           <td>2014-10-27 02:00:00</td>   
           <td>Glenn Hermans</td>         
           <td>Project</td>    
           <td><a href="<?php echo base_url("")  ?>"><i class="fa fa-search"></i></a></td>           
</tr>               
        </table>  
             </div> 
	     </div>
</div>                        
                        </div>
                        </div>
