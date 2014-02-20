<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
    tinymce.init({selector:'textarea'});
</script>
<div class="rooms form">
        <?php echo $this->Form->create('Room'); ?>
        <fieldset>
                <legend><?php echo __('Admin Edit Room'); ?></legend>
                <?php
                echo $this->Form->input('id', array('class' => 'form-control'));
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('Room.name.' . $lng, array('class' => 'form-control','value' => $this->request->data['nameTranslation'][$key]['content'], 'label' => 'Name (' . $lng . ')'));
                }

                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('Room.description.' . $lng, array('class' => 'form-control', 'type' => 'textarea', 'value' => $this->request->data['descriptionTranslation'][$key]['content'], 'label' => 'Description (' . $lng . ')'));
                }

                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('Room.special_offer.' . $lng, array('class' => 'form-control',  'value' => $this->request->data['special_offerTranslation'][$key]['content'],'label' => 'Special offer (' . $lng . ')'));
                }
                echo $this->Form->input('min_price', array('class' => 'form-control'));
                echo $this->Form->input('max_price', array('class' => 'form-control'));
                echo $this->Form->input('book_link', array('class' => 'form-control'));
                
                ?>
        </fieldset>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>
