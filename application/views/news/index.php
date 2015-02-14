<div class="page-header">
<h3><?php echo lang('news_header');?></h3>
</div>

<table id="news" class="display">
<thead>
 <th class="col-lg-1">#</th>
 <th class="col-lg-2"><?php echo lang('news_date_created');?></th>
 <th class=""><?php echo lang('news_title');?></th>
 <th class="col-lg-1">&nbsp;</th>
</thead>
<tbody>
<?php foreach ($news as $news_item): ?>
<tr>
   <td><?php echo $news_item['id'] ?></td>   
   <td><?php echo $news_item['date_created'] ?></td>
   <td><?php echo $news_item['title'] ?></td>
   <td>
    <div class="btn-group">
       <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
       <?php echo lang('news_action_menu_title');?> <span class="caret"></span>
      </button>
     <ul class="dropdown-menu" role="menu">
      <li><a href="<?php echo base_url("index.php/news/more"); ?>/<?php echo $news_item['id'] ?>/"><?php echo lang('news_action_menu_read');?></a></li>
      <li><a href="<?php echo base_url("index.php/news/change"); ?>/<?php echo $news_item['id'] ?>/"><?php echo lang('news_action_menu_edit');?></a></li>
      <li class="divider"></li>
      <li><a href="<?php echo base_url("index.php/news/remove/".$news_item['id'].""); ?>" class="confirm"><i class="fa fa-times"></i> <?php echo lang('news_action_menu_remove');?> </a></li>
     </ul>
   </div>   
   </td>
</tr>

<?php endforeach ?>
</tbody>

</table>
