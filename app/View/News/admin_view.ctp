<div class="news view">
        <h2><?php echo __('News'); ?></h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($news['News']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($news['News']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>    
			<?php echo h($news['News']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pic'); ?></dt>
		<dd>
			<?php echo h($news['News']['pic']); ?>
			&nbsp;
		</dd>
        </dl>
</div>
<div class="actions">

        <div class="btn-group">
                		<?php echo $this->Html->link(__('Edit News'), array('action' => 'edit', $news['News']['id']), array('class'=>'btn btn-sm btn-default')); ?>
		<?php echo $this->Form->postLink(__('Delete News'), array('action' => 'delete', $news['News']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $news['News']['id'])); ?> 
        </div>
</div>
