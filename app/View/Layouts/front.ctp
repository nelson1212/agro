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
        echo $this->Html->css('bootstrap-theme.min');
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('genericons.css');
        echo $this->Html->css('styles.css');


        //echo $this->fetch('meta');
        //echo $this->fetch('css');
        //echo $this->fetch('script');
        ?>
        <style type="text/css">

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
    <body>


        <div class="container-fluid">
            <!-- header -->
            <?php echo $this->element("front_header"); ?>
            <!-- end header -->
            <!--slider -->
            <?php echo $this->element("front_slider"); ?>
            <div class="clearfix"></div>

            <div class="row main-container">

                <!-- left sidebar -->
                <div class="div_left">
                    <div class="wrapper center">
                        <h3 class="wrapper-title boxed">Estado del tiepo</h3>
                        <img src="img/clima.jpg" />
                    </div>

                    <div class="wrapper center">
                        <h3 class="wrapper-title">Aliados</h3>
                        <img src="img/aliado1.jpg" />
                        <img src="img/aliado2.jpg" />
                        <img src="img/aliado3.jpg" />
                        <img src="img/aliado4.jpg" />
                    </div>

                    <div class="wrapper center">
                        <h3 class="wrapper-title">Twitter</h3>
                        <img src="img/twitter_min.jpg" />
                    </div>

                </div>

                <!-- Center container -->
                <div class="main-content div_middle">
                    <div class="wrapper article">
                        <a href="#"><img src="img/articulo.jpg" /></a>
                        <div class="content">
                            <h3 class="wrapper-title"><a href="#">últimas novedades</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="meta">
                            <div class="entry-meta">
                                <span class="byline"> 
                                    <span class="author vcard">
                                        <a class="url fn n" href="https://colorlib.com/travelify/author/aigars-silkalns/">Aigars</a>
                                    </span>
                                </span>
                                <span class="posted-on">
                                    <a href="#" rel="bookmark">
                                        <time class="entry-date published" datetime="2014-03-05T09:39:56+00:00">5 March, 2014</time>
                                        <time class="updated" datetime="2014-11-21T09:04:21+00:00">21 November, 2014</time>
                                    </a>
                                </span>
                                <span class="category">
                                    <a href="#" rel="category tag">New York</a>, 
                                    <a href="#" rel="category tag">Other Destinations</a>
                                </span>
                            </div>
                            <a class="read-more btn btn-success">Leer Más</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <hr />

                    <div class="wrapper">
                        <h3 class="wrapper-title">Formulario</h3>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check box
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                    </div>

                    <hr />

                    <div class="pagination">
                        <span class="pages">Pagina 1 de 3</span>
                        <span class="current">1</span><a class="page larger" href="#">2</a>
                        <a class="page larger" href="#">3</a>
                        <a class="nextpostslink" rel="next" href="#">»</a>
                    </div>


                </div>


                <!-- Right sidebar -->
                <div class="div_right">
                    <div class="wrapper">
                        <h3 class="wrapper-title">Buscador</h3>
                        <form class="form-inline buscador">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Buscar">
                                    <div class="input-group-addon btn btn-success">Buscar</div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="wrapper center">
                        <h3 class="wrapper-title">Registrarse</h3>
                        <a class="btn btn-large btn-success">Como Comprador</a><br /><br />
                        <a class="btn btn-large btn-success">Como Vendedor</a>
                    </div>

                    <div class="wrapper center">
                        <h3 class="wrapper-title">Cuéntanos tus experiencias</h3>
                        <a class="btn btn-large btn-success">Accede al foro</a><br /><br />
                        <a class="btn btn-large btn-success">Registra tu clasificado o evento</a>
                    </div>


                </div>

            </div>

            <hr />

            <div class="row main-container upper-footer">


                <!-- left sidebar -->
                <div class="col-md-3">
                    <div class="wrapper">
                        <h3 class="wrapper-title">RECENT POSTS</h3>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                    </div>

                </div>

                <!-- left sidebar -->
                <div class="col-md-3">
                    <div class="wrapper">
                        <h3 class="wrapper-title">RECENT POSTS</h3>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                    </div>

                </div>

                <!-- left sidebar -->
                <div class="col-md-3">
                    <div class="wrapper">
                        <h3 class="wrapper-title">RECENT POSTS</h3>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                    </div>

                </div>

                <!-- Right sidebar -->
                <div class="col-md-3">
                    <div class="wrapper">
                        <h3 class="wrapper-title">RECENT POSTS</h3>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                        <li><a href="#">Ejemplo1</a></li>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <footer>Copyright AgroTic 2015</footer>
                </div>
            </div>

        </div>

        <div class="back-to-top"><a href="#branding"></a></div>




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
