<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('team', 'Edit') ?> <small><?php echo __d('team', 'Consultant') ?></small></h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('<i class="fa fa-heart"></i> '.__d('team', 'Team'), array('controller' => 'team', 'action' => 'index'), array('escape' => false)) ?></li>
            <li><?php echo $this->Html->link(__d('team', 'Consultant'), array('action' => 'index')) ?></li>
            <li class="active"><?php echo __d('team', 'Edit') ?></li>
        </ol>
    </div>
</div>

<?php echo $this->Form->create('TeamConsultant') ?>

    <?php echo $this->Form->input('id', array('type' => 'hidden')) ?>
    <?php echo $this->Form->input('bc_number', array('placeholder' => __d('team', 'BC Number'), 'required', 'autofocus')) ?>
    <?php echo $this->Form->input('name', array('placeholder' => __d('team', 'Name'))) ?>
    <?php echo $this->Form->input('last_name', array('placeholder' => __d('team', 'Last Name'))) ?>
    <?php echo $this->Form->input('start_date', array('placeholder' => __d('team', 'Start Date'))) ?>
    <?php echo $this->Form->input('email', array('placeholder' => __d('team', 'Email'))) ?>
    <?php echo $this->Form->input('phone', array('placeholder' => __d('team', 'Phone'))) ?>
    <?php echo $this->Form->input('address', array('placeholder' => __d('team', 'Address'))) ?>
    <?php echo $this->Form->input('birth_date', array('placeholder' => __d('team', 'Birth Date'))) ?>
    <?php echo $this->Form->input('team_consultant_id', array('placeholder' => __d('team', 'Recruiter'))) ?>

    <?php if ($this->request->data['TeamConsultant']['direct_consultant_number'] >= 8) : ?>
        <?php echo $this->Form->input('diq', array('placeholder' => __d('team', 'DIQ'))) ?>
    <?php endif; ?>

    <?php echo $this->Form->submit(__d('team', 'Save'), array('class' => 'btn btn-large btn-primary')) ?>

<?php echo $this->Form->end() ?>
