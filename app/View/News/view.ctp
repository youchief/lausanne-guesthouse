<div class="background-clouds breadcrumbs-container">
        <div class="container">
                <ol class="breadcrumb">
                        <li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display', 'home')) ?></li>
                        <li class="active"><?php echo __('News') ?></li>
                </ol>
        </div>
</div>
<!-- Breadcrumbs - END -->
<section>
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <h1><?php echo h($news['News']['title']); ?> <small><?php echo $this->Time->format('d/m/y', $news['News']['created'])?></small></h1>
                        </div>
                </div>

                <div class="row">
                        <div class="col-sm-6 col-md-6">
                                <?php echo $news['News']['body']; ?>
                        </div>
                        <div class="col-sm-6 col-md-6">
                                <?php echo $this->Html->image($news['NewsPic']['url'], array('width'=>'100%')); ?>
                        </div>
                </div>

        </div>
</section>