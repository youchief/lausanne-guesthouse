<?php
$news = $this->requestAction(array('controller' => 'news', 'action' => 'lastnews'));
?>
<section>
        <div class="container">
                <h1><?php echo __('News') ?></h1>
                <div class="row">
                        <?php foreach ($news as $n): ?>
                                <div class="col-sm-4 col-md-4">
                                        <div class="info-thumbnail">
                                                <div class="thumbnail info-thumbnail with-icon background-clouds color-text">
                                                        <?php echo $this->Html->image($n['NewsPic']['url'], array('width' => '100%')) ?>
                                                        <div class="caption bordered background-white">
                                                                <h3><?php echo $n['News']['title'] ?></h3>
                                                                <p class="description"><?php echo $n['News']['body'] ?></p>
                                                                <p class="buttons">
                                                                        <?php echo $this->Html->link(__('Read more'), array('controller' => 'news', 'action' => 'view', $n['News']['id']), array('class'=>'btn btn-primary')) ?>
                                                                </p>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        <?php endforeach; ?>
                </div>
        </div>
</section>

