
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pomaray Admin</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/metisMenu.min.css') !!}
    {!! Html::style('css/sb-admin-2.css') !!}
    {!! Html::style('css/dropzone.css') !!}
    {!! Html::style('css/estilos.css') !!}
    @yield('styles')
</head>

<body>

    <div id="wrapper">


        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!!URL::to('/')!!}">Pomaray Admin</a>
            </div>


            <ul class="nav navbar-top-links navbar-right">
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                   {{ Auth::user()->name }}<i class="glyphicon glyphicon-menu-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li class="divider"></li>
                    <li>
                        <a href="{!!URL::to('admin/login/logout')!!}">
                            <i class="glyphicon glyphicon-off"></i>
                            Desconectar
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <!-- <li>
                        <a href="#"><i class="glyphicon glyphicon-user"></i> Usuario <span class="glyphicon glyphicon-chevron-down"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-plus'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="admin.php"><i class='glyphicon glyphicon-list'></i> Usuarios</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-user"></i> Maestros <span class="glyphicon glyphicon-chevron-down"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{!!URL::to('admin/teacher/create')!!}"><i class='glyphicon glyphicon-plus'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="{!!URL::to('admin/teacher')!!}"><i class='glyphicon glyphicon-list'></i> Maestros</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-picture"></i> Galeria <span class="glyphicon glyphicon-chevron-down"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-chevron-down'></i> Agregar</a>
                                <ul class="nav nav-third-level">
                            <li>
                                <a href="{!!URL::to('admin/gallery/create')!!}"><i class='glyphicon glyphicon-plus'></i> Fotos</a>
                            </li>
                            <li>
                                <a href="{!!URL::to('admin/video')!!}"><i class='glyphicon glyphicon-plus'></i> Videos</a>
                            </li>
                        </ul>
                            </li>
                            <li>
                                <a href="{!!URL::to('admin/gallery')!!}"><i class='glyphicon glyphicon-list'></i> Galeria</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <div id="page-wrapper">

         @yield('content')


    </div>
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/metisMenu.min.js') !!}
    {!! Html::script('js/sb-admin-2.js') !!}
    


    @yield('scripts')
</body>
</html>
