<h1><?php echo lang('index_group_heading');?></h1>
<p><?php echo anchor('auth/create_user', lang('index_create_user_link'), 'class="btn btn-default"')?>  <?php echo anchor('auth/create_group', lang('index_create_group_link'), 'class="btn btn-default"')?> <?php echo anchor('auth/create_permission', lang('index_create_permission_link'), 'class="btn btn-default"')?></p>

<p><?php echo lang('index_group_subheading');?></p>
<div class="panel panel-default">
<div class="panel-heading"><h1 class="panel-title"><?php echo lang('index_group_heading');?></h1></div>
<table class="table table-striped">
        <tr>
                <th><?php echo lang('index_group_name_th');?></th>
                <th><?php echo lang('index_group_desc_th');?></th>
                <th><?php echo lang('index_group_permissions_th');?></th>
                <th><?php echo lang('index_action_th');?></th>
        </tr>
        <?php foreach ($groups as $group):?>
                <tr>
                        <td><?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?></td>
                        <td><?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?></td>
                        <td>
                            <?php foreach ($group->permissions as $permission):?>
                                <?php echo anchor("auth/edit_permission/".$permission->id, htmlspecialchars($permission->description,ENT_QUOTES,'UTF-8')) ;?><br />
                            <?php endforeach?>
                        </td>
                        <td><?php echo anchor("auth/edit_group/".$group->id, '<i class="fa fa-pencil"></i>') ;?></td>
                </tr>
        <?php endforeach;?>
</table>
</div>
