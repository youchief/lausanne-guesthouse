<section class="background-clouds">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <h1 class="info-head"><?php echo __('Last Pics') ?></h1>
                               
                                <div class="info-row">
                                        <?php $pics = $this->requestAction(array('controller' => 'api', 'action' => 'flickr')); ?>
                                        <?php if (!empty($pics['photos']['photo'])): ?>
                                                <?php foreach ($pics['photos']['photo'] as $photo): ?>
                                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                                                <div class="thumbnail info-thumbnail background-clouds color-text">
                                                                        <div class="service">
                                                                                <div class="service-name"><h3><span class="fa fa-search-plus"></span></h3></div>
                                                                        </div>
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