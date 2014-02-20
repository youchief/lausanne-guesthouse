<div class="roomPics view">
        <h2><?php echo __('Room Pic'); ?></h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($roomPic['RoomPic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($roomPic['RoomPic']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ext'); ?></dt>
		<dd>
			<?php echo h($roomPic['RoomPic']['ext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($roomPic['RoomPic']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($roomPic['RoomPic']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roomPic['Room']['name'], array('controller' => 'rooms', 'action' => 'view', $roomPic['Room']['id'])); ?>
			&nbsp;
		</dd>
        </dl>
</div>
<div class="actions">

        <div class="btn-group">
                		<?php echo $this->Html->link(__('Edit Room Pic'), array('action' => 'edit', $roomPic['RoomPic']['id']), array('class'=>'btn btn-sm btn-default')); ?>
		<?php echo $this->Form->postLink(__('Delete Room Pic'), array('action' => 'delete', $roomPic['RoomPic']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $roomPic['RoomPic']['id'])); ?> 
        </div>
</div>
