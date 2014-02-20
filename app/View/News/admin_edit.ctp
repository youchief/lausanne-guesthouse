<div class="news form">
        <?php echo $this->Form->create('News'); ?>
        <fieldset>
                <legend><?php echo __('Admin Edit News'); ?></legend>
                <?php
                echo $this->Form->input('id', array('class' => 'form-control'));
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('News.title.' . $lng, array('class' => 'form-control', 'value' => $this->request->data['titleTranslation'][$key]['content'], 'label' => 'Title (' . $lng . ')'));
                }

                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('News.body.' . $lng, array('class' => 'form-control', 'value' => $this->request->data['bodyTranslation'][$key]['content'], 'type'=>'textarea', 'label' => 'Body (' . $lng . ')'));
                }
                ?>
        </fieldset>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>
