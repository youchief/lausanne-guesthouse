<!-- Breadcrumbs - START -->
<div class="background-clouds breadcrumbs-container">
        <div class="container">
                <ol class="breadcrumb">
                         <li><?php echo $this->Html->link(__('Home'), array('controller'=>'pages', 'action'=>'display', 'home'))?></li>
                        <li><?php echo $this->Html->link(__('Rates & Reservations'), array('controller'=>'rooms', 'action'=>'index'))?></li>
                        <li class="active"><?php echo $room['Room']['name'] ?></li>
                </ol>
        </div>
</div>
<!-- Breadcrumbs - END -->
<section>
        <div class="container">
                <div class="row">
                        <div class="col-md-9 col-sm-12">

                                <div class="blog-entry-content">
                                        <h1><?php echo $room['Room']['name'] ?></h1>
                                        <div class="content">
                                                <?php echo $this->Html->image($room['RoomPic'][0]['url'], array('class' => 'pull-left', 'width' => '400px')) ?>

                                                <p class='lead'><?php echo $room['Room']['description'] ?></p>
                                                <p><b><?php echo $room['Room']['special_offer'] ?></b></p>
                                                <p>
                                                        
                                                        <?php $link_book = 'https://secure.dormproject.ch/online/lausanne/?new=1&agent=&design=1-0&lang='.$this->Text->truncate($lang, 2, array('ellipsis' => ''));?>
                                                        <?php $link_edit = 'https://secure.dormproject.ch/online/lausanne/?change=1&agent=&design=1-0&lang='.$this->Text->truncate($lang, 2, array('ellipsis' => ''));?>
                                                        <div class="btn-group">
                                                        <?php echo $this->Html->link(__('Book'), $link_book, array('class' => 'btn btn-lg btn-info', 'target' => '_blank')); ?>
                                                        
                                                        <?php echo $this->Html->link(__('Edit my booking'), $link_edit, array('class' => 'btn btn-lg btn-warning', 'target' => '_blank')); ?>
                                                        </div>
                                                        
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <h3>Photos</h3>
                                <?php foreach ($room['RoomPic'] as $pic): ?> 
                                        <div class="col-xs-6 col-sm-4 col-md-12">
                                                <a class="info-thumbnail-link" href="<?php echo $this->webroot . $pic['url'] ?>" data-lightbox="gallery-image">
                                                        <div class="thumbnail info-thumbnail background-clouds color-text">
                                                                <div class="service">
                                                                        <div class="service-name"><h3><span class="fa fa-search-plus"></span></h3></div>
                                                                </div>

                                                                <?php echo $this->Html->image($pic['url']); ?>
                                                        </div>
                                                </a>
                                        </div>



                                <?php endforeach; ?>   


                        </div>
                </div>
        </div>
</section>

<?php
echo $this->Html->css(array('lightbox.css'));
echo $this->Html->script(array('libs/lightbox/js/lightbox-2.6.min'));
?>