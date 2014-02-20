<div class="links view">
        <h2><?php echo __('Link'); ?></h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($link['Link']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($link['Link']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($link['Link']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($link['LinkCategory']['name'], array('controller' => 'link_categories', 'action' => 'view', $link['LinkCategory']['id'])); ?>
			&nbsp;
		</dd>
        </dl>
</div>
<div class="actions">

        <div class="btn-group">
                		<?php echo $this->Html->link(__('Edit Link'), array('action' => 'edit', $link['Link']['id']), array('class'=>'btn btn-sm btn-default')); ?>
		<?php echo $this->Form->postLink(__('Delete Link'), array('action' => 'delete', $link['Link']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $link['Link']['id'])); ?> 
        </div>
</div>
