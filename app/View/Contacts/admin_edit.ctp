<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Contact'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class'=>'form-control'));
		echo $this->Form->input('firstname', array('class'=>'form-control'));
		echo $this->Form->input('lastname', array('class'=>'form-control'));
		echo $this->Form->input('email', array('class'=>'form-control'));
		echo $this->Form->input('phone', array('class'=>'form-control'));
		echo $this->Form->input('content', array('class'=>'form-control'));
	?>
	</fieldset>
        <hr>
<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
