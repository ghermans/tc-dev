<div class="row">
<div class="col-md-12">
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<table id="datatable" style="display:none">
	<thead>
		<tr>
			<th></th>
			<th>Administration</th>
			<th>Technical support</th>
			<th>Back office</th>			
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Approved tasks</th>
			<td>3</td>
			<td>4</td>
			<td>5</td>			
		</tr>
		<tr>
			<th>Declined tasks</th>
			<td>2</td>
			<td>0</td>
			<td>4</td>			
		</tr>
		<tr>
			<th>Approved holidays</th>
			<td>5</td>
			<td>11</td>
			<td>22</td>			
		</tr>
		<tr>
			<th>Declined holidays</th>
			<td>1</td>
			<td>1</td>
			<td>4</td>			
		</tr>
		<tr>
			<th>Oranges</th>
			<td>2</td>
			<td>4</td>
			<td>6</td>			
		</tr>
	</tbody>
</table>

</div>
</div>
<div class="clearfix">&nbsp;</div>



  <div class="row">
<div class="col-md-6 col-sm-2">
<div class="column">

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

<script>
$(function () {
    $('#container').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Data extracted from a HTML table in the page'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
</script>