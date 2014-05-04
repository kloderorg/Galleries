<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('galleries', 'View') ?> <small><?php echo __d('galleries', 'Galleries') ?></small></h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('<i class="fa fa-moon-o"></i> '.__d('galleries', 'Galleries'), array('action' => 'index'), array('escape' => false)) ?></li>
            <li class="active"><?php echo __d('galleries', 'View') ?></li>
        </ol>
    </div>
</div>

<h2><?php echo $gallery['Gallery']['name'] ?></h2>

<div style="clear:both; height: 16px;"></div>

<div class="btn-group">
	<?php echo $this->Html->link('<i class="fa fa-plus"></i> '.__d('galleries', 'Add Artwork'), array('controller' => 'galleries_artworks', 'action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)) ?>
</div>

<div style="clear:both; height: 16px;"></div>

<div class="btn-group">
    <?php echo $this->Html->link(__d('galleries', 'Edit'), array('action' => 'edit', $gallery['Gallery']['id']), array('class' => 'btn btn-primary')) ?>
    <?php echo $this->Html->link(__d('galleries', 'Delete'), array('action' => 'delete', $gallery['Gallery']['id']), array('class' => 'btn btn-danger')) ?>
</div>
