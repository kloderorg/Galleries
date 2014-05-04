<?php
$sidebar_plugins = array('Galleries');
if(!Configure::check('Sidebar.plugins')) Configure::write('Sidebar.plugins', $sidebar_plugins);
else Configure::write('Sidebar.plugins', array_merge(Configure::read('Sidebar.plugins'), $sidebar_plugins));
