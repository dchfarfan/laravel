<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/sb-admin.css')}}">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins/morris.css')}}">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="/almacen/categoria"><img src="/images/logo.png" alt="home"  width="145" height="55" class="img-rounded">
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Camilo Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <small class="label label-success">Conectado</small>
                    <i class="fa fa-user"></i> 
                    Camilo Hernández Farfán <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Buzon de Mensajes</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-fw fa-laptop"></i> Almacen 
                            <i class="fa fa-fw fa-caret-down pull-right"></i>
                        </a>
                        <ul id="collapse1" class="collapse">
                            <li><a href="index.html"><i class="fa fa-bullseye"></i> Artículos</a></li>
                            <li><a href="/almacen/categoria"><i class="fa fa-bullseye"></i> Categorías</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-th"></i> Compras 
                            <i class="fa fa-fw fa-caret-down pull-right"></i>
                        </a>
                        <ul id="collapse2" class="collapse">
                            <li><a href="charts.html"><i class="fa fa-bullseye"></i> Ingresos</a></li>
                            <li><a href="charts.html"><i class="fa fa-bullseye"></i> Proveedores</a></li>
                        </ul>    
                    </li>
                    <li>
                        <a href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-shopping-cart"></i> Ventas
                            <i class="fa fa-fw fa-caret-down pull-right"></i>
                        </a>
                        <ul id="collapse3" class="collapse">
                            <li><a href="tables.html"><i class="fa fa-bullseye"></i> Ventas</a></li>
                            <li><a href="tables.html"><i class="fa fa-bullseye"></i> Clientes</a></li>
                        </ul>    
                    </li>
                    <li>
                        <a href="#collapse4" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-child"></i> Acceso
                            <i class="fa fa-fw fa-caret-down pull-right"></i>
                        </a>
                        <ul id="collapse4" class="collapse">
                            <li><a href="forms.html"><i class="fa fa-bullseye"></i> Usuarios</a></li>
                        </ul> 
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tags"></i> Lista de Precios
                        <i class="label label-primary pull-right">PDF</i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bell"></i> Ayuda
                        <i class="label label-warning pull-right">PDF</i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-info-circle"></i> Acerca De...
                        <i class="label label-default pull-right">InfoTienda</i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sistema de Ventas
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-laptop"></i> Categorias
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->
            </div>
            <!-- /.container-fluid -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.1.0
                </div>
                <strong>Copyright &copy; 2017-2022 <a href="https://www.facebook.com/CEAIng/">CeaIngeniería</a>.</strong> Todos los derechos Reservados.
            </footer>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{asset('js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('js/plugins/morris/morris-data.js')}}"></script>

</body>

</html>