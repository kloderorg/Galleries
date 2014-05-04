<?php $plugin = $this->request->params['plugin']; ?>
<li<?php if ($plugin == 'galleries') : ?> class="active"<?php endif; ?>>
	<?php echo $this->Html->link('<i class="fa fa-moon-o fa-fw"></i> '.__d('galleries', 'Galleries'), array('plugin' => 'galleries', 'controller' => 'galleries', 'action' => 'index'), array('escape' => false)) ?>
</li>
