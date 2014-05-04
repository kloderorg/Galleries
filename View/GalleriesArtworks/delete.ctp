<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('team', 'Delete') ?> <small><?php echo __d('team', 'Consultant') ?></small></h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('<i class="fa fa-heart"></i> '.__d('team', 'Team'), array('controller' => 'team', 'action' => 'index'), array('escape' => false)) ?></li>
            <li><?php echo $this->Html->link(__d('team', 'Consultant'), array('action' => 'index')) ?></li>
            <li class="active"><?php echo __d('team', 'Delete') ?></li>
        </ol>
    </div>
</div>

<h2><?php echo $this->request->data['TeamConsultant']['name'] ?> <?php echo $this->request->data['TeamConsultant']['last_name'] ?> <small>[<?php echo $this->request->data['TeamConsultant']['bc_number'] ?>]</small></h2>

<?php echo $this->Form->create('TeamConsultant') ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')) ?>

<blockquote>
    <?php echo __d('team', 'Are you sure to delete <b>%s</b>?', $this->request->data['TeamConsultant']['name'].' '.$this->request->data['TeamConsultant']['last_name']) ?>
</blockquote>

<div class="form-actions">
    <?php echo $this->Html->link(__d('team', 'Cancel'), array('action' => 'index'), array('class' => 'btn')) ?>
    <?php echo $this->Form->submit(__d('team', 'Delete'), array('class' => 'btn btn-danger', 'div' => false)) ?>
</div>

<?php echo $this->Form->end() ?>
