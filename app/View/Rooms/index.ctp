
<!-- Breadcrumbs - START -->
<div class="background-clouds breadcrumbs-container">
        <div class="container">
                <ol class="breadcrumb">
                        <li><?php echo $this->Html->link(__('Home'), array('controller'=>'pages', 'action'=>'display', 'home'))?></li>
                        <li class="active"><?php echo __('Rates & Reservations') ?></li>
                </ol>
        </div>
</div>
<!-- Breadcrumbs - END -->
<section>
        <div class="container">
                <h1><?php echo __('Rates & Reservations') ?></h1>
                <div class="row">
                        <?php foreach ($rooms as $room): ?>
                                <div class="col-sm-4 col-md-4 tumbnails">
                                        <a class="info-thumbnail-link" href="<?php echo "rooms/view/".$room['Room']['id']?>">
                                                <div class="thumbnail info-thumbnail color-text description-room-index">
                                                        <?php echo $this->Html->image($room['RoomPic'][0]['url']) ?>
                                                        <div class="special background-peter-river color-white"><h3><?php echo $room['Room']['name'] ?></h3></div>
                                                        <div class="caption bordered background-white">
                                                                <p><?php echo $room['Room']['description'] ?></p>
                                                        </div>
                                                </div>
                                        </a>
                                </div>

                        <?php endforeach; ?>

                </div>

</section>

