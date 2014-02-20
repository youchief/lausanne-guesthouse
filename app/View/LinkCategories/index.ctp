
<!-- Breadcrumbs - START -->
<div class="background-clouds breadcrumbs-container">
        <div class="container">
                <ol class="breadcrumb">
                         <li><?php echo $this->Html->link(__('Home'), array('controller'=>'pages', 'action'=>'display', 'home'))?></li>
                        <li class="active"><?php echo __('Links') ?></li>
                </ol>
        </div>
</div>
<!-- Breadcrumbs - END -->


<section>
        <div class="container">
                <h1><?php echo __('Links') ?></h1>
                <div class="row">
                        <?php foreach ($linkCategories as $linkcat): ?>
                        <div class="col-md-12">
                                <h2><?php echo $linkcat['LinkCategory']['name'] ?></h2>
                                <?php foreach($linkcat['Link'] as $link):?>
                                <p><?php echo $this->Html->link($link['title'], $link['url'], array('target'=>'_blank'))?></p>
                                <?php endforeach;?>
                        </div>        
                        <?php endforeach; ?>

                </div>

</section>

<section class="image-bg color-white hidden-xs" style="background-image: url(../img/background-links.jpg)">
    <div class="container">
        <div class="reduce-top-margin back-service">


        </div>
    </div>
</section>

