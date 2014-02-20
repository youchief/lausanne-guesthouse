<div class="container">
    <div class="rooms index">
        <h2><?php echo __('Rooms'); ?> <?php echo $this->Html->link(\__('+'), array('action' => 'add'), array('class' => 'btn btn-success btn-sm')); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table">
            <tr>
                <th>Photo</th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('min_price'); ?></th>
                <th><?php echo $this->Paginator->sort('max_price'); ?></th>
                <th><?php echo $this->Paginator->sort('book_link'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($rooms as $room): ?>
                <tr>
                    <td><?php echo $this->Html->image($room['RoomPic'][0]['url'], array('width'=>'100px'));?></td>
                    <td><?php echo h($room['Room']['name']); ?>&nbsp;</td>
                    <td><?php echo h($room['Room']['min_price']); ?>&nbsp;</td>
                    <td><?php echo h($room['Room']['max_price']); ?>&nbsp;</td>
                    <td><?php echo h($room['Room']['book_link']); ?>&nbsp;</td>
                   
                    <td class="actions">
                        <div class="btn-group">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $room['Room']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $room['Room']['id']), array('class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $room['Room']['id'])); ?>
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
</div>

