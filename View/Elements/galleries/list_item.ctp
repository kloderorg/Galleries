<tr>
	<td><?php echo $this->Html->link($gallery['Gallery']['name'], array('controller' => 'galleries', 'action' => 'view', $gallery['Gallery']['id'])) ?></td>
	<td><?php echo $gallery['Gallery']['created'] ?></td>

	<td style="text-align: right;">
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown">
      			<i class="fa fa-ellipsis-v"></i>
    		</button>
    		<ul class="dropdown-menu pull-right" role="menu">
    			<li><?php echo $this->Html->link(__d('galleries', 'View'), array('action' => 'view', $gallery['Gallery']['id'])) ?></li>
    			<li><?php echo $this->Html->link(__d('galleries', 'Edit'), array('action' => 'edit', $gallery['Gallery']['id'])) ?></li>
				<li><?php echo $this->Html->link(__d('galleries', 'Delete'), array('action' => 'delete', $gallery['Gallery']['id'])) ?></li>
    		</ul>
  		</div>
	</td>

</tr>
