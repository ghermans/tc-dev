<h1><?php echo lang('index_user_heading');?></h1>
<p><?php echo lang('index_user_subheading');?></p>
<p><?php echo anchor('auth/create_user', lang('index_create_user_link'), 'class="btn btn-default"')?>  <?php echo anchor('auth/create_group', lang('index_create_group_link'), 'class="btn btn-default"')?> <?php echo anchor('auth/create_permission', lang('index_create_permission_link'), 'class="btn btn-default"')?></p>

<div id="infoMessage"><?php echo $message;?></div>

<div class="panel panel-default">
<div class="panel-heading"><h1 class="panel-title"><?php echo lang('index_user_heading');?></h1></div>
<table class="table">
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th class="text-center"><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8') ;?><br />
                <?php endforeach?>
			</td>
			<td class="text-center"><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, '<span class="glyphicon glyphicon-ok-circle" style="font-size:18px;"></span>' ) : anchor("auth/activate/". $user->id, '<span class="glyphicon glyphicon-ban-circle" style="font-size:18px;"></span>');?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, '<i class="glyphicon glyphicon-pencil"></i>') ;?></td>
		</tr>
	<?php endforeach;?>
</table>
</div>


