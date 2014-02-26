<section class="background-clouds">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <h1 class="info-head"><?php echo __('Last Pics') ?></h1>
                               
                                <div class="info-row"  id="masonry_container">
                                        <?php $pics = $this->requestAction(array('controller' => 'api', 'action' => 'flickr')); ?>
                                        <?php if (!empty($pics['photos']['photo'])): ?>
                                                <?php foreach ($pics['photos']['photo'] as $photo): ?>
                                                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 masonry_item">
                                                                <div class="thumbnail info-thumbnail background-clouds color-text">
                                                                        <?php echo $this->Html->image('http://farm' . $photo['farm'] . '.static.flickr.com/' . $photo['server'] . DS . $photo['id'] . '_' . $photo['secret'] . '_b.jpg', array('width' => '%')); ?>
                                                                </div>
                                                        </div>

                                                <?php endforeach; ?>
                                        <?php else: ?>
                                                <p>Service Flickr temporairement indisponible</p>
                                        <?php endif; ?>
                                </div>

                        </div>
                </div>
        </div>
</section>
<?php echo $this->Html->script('masonry')?>
<script>
    var container = document.querySelector('#masonry_container');
    var msnry = new Masonry( container, {
// options
        //columnWidth: 400,
        itemSelector: '.masonry_item'
    });
</script>
