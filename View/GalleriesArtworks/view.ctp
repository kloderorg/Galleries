<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('team', 'View') ?> <small><?php echo __d('team', 'Consultant') ?></small></h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('<i class="fa fa-heart"></i> '.__d('team', 'Team'), array('controller' => 'team', 'action' => 'index'), array('escape' => false)) ?></li>
            <li><?php echo $this->Html->link(__d('team', 'Consultant'), array('action' => 'index')) ?></li>
            <li class="active"><?php echo __d('team', 'View') ?></li>
        </ol>
    </div>
</div>

<h2><?php echo $consultant['TeamConsultant']['name'] ?> <?php echo $consultant['TeamConsultant']['last_name'] ?> <small>[<?php echo $consultant['TeamConsultant']['bc_number'] ?>]</small></h2>

<div class="pull-right">
    <strong><?php echo __d('team', 'Ladder of Success') ?></strong> <h2 id="ladder" style="margin-top:0"><i class="fa fa-refresh fa-spin"></i></h2>
    <script type="text/javascript">
    $(function() {
        var uri = '<?php echo $this->Html->url(array('plugin' => 'team', 'controller' => 'team_consultants', 'action' => 'ladder', 'ext' => 'json', $consultant['TeamConsultant']['id'])) ?>';
        $.getJSON(uri, function (data) {
            var text = '', image = '#';
            if (data == 1) { text = '<?php echo __d('team', 'Sapphire') ?>'; image = 'sapphire'; }
            if (data == 2) { text = '<?php echo __d('team', 'Ruby') ?>'; image = 'ruby'; }
            if (data == 3) { text = '<?php echo __d('team', 'Diamond') ?>'; image = 'diamond'; }
            if (data == 4) { text = '<?php echo __d('team', 'Emerald') ?>'; image = 'emerald'; }
            if (data == 5) { text = '<?php echo __d('team', 'Pearl') ?>'; image = 'pearl'; }
            if (data == 6) { text = '<?php echo __d('team', 'Pearl 2') ?>'; image = 'pearl'; }
            if (data == 7) { text = '<?php echo __d('team', 'Pearl 3') ?>'; image = 'pearl'; }
            if (data == 8) { text = '<?php echo __d('team', 'Pearl 4') ?>'; image = 'pearl'; }

            if (text != '') {
                var img = '<img src="<?php echo $this->Html->url('/team/img/') ?>'+image+'.png" style="width:32px;height:32px;" />';
                $('#ladder').html(img+' '+text);
            } else {
                $('#ladder').html('<?php echo __d('team', 'No') ?>');
            }
        });
    });
    </script>
</div>

<strong><?php echo __d('team', 'Start Date') ?></strong> <?php echo $consultant['TeamConsultant']['start_date'] ?><br />
<strong><?php echo __d('team', 'Email') ?></strong> <a href="mailto:<?php echo $consultant['TeamConsultant']['email'] ?>"><?php echo $consultant['TeamConsultant']['email'] ?></a><br />
<strong><?php echo __d('team', 'Phone') ?></strong> <a href="tel:<?php echo $consultant['TeamConsultant']['phone'] ?>"><?php echo $consultant['TeamConsultant']['phone'] ?></a><br />

<hr />

<h2><?php echo __d('team', 'Orders') ?></h2>
<table class="table table-striped table-condensed">
    <thead>
        <tr>
            <th class="header"><?php echo __d('team', 'Date') ?></th>
            <th class="header"><?php echo __d('team', 'Amount') ?></th>
            <th class="header"><?php echo __d('team', 'Retail Amount') ?></th>
        </tr>
    </thead>
    <?php foreach ($orders as $order) : ?>
        <?php echo $this->element('consultants/list_order_subitem', compact('order')) ?>
    <?php endforeach; ?>
</table>
<div class="btn-group">
    <?php echo $this->Html->link(__d('team', 'Add Order'), array('controller' => 'team_orders', 'action' => 'add', $consultant['TeamConsultant']['id']), array('class' => 'btn btn-primary')) ?>
</div>

<hr />

<h2><?php echo __d('team', 'Consultants') ?></h2>
<table class="table table-striped table-condensed">
    <thead>
        <tr>
            <th class="header"><?php echo __d('team', 'BC Number') ?></th>
            <th class="header"><?php echo __d('team', 'Name') ?></th>
            <th class="header"><?php echo __d('team', 'Last Name') ?></th>
            <th class="header"><?php echo __d('team', 'Start Date') ?></th>
            <th class="header"><?php echo __d('team', 'Last Order Date') ?></th>
        </tr>
    </thead>
    <?php foreach ($consultants as $subconsultant) : ?>
        <?php echo $this->element('consultants/list_consultant_subitem', compact('subconsultant')) ?>
    <?php endforeach; ?>
</table>
<div class="btn-group">
    <?php echo $this->Html->link(__d('team', 'Add Consultant'), array('controller' => 'team_consultants', 'action' => 'add', $consultant['TeamConsultant']['id']), array('class' => 'btn btn-primary')) ?>
</div>

<hr />

<?php //debug($consultant) ?>

<div style="clear:both; height: 16px;"></div>

<div class="btn-group">
    <?php echo $this->Html->link(__d('team', 'Edit'), array('action' => 'edit', $consultant['TeamConsultant']['id']), array('class' => 'btn btn-primary')) ?>
    <?php echo $this->Html->link(__d('team', 'Delete'), array('action' => 'delete', $consultant['TeamConsultant']['id']), array('class' => 'btn btn-danger')) ?>
</div>
