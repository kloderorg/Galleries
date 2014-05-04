<div class="row">
    <div class="col-lg-12">
        <h1><?php echo __d('galleries', 'Add') ?> <small><?php echo __d('galleries', 'Artworks') ?></small></h1>
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('<i class="fa fa-moon-o"></i> '.__d('galleries', 'Galleries'), array('controller' => 'galleries', 'action' => 'index'), array('escape' => false)) ?></li>
            <li><?php echo $this->Html->link(__d('galleries', 'Artworks'), array('action' => 'index')) ?></li>
            <li class="active"><?php echo __d('galleries', 'Add') ?></li>
        </ol>
    </div>
</div>

<?php echo $this->Form->create('GalleriesArtwork') ?>

    <?php echo $this->Form->input('name', array('placeholder' => __d('galleries', 'Name'), 'required', 'autofocus')) ?>
    <?php echo $this->Form->input('dimensions', array('placeholder' => __d('galleries', 'Dimensions'))) ?>
    <?php echo $this->Form->input('technique', array('placeholder' => __d('galleries', 'Technique'))) ?>
    <?php echo $this->Form->input('date', array('placeholder' => __d('galleries', 'Date'))) ?>
    <?php echo $this->Form->input('gallery_id', array('placeholder' => __d('galleries', 'Gallery'))) ?>

    <?php echo $this->Form->submit(__d('galleries', 'Save'), array('class' => 'btn btn-large btn-primary')) ?>

<?php echo $this->Form->end() ?>
