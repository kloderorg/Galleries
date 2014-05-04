<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('galleries', 'Administration') ?> <small><?php echo __d('galleries', 'Galleries') ?></small></h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-moon-o"></i> <?php echo __d('galleries', 'Galleries') ?></li>
        </ol>
    </div>
</div>

<div class="btn-group">
	<?php echo $this->Html->link('<i class="fa fa-plus"></i> '.__d('galleries', 'Add Gallery'), array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)) ?>
</div>

<div class="btn-group">
    <?php echo $this->Html->link(__d('galleries', '3Ds'), array('action' => 'threed'), array('class' => 'btn btn-primary')) ?>
</div>

<div style="clear:both; height: 16px;"></div>

<?php echo $this->element('pagination') ?>
<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th class="header"><?php echo __d('galleries', 'Name') ?></th>
			<th class="header"><?php echo __d('galleries', 'Created') ?></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($galleries as $gallery) : ?>
			<?php echo $this->element('galleries/list_item', compact('gallery')) ?>
		<?php endforeach; ?>
	</tbody>
</table>
<?php echo $this->element('pagination') ?>
