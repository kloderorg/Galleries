<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('galleries', 'Delete') ?> <small><?php echo __d('galleries', 'Galleries') ?></small></h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('<i class="fa fa-moon-o"></i> '.__d('galleries', 'Galleries'), array('action' => 'index'), array('escape' => false)) ?></li>
            <li class="active"><?php echo __d('galleries', 'Delete') ?></li>
        </ol>
    </div>
</div>

<h2><?php echo $this->request->data['Gallery']['name'] ?></h2>

<?php echo $this->Form->create('Gallery') ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')) ?>

<blockquote>
    <?php echo __d('team', 'Are you sure to delete <b>%s</b>?', $this->request->data['Gallery']['name']) ?>
</blockquote>

<div class="form-actions">
    <?php echo $this->Html->link(__d('team', 'Cancel'), array('action' => 'index'), array('class' => 'btn')) ?>
    <?php echo $this->Form->submit(__d('team', 'Delete'), array('class' => 'btn btn-danger', 'div' => false)) ?>
</div>

<?php echo $this->Form->end() ?>
