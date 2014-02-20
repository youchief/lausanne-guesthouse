<div class="linkCategories view">
        <h2><?php echo __('Link Category'); ?></h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($linkCategory['LinkCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($linkCategory['LinkCategory']['name']); ?>
			&nbsp;
		</dd>
        </dl>
</div>
<div class="actions">

        <div class="btn-group">
                		<?php echo $this->Html->link(__('Edit Link Category'), array('action' => 'edit', $linkCategory['LinkCategory']['id']), array('class'=>'btn btn-sm btn-default')); ?>
		<?php echo $this->Form->postLink(__('Delete Link Category'), array('action' => 'delete', $linkCategory['LinkCategory']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $linkCategory['LinkCategory']['id'])); ?> 
        </div>
</div>
        <div class="related">
                <h3><?php echo __('Related Links'); ?></h3>
                <?php if (!empty($linkCategory['Link'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                        <tr>
                                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Link Category Id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php
		$i = 0;
		foreach ($linkCategory['Link'] as $link): ?>
		<tr>
			<td><?php echo $link['id']; ?></td>
			<td><?php echo $link['title']; ?></td>
			<td><?php echo $link['url']; ?></td>
			<td><?php echo $link['link_category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'links', 'action' => 'view', $link['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'links', 'action' => 'edit', $link['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'links', 'action' => 'delete', $link['id']), null, __('Are you sure you want to delete # %s?', $link['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                </table>
                <?php endif; ?>

        </div>
