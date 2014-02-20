<div class="news form">
        <?php echo $this->Form->create('News', array('type' => 'file')); ?>
        <fieldset>
                <legend><?php echo __('Admin Add News'); ?></legend>
                <?php
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('News.title.' . $lng, array('class' => 'form-control', 'label' => 'Title (' . $lng . ')'));
                }

                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('News.body.' . $lng, array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Body (' . $lng . ')'));
                }
                ?>
        </fieldset>
        <hr> 
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>
