<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'Lausannne GuestHouse & Backpacker');
?>
<!DOCTYPE html>
<html>
        <head>
                <?php echo $this->Html->charset(); ?>
                <title>
                        <?php echo $cakeDescription ?>:
                        <?php echo $title_for_layout; ?>
                </title>
                <?php
                echo $this->Html->meta('icon');

                echo $this->Html->css(array('bootstrap.min', 'font-awesome', 'neat', 'custom', 'admin'));
                echo $this->Html->script(array('jquery.min', 'bootstrap.min'))
                ?>

                <!--Use google font-->
                <link href = "http://fonts.googleapis.com/css?family=Open+Sans|Dosis:200,400,800" rel = "stylesheet" type = "text/css" />

                <!--HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries-->
                <!--[if lt IE 9]>
                <script src = "js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
                <?php
                echo $this->fetch('meta');
                echo $this->fetch('css');
                echo $this->fetch('script');
                ?>
        </head>
        <body>
                <div id="container">
                        <?php echo $this->element('admin_menu') ?>
                        <div class="container main">
                                <?php echo $this->Session->flash(); ?>
                                <?php echo $this->fetch('content'); ?>

                        </div>

                </div>
                <?php echo $this->element('sql_dump'); ?>
        </body>
</html>
