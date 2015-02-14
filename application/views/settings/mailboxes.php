<div class="page-header">
<h3>Mail accounts</h3>
</div>

<div class="col-lg-9">
    <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Type</th>
            <th>Host name</th>
            <th class="col-md-1">Port</th>
            <th>Login</th>
            <th class="col-md-2">&nbsp;</th>
        </tr>
    </thead>
 <?php foreach ($mailbox as $mailbox_item): ?>    
            <tr>
                <td><?php echo $mailbox_item['type'] ?></td>                
                <td><?php echo $mailbox_item['hostname'] ?></td>
                <td><?php echo $mailbox_item['port'] ?></td>
                <td><?php echo $mailbox_item['login'] ?></td> 
                <td class="text-center">
                <a class='btn btn-sm btn-default' href="<?php echo base_url('settings/edittemplate');?>/<?php echo $mailbox_item['id']?>"><span class="fa fa-pencil"></span> Edit</a>
                <a href="<?php echo base_url('settings/edittemplate');?>/<?php echo $mailbox_item['id']?>" class="btn btn-sm btn-danger" id="Confirm"><span class="fa fa-times"></span> Remove</a></td>
            </tr>
   <?php endforeach ?>            
            
    </table>
    </div>
    
    <div class="col-lg-3">
      <div class="panel panel-primary">
    <div class="panel-body">   
   <ul class="list-unstyled"> 
    <li><a href="<?php echo base_url("settings/addmailbox");?>"><i class="fa fa-plus fa-lg"></i> Add mailbox</a></li>
   </ul>
  </div>
</div>
    
    </div>