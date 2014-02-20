<div class="newsPics view">
        <h2><?php echo __('News Pic'); ?></h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($newsPic['NewsPic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($newsPic['NewsPic']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ext'); ?></dt>
		<dd>
			<?php echo h($newsPic['NewsPic']['ext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($newsPic['NewsPic']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($newsPic['NewsPic']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('News'); ?></dt>
		<dd>
			<?php echo $this->Html->link($newsPic['News']['title'], array('controller' => 'news', 'action' => 'view', $newsPic['News']['id'])); ?>
			&nbsp;
		</dd>
        </dl>
</div>
<div class="actions">

        <div class="btn-group">
                		<?php echo $this->Html->link(__('Edit News Pic'), array('action' => 'edit', $newsPic['NewsPic']['id']), array('class'=>'btn btn-sm btn-default')); ?>
		<?php echo $this->Form->postLink(__('Delete News Pic'), array('action' => 'delete', $newsPic['NewsPic']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $newsPic['NewsPic']['id'])); ?> 
        </div>
</div>
