<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#home" role="tab" data-toggle="tab">Calendar</a></li>
  <li><a href="#tasks" role="tab" data-toggle="tab">Add Tasks</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="row">
  <div class="col-sm-9">
  <div id='plan-agent'></div>

<script type="text/javascript">

$(document).ready(function() {
	
    $('#plan-agent').fullCalendar({
    	  firstDay:1,
    	  minTime:    '08:00:00',
		  maxTime:    '22:00:00',			
		  scrollTime: '08:00:00',
		  timezone:   'Europe/Brussels',
			editable: true,        
		  droppable: true,
        events:<?php echo $json ?>,
			header: {
				left: 'prev,next',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultView: 'agendaWeek',
			height: 650

    });
});
</script>
  </div> 
  <div class="col-md-3">
  <div class="panel panel-default">
    <div class="panel-body">   
   <ul class="list-unstyled"> 
    <li><a href="<?php echo base_url("planning/addagentTask");?>/<?php echo $id ?>">Add task</a></li>
    <li>    <a href="#" id="username" data-type="text" data-pk="1" data-url="/post" data-title="Enter username">superuser</a></li>
   </ul>
  </div>
</div>
</div> 
  </div>
  
  </div>
  <div class="tab-pane" id="tasks">
  <div class="row">
  <div class="col-sm-12">
	<table class="table table-bordered table-striped table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							Task name
						</th>
						<th class="text-center">
							Start
						</th>
						<th class="text-center">
							Stop
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						1
						</td>
						<td>
						<input type="text" name='taskName' class="form-control"/>
						</td>
						<td>
						<div id="taskStart" class="input-append date">
                   <input name='taskStart' data-format="yyyy-MM-dd hh:mm:ss" placeholder="yyyy-MM-dd hh:mm:ss" type="text" class="form-control">
                  </div>
						</td>
						<td>
                   <div id="taskStop" class="input-append date">
                   <input name='taskStop' data-format="yyyy-MM-dd hh:mm:ss" placeholder="yyyy-MM-dd hh:mm:ss" type="text" class="form-control">
                  </div>
						</td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			</table> 
			<p>	
			     <a id="add_row" class="btn btn-sm btn-default pull-left">Add Row</a>
			      <a id='delete_row' class="pull-right btn-sm btn btn-default">Delete Row</a></p>

			  </div>
			  </div>
			 </div>
</div>