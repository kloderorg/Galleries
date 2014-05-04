<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('team', 'Administration') ?> <small><?php echo __d('team', 'New Consultants') ?></small></h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('<i class="fa fa-heart"></i> '.__d('team', 'Team'), array('controller' => 'team', 'action' => 'index'), array('escape' => false)) ?></li>
            <li class="active"><?php echo __d('team', 'New Consultants') ?></li>
        </ol>
    </div>
</div>

<div class="btn-group">
    <?php echo $this->Html->link(__d('team', 'Consultants'), array('controller' => 'team_consultants', 'action' => 'index'), array('class' => 'btn btn-primary')) ?>
</div>

<div class="btn-group">
	<?php echo $this->Html->link(__d('team', 'Orders'), array('controller' => 'team_orders', 'action' => 'index'), array('class' => 'btn btn-primary')) ?>
</div>

<div class="btn-group pull-right">
	<?php echo $this->Html->link('<i class="fa fa-cogs"></i> '.__d('team', 'Calculator'), array('controller' => 'team', 'action' => 'calculator'), array('class' => 'btn btn-primary', 'escape' => false)) ?>
</div>

<div style="clear:both; height: 16px;"></div>

<table class="table table-striped table-condensed">
    <thead>
        <tr>
            <th class="header"><?php echo __d('team', 'BC Number') ?></th>
            <th class="header"><?php echo __d('team', 'Name') ?></th>
            <th class="header"><?php echo __d('team', 'Last Name') ?></th>
            <th class="header"><?php echo __d('team', 'Start Date') ?></th>
            <th class="header"><?php echo __d('team', 'First Order') ?></th>
            <th class="header"><?php echo __d('team', '30') ?></th>
            <th class="header"><?php echo __d('team', '60') ?></th>
            <th class="header"><?php echo __d('team', '90') ?></th>
            <th class="header"><?php echo __d('team', 'Last Order Date') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($consultants as $consultant) : ?>
            <?php echo $this->element('consultants/list_new_item', compact('consultant', 'top')) ?>
        <?php endforeach; ?>
    </tbody>
</table>

<?php //debug($consultants) ?>
