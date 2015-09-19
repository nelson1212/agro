<?php
/**
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
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php //echo $cakeDescription ?>:
            <?php //echo $this->fetch('title'); ?>
            AGROTIC
        </title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('theme_styles');
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('nanoscroller');

        echo $this->Html->css('daterangepicker');

        echo $this->Html->css('bootstrap-multiselect');
        echo $this->Html->css('jasny-bootstrap');
        echo $this->Html->css('general');


        //echo $this->fetch('meta');
        //echo $this->fetch('css');
        //echo $this->fetch('script');
        ?>
        <style type="text/css">
            .the-legend {
                border-style: none;
                border-width: 0;
                font-size: 110%;
                line-height: 20px;
                margin-bottom: 4px;
                width: inherit; /* Or auto */
                padding: 0 10px; /* To give a bit of padding on the left and right */
                border-bottom: none;

            }
            .the-fieldset {
                border: 2px groove threedface #444;
                -webkit-box-shadow: 0px 0px 0px 0px #000;
                box-shadow: 0px 0px 0px 0px #000;
                background-color: transparent;
            }

            #este {
                position: absolute;
                top: 0px;
                right: 0px;
                min-width: 100%;
                min-height: 100%;
                font-size: 100px;
                text-align: right;
                opacity: 0;
                outline: medium none;
                background: #0C0B0B none repeat scroll 0% 0%;
                cursor: inherit;
                display: block;
            }
        </style>
        <!--[if lt IE 9]>
                  <script src="js/html5shiv.js"></script>
                  <script src="js/respond.min.js"></script>
          <![endif]-->
    </head>
    <body class="theme-amethyst">

        <div id="theme-wrapper">
            <?php echo $this->element("header2"); ?>

            <div id="page-wrapper" class="container">
                <div class="row">

                    <?php echo $this->element("menu1"); ?>

                    <div id="content-wrapper">
                        <div class="row">
                            <div class="col-lg-12">

                                <?php echo $this->Flash->render(); ?>
                                <?php echo $this->fetch('content'); ?>

                            </div>

                        </div>
                        <footer id="footer-bar" class="row">
                            <p id="footer-copyright" class="col-xs-12">
                                Powered by Cube Theme.
                            </p>
                        </footer>
                    </div>


                </div>


            </div>

        </div>


        <?php
        echo $this->Html->script('demo-skin-changer');
        echo $this->Html->script('jquery-2.1.4');
        echo $this->Html->script('bootstrap');
        echo $this->Html->script('jquery.nanoscroller.min');
        echo $this->Html->script('moment.min');
        echo $this->Html->script('scripts');
        echo $this->Html->script('pace.min');

        echo $this->Html->script('daterangepicker');
        echo $this->Html->script('bootstrap-datepicker');

        echo $this->Html->script('bootstrap-multiselect');
        echo $this->Html->script('jasny-bootstrap');

        echo $this->Html->script('scriptGeneral');



        //echo $this->fetch('meta');
        //echo $this->fetch('css');
        //echo $this->fetch('script');
        ?>

    </body>
</html>
