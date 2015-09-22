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
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('ionicons.min');
        echo $this->Html->css('AdminLTE.min');
        echo $this->Html->css('_all-skins.min');
        echo $this->Html->css('blue');

        echo $this->Html->css('jquery-jvectormap-1.2.2');
        echo $this->Html->css('datepicker3');
        echo $this->Html->css('daterangepicker-bs3');
        echo $this->Html->css('bootstrap3-wysihtml5.min');
        echo $this->Html->css('bootstrap-multiselect');
        echo $this->Html->css('jasny-bootstrap');
        echo $this->Html->css('jquery-confirm');
        echo $this->Html->css('bootstrap-tagsinput');
        echo $this->Html->css('jquery-ui.css');
        echo $this->Html->css('evol.colorpicker.min');
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

            body {

                -webkit-transform:translate3d(0,0,0);
                -webkit-perspective: 1000;
                -webkit-backface-visibility: hidden;
            
            }
        </style>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
    </head>
    <!-- 
    "skin-blue",
"skin-black",
"skin-red",
"skin-yellow",
"skin-purple",
"skin-green",
"skin-blue-light",
"skin-black-light",
"skin-red-light",
"skin-yellow-light",
"skin-purple-light",
"skin-green-light"
    -->
    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">

            <?php echo $this->element("header"); ?>
            <?php echo $this->element("menu"); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="padding-bottom: 0.09%;">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <?php echo $this->Flash->render(); ?>
                    <?php echo $this->fetch('content'); ?>

                </section><!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php echo $this->element("footer"); ?>
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <?php
        echo $this->Html->script('jquery-2.1.4');
        echo $this->Html->script('jquery-ui.min');

        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('jquery-confirm');
        echo $this->Html->script('raphael-min');

        echo $this->Html->script('jquery.sparkline.min');
        echo $this->Html->script('jquery-jvectormap-1.2.2.min');
        echo $this->Html->script('jquery-jvectormap-world-mill-en');
        echo $this->Html->script('jquery.knob');
        echo $this->Html->script('moment.min');
        echo $this->Html->script('daterangepicker');
        echo $this->Html->script('bootstrap-datepicker');
        echo $this->Html->script('bootstrap3-wysihtml5.all.min');
        echo $this->Html->script('jquery.slimscroll.min');
        echo $this->Html->script('fastclick.min');
        echo $this->Html->script('app.min');
        echo $this->Html->script('bootstrap-multiselect');
        echo $this->Html->script('jasny-bootstrap');
        echo $this->Html->script('bootstrap-tagsinput');
        echo $this->Html->script('jquery-ui.min');
        echo $this->Html->script('evol.colorpicker.min.js');
        echo $this->Html->script('scriptGeneral');



        //echo $this->fetch('meta');
        //echo $this->fetch('css');
        //echo $this->fetch('script');
        ?>

    </body>
</html>
