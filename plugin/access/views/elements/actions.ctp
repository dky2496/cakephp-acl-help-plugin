<h3>Actions</h3>
<ul>
<li><?php echo $html->link(__('List ARO\'s',true),array('action'=>'list_groups')); ?></li>
<li><?php echo $html->link(__('List ACO\'s',true),array('action'=>'list_aco')); ?></li>
<li>------------------</li>
<li><?php echo $html->link(__('Build ACL',true),array('action'=>'build_acl'),array(),'Are you sure to build?'); ?></li>
<li><?php echo $html->link(__('Initialize DB',true),array('action'=>'init_db'),array(),'Are you sure to Initialize?'); ?></li>
</ul>
