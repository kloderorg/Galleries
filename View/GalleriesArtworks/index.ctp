<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('team', 'Administration') ?> <small><?php echo __d('team', 'Consultants') ?></small></h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('<i class="fa fa-heart"></i> '.__d('team', 'Team'), array('controller' => 'team', 'action' => 'index'), array('escape' => false)) ?></li>
            <li class="active"><?php echo __d('team', 'Consultants') ?></li>
        </ol>
    </div>
</div>

<div class="btn-group">
	<?php echo $this->Html->link('<i class="fa fa-plus"></i> '.__d('team', 'Add Consultant'), array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)) ?>
</div>

<div class="btn-group">
	<?php echo $this->Html->link(__d('team', 'Orders'), array('controller' => 'team_orders', 'action' => 'index'), array('class' => 'btn btn-primary')) ?>
</div>

<div class="btn-group">
	<?php echo $this->Html->link(__d('team', 'New Consultants'), array('controller' => 'team_consultants', 'action' => 'new_consultants'), array('class' => 'btn btn-primary')) ?>
</div>

<div class="btn-group pull-right">
	<?php echo $this->Html->link('<i class="fa fa-cogs"></i> '.__d('team', 'Calculator'), array('controller' => 'team', 'action' => 'calculator'), array('class' => 'btn btn-primary', 'escape' => false)) ?>
</div>

<div style="clear:both; height: 16px;"></div>

<?php echo $this->element('Search.search_form', array('model' => 'TeamConsultant')) ?>

<?php echo $this->element('pagination') ?>
<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th class="header"><?php echo __d('team', 'BC Number') ?></th>
			<th class="header"><?php echo $this->Paginator->sort('name', __d('team', 'Name')) ?></th>
			<th class="header"><?php echo $this->Paginator->sort('last_name', __d('team', 'Last Name')) ?></th>
			<th class="header"><?php echo $this->Paginator->sort('start_date', __d('team', 'Start Date')) ?></th>
			<th class="header"><?php echo $this->Paginator->sort('last_order_date', __d('team', 'Status')) ?></th>
			<th class="header"><?php echo __d('team', 'Direct') ?></th>
			<th class="header"><?php echo $this->Paginator->sort('team_consultant_id', __d('team', 'Recruit')) ?></th>
			<th class="header"><?php echo $this->Paginator->sort('direct_consultant_number', __d('team', 'Status')) ?></th>
			<th class="header"><?php echo $this->Paginator->sort('last_order_date', __d('team', 'Last Order Date')) ?></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($consultants as $consultant) : ?>
			<?php echo $this->element('consultants/list_item', compact('consultant', 'top')) ?>
		<?php endforeach; ?>
	</tbody>
</table>
<?php echo $this->element('pagination') ?>

<?php //debug($consultants) ?>
