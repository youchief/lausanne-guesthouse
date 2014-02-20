<div class="faqs form">
        <?php echo $this->Form->create('Faq'); ?>
        <fieldset>
                <legend><?php echo __('Admin Edit Faq'); ?></legend>
                <?php
                echo $this->Form->input('id', array('class' => 'form-control'));

                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('Faq.question.' . $lng, array('class' => 'form-control', 'value' => $this->request->data['questionTranslation'][$key]['content'], 'label' => 'Question (' . $lng . ')'));
                }

                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('Faq.response.' . $lng, array('class' => 'form-control', 'value' => $this->request->data['responseTranslation'][$key]['content'], 'type' => 'textarea', 'label' => 'Response (' . $lng . ')'));
                }
                ?>
        </fieldset>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>
