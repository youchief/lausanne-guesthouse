<div class="roomPics form">
<?php echo $this->Form->create('RoomPic'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Room Pic'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class'=>'form-control'));
		echo $this->Form->input('url', array('class'=>'form-control'));
		echo $this->Form->input('ext', array('class'=>'form-control'));
		echo $this->Form->input('type', array('class'=>'form-control'));
		echo $this->Form->input('size', array('class'=>'form-control'));
		echo $this->Form->input('room_id', array('class'=>'form-control'));
	?>
	</fieldset>
        <hr>
<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
