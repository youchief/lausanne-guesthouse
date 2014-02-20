<div class="background-clouds breadcrumbs-container">
    <div class="container">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display', 'home')) ?></li>
            <li class="active">FAQ</li>
        </ol>
    </div>
</div>
<!-- Breadcrumbs - END -->

<section>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="content">
                    <h1>FAQ</h1>

                    <div class="panel-group faq" id="accordion">
                        <?php $i = 0 ?>
                        <?php foreach ($faqs as $faq): ?>
                            <?php $i++; ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion"
                                           href="<?php echo '#faq_' . $i ?>">
                                            <?php echo h($faq['Faq']['question']); ?>
                                        </a>

                                    </h4>
                                </div>
                                <div id="<?php echo 'faq_' . $i ?>" class="panel-collapse collapse">
                                    <div class="panel-body background-clouds">
                                        <?php echo h($faq['Faq']['response']); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>