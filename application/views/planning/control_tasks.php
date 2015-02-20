<div class="page-header"> 
 <h2>Request tasks</h2>
</div>
<p><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addshift"><?php echo lang('task_button_new') ?></button> </p>

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
                     <h4 class="">Open tasks request</h4>
                    <div class="list-group">
<a href="#" class="list-group-item">Project - Glenn Hermans </a>
<a href="#" class="list-group-item"> Project - Glenn Hermans</a>
                                                                                              
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                     <h4 class="">Tasks in progress</h4>
                    <div class="list-group">
<a href="#" class="list-group-item">Project - Glenn Hermans </a>
<a href="#" class="list-group-item"> Project - Glenn Hermans</a>
                                                                                                  
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                     <h4 class="">Declined tasks</h4>
                    <div class="list-group">
      
<a href="#" class="list-group-item">Project - Glenn Hermans </a>
<a href="#" class="list-group-item"> Project - Glenn Hermans</a>                                                                                                  
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                     <h4 class="">Approved tasks</h4>
                    <div class="list-group">
<a href="#" class="list-group-item">Project - Glenn Hermans </a>
<a href="#" class="list-group-item"> Project - Glenn Hermans</a>
    </a>                                                                                                   
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
     
     <tr>
     <td><a href="">#2</a></td>
     <td>19/03/2015 07:00</td>
     <td>Project</td>
     <td>08:00</td>
     <td>16:00</td>
     <td><a href="#">Glenn Hermans</a></td>
     <td><a href="#">Glenn Hermans</a></td>
     <td><p class="badge label label-success">Open</p></td>
    </tr> 
    
     <tr>
     <td><a href="">#1</a></td>
     <td>19/03/2015 07:00</td>
     <td>Project</td>
     <td>08:00</td>
     <td>16:00</td>
     <td><a href="#">Glenn Hermans</a></td>
     <td><a href="#">Glenn Hermans</a></td>
     <td><p class="badge progress-bar-danger">Declined</p></td>
    </tr>    
  </tbody>
 
 </table>

</div>
</div>
</div>
</div>   