<div class="links form">
<?php echo $this->Form->create('Link'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Link'); ?></legend>
	<?php
		echo $this->Form->input('title', array('class'=>'form-control'));
		echo $this->Form->input('url', array('class'=>'form-control'));
		echo $this->Form->input('link_category_id', array('class'=>'form-control'));
	?>
	</fieldset>
        <hr>
<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
