<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!--  <div class="user-panel">
              <div class="pull-left image">
                  <img src="<?php echo $this->webroot; ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p>Alexander Pierce</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
          </div>
        <!-- search form 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header" style="color:white;">MENU DE NAVEGACIÓN</li>
            <!--<li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li> -->
            <li class="treeview" id="treeUsuarios">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Usuarios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->webroot; ?>admin/users/addusuario"><i class="fa fa-circle-o"></i> Agregar</a></li>
                    <li><a id="lnkVerUsuarios" href="#"><i class="fa fa-circle-o"></i> Ver usuarios</a></li>
                    <li><a href="<?php echo $this->webroot; ?>admin/users/preregistro"><i class="fa fa-circle-o"></i> Pre-registro</a></li>

                </ul>
            </li>

            <li class="treeview" id="treeProductos">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Productos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->webroot; ?>admin/productos/add"><i class="fa fa-circle-o"></i>  Registrar producto base</a></li>
                    <li><a href="<?php echo $this->webroot; ?>admin/productos/add"><i class="fa fa-circle-o"></i>  Registrar productos</a></li>
                    <li><a href="<?php echo $this->webroot; ?>admin/productos/index"><i class="fa fa-circle-o"></i> Ver listado</a></li>

                </ul>
            </li>


            <li class="treeview" id="treeForos">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Foros</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->webroot; ?>admin/foros/add"><i class="fa fa-circle-o"></i> Crear</a></li>
                    <li><a href="<?php echo $this->webroot; ?>admin/foros/index"><i class="fa fa-circle-o"></i> Ver listado</a></li>

                </ul>
            </li>
            <li class="treeview" id="treeDirectorios">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Directorios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li class="treeview" id="treeNovedades">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Novedades</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Información base</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <!-- DEPARTAMENTOS -->
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Departamentos <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Agregar</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Ver listado </a>
                                <!--  <ul class="treeview-menu">
                                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                  </ul> -->
                            </li>
                        </ul>
                    </li>
                    <!-- CIUDADES -->
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Ciudades <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Agregar</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Ver listado </a>
                                <!--  <ul class="treeview-menu">
                                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                  </ul> -->
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Herramientas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="label pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="pages/mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mensajes</span>
                    <small class="label pull-right bg-yellow">12</small>
                </a>
            </li>
            <!-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul> -->
    </section>
    <!-- /.sidebar -->
</aside>