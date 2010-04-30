<div id="content">
	<div class="access index">

		<?php 
			echo $form->create();
			echo $form->input('groups');
		 ?>
		<?php echo $tree->view($acos); ?>
		
		<?php echo $form->end('submit'); ?>
		<?php //debug($acos); ?>
	</div>
	<div class="actions">
		<?php echo $this->element('actions'); ?>
	</div>


</div>