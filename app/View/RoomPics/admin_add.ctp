<div class="roomPics form">
<?php echo $this->Form->create('RoomPic', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Room Pic'); ?></legend>
	<?php
		echo $this->Form->input('url', array('class'=>'form-control', 'type'=>'file'));
	?>
	</fieldset>
        <hr>
<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
