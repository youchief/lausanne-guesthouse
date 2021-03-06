<nav id="mainMenu" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <?php echo $this->Html->link($this->Html->image('logo.png', array('alt' => 'Lausanne Guesthouse')), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape' => false, 'class' => 'navbar-brand')); ?>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                                <li <?php
                                if ($this->here == '/') {
                                        echo "class='active'";
                                }
                                ?> ><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display', 'home')) ?></li>
                                <li <?php
                                if ($this->here == '/services') {
                                        echo "class='active'";
                                }
                                ?> ><?php echo $this->Html->link(__('Services'), '/services') ?></li>
                                <li <?php
                                if ($this->here == '/rooms') {
                                        echo "class='active'";
                                }
                                ?> ><?php echo $this->Html->link(__('Rates & Reservations'), array('controller' => 'rooms', 'action' => 'index')) ?></li>
                                <li <?php
                                if ($this->here == '/links') {
                                        echo "class='active'";
                                }
                                ?> ><?php echo $this->Html->link(__('Links'), array('controller' => 'linkCategories', 'action' => 'index')) ?></li>
                                <li <?php
                                if ($this->here == '/faqs') {
                                        echo "class='active'";
                                }
                                ?> ><?php echo $this->Html->link(__('FAQ'), array('controller' => 'faqs', 'action' => 'index')) ?></li>
                                <li <?php
                                if ($this->here == '/contact') {
                                        echo "class='active'";
                                }
                                ?> ><?php echo $this->Html->link(__('Contact'), array('controller' => 'contacts', 'action' => 'index')) ?></li>
                                <li class="dropdown">

                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link('FRA', array('controller' => 'app', 'action' => 'lang', 'fra')) ?></li>
                                                <li><?php echo $this->Html->link('ENG', array('controller' => 'app', 'action' => 'lang', 'eng')) ?></li>
                                                <li><?php echo $this->Html->link('DEU', array('controller' => 'app', 'action' => 'lang', 'deu')) ?></li>
                                        </ul>
                                </li>

                                
                                <li class="social">
                                        <a href="https://www.facebook.com/lausanneguesthouse?fref=ts" target="_blank"><span class="fa fa-facebook"></span></a>
                                </li>
                                <li class="social">
                                        <a href="https://plus.google.com/101687984632497472748/about?gl=US&hl=fr" target="_blank"><span class="fa fa-google-plus"></span></a>
                                </li>
                                <li class="social">
                                        <a href="https://twitter.com/LsnneGuesthouse" target="_blank"><span class="fa fa-twitter"></span></a>
                                </li>
                                <li class="social">
                                        <a href="http://instagram.com/LausanneGuesthouse" target="_blank"><span class="fa fa-instagram"></span></a>
                                </li>
                                <li class="social">
                                        <a href="https://fr.foursquare.com/v/lausanne-guesthouse--backpacker/4bc3ca72abf495210656c493" target="blank"><span class="fa fa-foursquare"></span></a>
                                </li>
                        </ul>
                </div><!-- /.navbar-collapse -->
        </div>
</nav>