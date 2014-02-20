<div class="faqs form">
        <?php echo $this->Form->create('Faq'); ?>
        <fieldset>
                <legend><?php echo __('Admin Add Faq'); ?></legend>
                <?php
                
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('Faq.question.' . $lng, array('class' => 'form-control', 'label' => 'Question (' . $lng . ')'));
                }
                
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('Faq.response.' . $lng, array('class' => 'form-control', 'type'=>'textarea', 'label' => 'Reponse (' . $lng . ')'));
                }                
                ?>
        </fieldset>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>
