<div class="faqs view">
        <h2><?php echo __('Faq'); ?></h2>
        <dl>
                <dt><?php echo __('Id'); ?></dt>
                <dd>
                        <?php echo h($faq['Faq']['id']); ?>
                        &nbsp;
                </dd>
                <?php
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo '<dt>' . __('Question') . " " . $lng . '</dt>';


                        echo '<dd>' . $faq['questionTranslation'][$key]['content'] . '</dd>';
                }
                ?>
                
                <?php
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo '<dt>' . __('Response') . " " . $lng . '</dt>';


                        echo '<dd>' . $faq['responseTranslation'][$key]['content'] . '</dd>';
                }
                ?>
                
            
        </dl>
</div>
<div class="actions">

        <div class="btn-group">
                <?php echo $this->Html->link(__('Edit Faq'), array('action' => 'edit', $faq['Faq']['id']), array('class' => 'btn btn-sm btn-default')); ?>
                <?php echo $this->Form->postLink(__('Delete Faq'), array('action' => 'delete', $faq['Faq']['id']), array('class' => 'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $faq['Faq']['id'])); ?> 
        </div>
</div>
