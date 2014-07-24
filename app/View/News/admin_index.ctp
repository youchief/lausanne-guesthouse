<div class="news index">
    <h2><?php echo __('News'); ?> <?php echo $this->Html->link(\__('+'), array('action' => 'add'), array('class' => 'btn btn-success btn-sm')); ?></h2>
    <table cellpadding="0" cellspacing="0" class="table">
        <tr>
            <th><?php echo $this->Paginator->sort('pic'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('title'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($news as $news): ?>
            <tr>
                <td>
                    <?php
                    if (empty($news['NewsPic']['url'])) {
                        echo $this->Html->link(__('Add Pic'), array('controller' => 'newsPics', 'action' => 'add', $news['News']['id']), array('class' => 'btn btn-default btn-xs'));
                    } else {
                        echo $this->Html->image($news['NewsPic']['url'], array('width' => '100px'));
                        echo "<br>";
                        echo $this->Html->link(__('Edit Pic'), array('controller' => 'newsPics', 'action' => 'edit', $news['NewsPic']['id']), array('class' => 'btn btn-default btn-xs'));
                    }
                    ?>
                </td>
                <td><?php echo $this->Time->format('d/m/y h:i', $news['News']['created']); ?>&nbsp;</td>
                <td><?php echo h($news['News']['title']); ?>&nbsp;</td>
                <td class="actions">
                    <div class="btn-group">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), array('class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $news['News']['id'])); ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="well well-sm">
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>
    </div>
    <ul class="pagination">
        <?php echo '<li>' . $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')) . '</li>' ?>
        <?php echo '<li>' . $this->Paginator->numbers(array('separator' => '')) . '</li>' ?>
        <?php echo '<li>' . $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')) . '</li>' ?>
    </ul>
</div>
