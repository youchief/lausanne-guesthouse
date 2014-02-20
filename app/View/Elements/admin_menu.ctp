<nav id="mainMenu" class="navbar navbar-default navbar-fixed-top" role="navigation">
       
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><?php echo $this->Html->image('logo.png')?>LGH&B</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                                <li class=""><?php echo $this->Html->link(__('News'), array('controller'=>'news', 'action'=>'index', 'admin'=>true))?></li>
                                <li class=""><?php echo $this->Html->link(__('Rooms'), array('controller'=>'rooms', 'action'=>'index', 'admin'=>true))?></li>
                                <li class=""><?php echo $this->Html->link(__('FAQ'), array('controller'=>'faqs', 'action'=>'index', 'admin'=>true))?></li>
                                <li class=""><?php echo $this->Html->link(__('Links'), array('controller'=>'links', 'action'=>'index', 'admin'=>true))?></li>
                            <li class=""><?php echo $this->Html->link(__('Contacts'), array('controller'=>'contacts', 'action'=>'index', 'admin'=>true))?></li>
                                <li class=""><?php echo $this->Html->link(__('Logout'), array('controller'=>'users', 'action'=>'logout', 'admin'=>false))?></li>
                                <li class="dropdown">
                                       
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link('FRA', array('controller'=>'app', 'action'=>'lang', 'fra', 'admin'=>false))?></li>
                                                <li><?php echo $this->Html->link('ENG', array('controller'=>'app', 'action'=>'lang', 'eng', 'admin'=>false))?></li>
                                                <li><?php echo $this->Html->link('DEU', array('controller'=>'app', 'action'=>'lang', 'deu', 'admin'=>false))?></li>
                                        </ul>
                                </li>
                        </ul>
                </div><!-- /.navbar-collapse -->
</nav>