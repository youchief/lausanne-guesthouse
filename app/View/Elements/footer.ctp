<footer class="background-dark-gray color-white">
        <div class="container">
                <div class="row">
                        <div class="col-md-3">
                                <h3>Menu</h3>
                                <ul class="nav-footer">
                                        <li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display', 'home')) ?></li>
                                        <li><?php echo $this->Html->link(__('Services'), array('controller' => 'pages', 'action' => 'display', 'services')) ?></li>
                                        <li><?php echo $this->Html->link(__('Rates & Reservations'), array('controller' => 'rooms', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link(__('Links'), array('controller' => 'linkcategories', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link(__('FAQ'), array('controller' => 'faqs', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link(__('Contact'), array('controller' => 'contacts', 'action' => 'index')) ?></li>

                                        <li><?php echo $this->Html->link('FRA', array('controller' => 'app', 'action' => 'lang', 'fra')) ?>
                                                |
                                                <?php echo $this->Html->link('ENG', array('controller' => 'app', 'action' => 'lang', 'eng')) ?>
                                                |
                                                <?php echo $this->Html->link('DEU', array('controller' => 'app', 'action' => 'lang', 'deu')) ?></li>

                                        </li>
                                </ul>
                        </div>
                        <div class="col-md-5">
                                <h3><?php echo __('Testmonials') ?></h3>

                                <p class="testimonial">“À choisir sans hésitation !”
                                        Propre, neuf, clair, ultra équipé, super bien situé (juste les trains à côté certes, mais
                                        supportable pour moi avec les doubles vitrages) et en plus un petit jardin/terrasse pour prendre un
                                        verre tranquille, je conseille sans hésitation si vous êtes de passage à Lausanne ! Possibilité même
                                        de garer la voiture si pas trop grande (break on oublie !).</p>

                                <p class="author">jenveuxmille38 (TripAdvisor)</p>

                                <p class="testimonial">“Rien à redire”
                                        Après un petit faux départ avec une mauvaise compréhension de ma part sur le tarif, le réceptionniste a fait tout son possible pour me donner le max d'explication avec même une réduction au final! Demander conseil à l'accueil pour les endroits à visiter, ils sont tip top (je vous recommande la collection art brut, c'est renversant...). </p>

                                <p class="author">EmmanuelG75017
                                        (TripAdvisor)</p>

                        </div>
                        <div class="col-md-4">
                                <h3><?php echo __('Labels') ?></h3>
                                <div class="row">

                                        <div class="col-md-6 col-xs-3">
                                                <?php echo $this->Html->image('youhou.png', array('width' => '100%')) ?>
                                        </div>
                                        <div class="col-md-6 col-xs-3">
                                                <div id="TA_certificateOfExcellence3" class="TA_certificateOfExcellence">
                                                        <ul id="gtCPPLH" class="TA_links prWcBM">
                                                                <li id="oKdbtPNcvG" class="E1r08zI9j">
                                                                        <a target="_blank" href="http://www.tripadvisor.co.uk/"><img src="http://www.tripadvisor.co.uk/img/cdsi/img2/awards/CoE2014_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
                                                                </li>
                                                        </ul>
                                                </div>
                                                <script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=3&amp;locationId=627754&amp;lang=en_UK&amp;year=2014"></script>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6 col-xs-3">
                                                <?php echo $this->Html->image('logo_spo1b.jpg', array('width' => '100%')) ?>
                                        </div>
                                        <div class="col-md-6 col-xs-3">
                                                <?php echo $this->Html->image('top100.png', array('width' => '100%')) ?>
                                        </div>

                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                                <hr>
                                <div class="row">
                                        <div class="col-md-6">
                                                powered by <?php echo $this->Html->link('3xW', 'http://3xw.ch', array('target' => '_blank')) ?>
                                        </div>
                                        <div class="col-md-6">
                                                <p class="social">
                                                        <a href="https://www.facebook.com/lausanneguesthouse?fref=ts"><span
                                                                        class="fa fa-facebook"></span></a>
                                                        <a href="http://www.flickr.com/photos/118585657@N03/"><span class="fa fa-flickr"></span></a>
                                                        <a href="https://fr.foursquare.com/v/lausanne-guesthouse--backpacker/4bc3ca72abf495210656c493"><span
                                                                        class="fa fa-foursquare"></span></a>

                                                        <a href="/users/login"><span class="fa fa-lock"></span></a>
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</footer>
