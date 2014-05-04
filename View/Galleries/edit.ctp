<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('galleries', 'Edit') ?> <small><?php echo __d('galleries', 'Galleries') ?></small></h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('<i class="fa fa-moon-o"></i> '.__d('galleries', 'Galleries'), array('action' => 'index'), array('escape' => false)) ?></li>
            <li class="active"><?php echo __d('galleries', 'Edit') ?></li>
        </ol>
    </div>
</div>

<?php echo $this->Form->create('Gallery') ?>

    <?php echo $this->Form->input('id', array('type' => 'hidden')) ?>
    <?php echo $this->Form->input('name', array('placeholder' => __d('galleries', 'Name'))) ?>

    <?php echo $this->Form->submit(__d('galleries', 'Save'), array('class' => 'btn btn-large btn-primary')) ?>

<?php echo $this->Form->end() ?>
