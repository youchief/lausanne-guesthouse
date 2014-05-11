<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
<script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
<!-- Breadcrumbs - START -->

<div class="background-clouds breadcrumbs-container">
        <div class="container">
                <ol class="breadcrumb">
                        <li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display', 'home')) ?></li>
                        <li class="active"><?php echo __('Contact') ?></li>
                </ol>
        </div>
</div>
<!-- Breadcrumbs - END -->
<section>
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <?php echo $this->Session->flash(); ?>
                                <h1><?php echo __('Contact us') ?></h1>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m5!3m3!1m2!1s0x478c2fd331f5e6ad%3A0x2b8e0ff5556c2607!2slausanne+guesthouse!5e0!3m2!1sfr!2sch!4v1390400135306" width="100%" height="450" frameborder="0" style="border:0"></iframe>    
                        </div>
                </div>

                <div class="row">
                        <div class="col-sm-6 col-md-6">
                                <div class="thumbnail info-thumbnail padding1 background-clouds color-black">
                                        <div class="caption background-white">
                                                <h3><?php echo __('Contacts') ?></h3>
                                                <p><span class="fa fa-home color-lead"></span> Chemin des Epinettes 4 1007 Lausanne Switzerland</p>
                                                <p><span class="fa fa-envelope color-lead"></span>  info@lausanne-guesthouse.ch</p>
                                                <p><span class="fa fa-phone-square color-lead"></span> +41 21 601 80 00</p>
                                                <p><span class="fa fa-print color-lead"></span> +41 21 601 80 01</p>
                                                <p><span class="fa fa-globe color-lead"></span> <a href="#">www.lausanne-guesthouse.ch</a></p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                                <div class="thumbnail info-thumbnail padding1 background-clouds color-black">
                                        <div class="caption background-white">
                                                <h3><?php echo __('Business hours') ?></h3>
                                                <p><strong class="color-lead">Monday-Sunday:</strong> 07:30 - 12:00  15:00-22:00</p>

                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-offset-3 col-md-6">
                                <h2><?php echo __('Contact form') ?></h2>
                                <div class="contacts form">
                                        <?php echo $this->Form->create('Contact'); ?>
                                        <fieldset>
                                                <?php
                                                echo $this->Form->input('firstname', array('class' => 'form-control'));
                                                echo $this->Form->input('lastname', array('class' => 'form-control'));
                                                echo $this->Form->input('email', array('class' => 'form-control'));
                                                echo $this->Form->input('phone', array('class' => 'form-control'));
                                                echo $this->Form->input('content', array('class' => 'form-control'));
                                                echo $this->Recaptcha->display();
                                                ?>
                                        </fieldset>
                                        <hr>
                                        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
                                        <?php echo $this->Form->end(); ?>
                                </div>
                        </div>
                </div>
        </div>
</section>
<section>
        <div class="container">
                <div class="reduce-top-margin">
                        <h1><?php echo __('This is us')?></h1>
                        <div class="row">
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                        <?php echo $this->Html->image('anne-marie.png', array('class' => 'img-circle img-responsive')) ?>
                                        <br>
                                        <p class="text-center staff_name">Anne-Marie & Sticky</p>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">

                                        <?php echo $this->Html->image('anne-marie-soeur.png', array('class' => 'img-circle img-responsive')) ?>
                                        <br>
                                        <p class="text-center staff_name">Laura</p>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                        <?php echo $this->Html->image('staffx.png', array('class' => 'img-circle img-responsive')) ?>
                                        <br>
                                        <p class="text-center staff_name">Virginie</p>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                        <?php echo $this->Html->image('corrado.png', array('class' => 'img-circle img-responsive')) ?>
                                        <br>
                                        <p class="text-center staff_name">Corrado</p>
                                </div>
                        </div>
                </div>
        </div>
</section>
<section>
        <div class="container">
                <div class="row">
                        <div class="col-md-12"> 
                                <h1><?php echo __('How to find us?') ?></h1>
                        </div>
                </div>
                <div class="row">

                        <div class="col-sm-6 col-md-6">

                                <div class="thumbnail info-thumbnail padding1 background-clouds color-black">
                                        <div class="caption background-white">
                                                <h3><?php echo __('By plane') ?></h3>
                                                <p>
                                                        <?php echo __('From Geneva airport (Genève Cointrin): take the train to Lausanne (about 45 minutes). In Lausanne, exit the main hall, dir. train station place, and turn left; the road goes down in a tunnel. Immediately after the tunnel, take right and next right again. The Lausanne Guesthouse is about 5 minutes on foot.') ?>
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                                <div class="thumbnail info-thumbnail padding1 background-clouds color-black">
                                        <div class="caption background-white">
                                                <h3><?php echo __('By train') ?></h3>
                                                <p>
                                                        <?php echo __('Exit the main hall, dir. train station place, and turn left; the road goes down in a tunnel. Immediately after the tunnel, take right and next right again. The Lausanne Guesthouse is about 5 minutes on foot.') ?>
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-sm-6 col-md-6">
                                <div class="thumbnail info-thumbnail padding1 background-clouds color-black">
                                        <div class="caption background-white">
                                                <h3><?php echo __('By car') ?></h3>
                                                <p>
                                                        <?php echo __('Motorway A1 : take the Lausanne Sud exit and follow the train station direction. On the train station place, make a “U” turn, and go back in the tunnel going down to the lake direction. Immediately after the tunnel (before the cinema “Moderne”), take the first right and next right again.') ?>
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                                <div class="thumbnail info-thumbnail padding1 background-clouds color-black">
                                        <div class="caption background-white">
                                                <h3><?php echo __('By foot') ?></h3>
                                                <p>
                                                        <?php echo __('From the train station: exit the main hall, direction train station place, and turn left. The road goes down in a tunnel. Immediately after the tunnel, take right and next right again (about 5 minutes).') ?>
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>






