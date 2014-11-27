<section>
        <div class="container">
                <div class="row">
                        <div class="col-sm-6">
                                <?php echo $this->Html->image($room['RoomPic'][0]['url'], array('class' => 'pull-left', 'class' => 'img-responsive')) ?>

                        </div>
                        <div class="col-sm-6">
                                <div class="blog-entry-content">
                                        <h1><?php echo $room['Room']['name'] ?></h1>
                                        <div class="content">

                                                <p><?php echo $room['Room']['description'] ?></p>
                                                <p><b><?php echo $room['Room']['special_offer'] ?></b></p>

                                        </div>
                                        <div class="actions">

                                                <div class="btn-group">
                                                        <?php echo $this->Html->link(__('Edit Room'), array('action' => 'edit', $room['Room']['id']), array('class' => 'btn btn-sm btn-default')); ?>
                                                        <?php echo $this->Form->postLink(__('Delete Room'), array('action' => 'delete', $room['Room']['id']), array('class' => 'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $room['Room']['id'])); ?> 
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-12">
                                <h3><?php echo __('Photos'); ?> <?php echo $this->Html->link(\__('+'), array('controller' => 'roomPics', 'action' => 'add', $room['Room']['id']), array('class' => 'btn btn-success btn-sm')); ?></h3>
                        </div>
                </div>
                <div class="row">
                        <?php foreach ($room['RoomPic'] as $pic): ?> 
                                <div class="col-sm-3">

                                        <a class="info-thumbnail-link" href="<?php echo $this->webroot . $pic['url'] ?>" data-lightbox="gallery-image">
                                                <div class="thumbnail info-thumbnail background-clouds color-text">
                                                        <div class="service">
                                                                <div class="service-name"><h3><span class="fa fa-search-plus"></span></h3></div>
                                                        </div>
                                                        <?php echo $this->Html->image($pic['url'], array('class' => 'img-responsive')); ?>

                                                </div>
                                                <?php echo $this->Form->postLink(__('Delete Pic'), array('controller' => 'roomPics', 'action' => 'delete', $pic['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $pic['id'])); ?> 
                                        </a>

                                </div>
                        <?php endforeach; ?>   
                </div>

        </div>
</div>
</div>



<?php
echo $this->Html->css(array('lightbox.css'));
echo $this->Html->script(array('libs/lightbox/js/lightbox-2.6.min'));
?>