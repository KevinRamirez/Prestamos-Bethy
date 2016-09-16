<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inicio.php"><span>Prestamo</span>-Bethy</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Kevin Ramirez <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Perfil</a></li>
                        <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Configuracion</a></li>
                        <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="inicio.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
        <li class="active"><a href="widgets.html"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"></use></svg>Clientes</a></li>
        <li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
        <li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
        <li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
        <li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
        <li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
        <li class="parent ">
            <a href="#">
                <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown
            </a>
        </li>
        <li role="presentation" class="divider"></li>
        <li><a href="logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Salir</a></li>
    </ul>

</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></a></li>
            <li class="active">Clientes</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CLIENTES</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">0</div>
                        <div class="text-muted">Clientes</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><svg class="glyph stroked "><use xlink:href="#"></use></svg> Registrar clientes</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        <?php
                        require('clases/conexion.php');

                        $query="SELECT Nombres,Apelll_paterno,Apell_materno,Telefono,`Dirección`,DNI FROM cliente";

                        $resultado=$mysqli->query($query);


                        ?>

                        <html>
                        <body>

                        <center><h1>Clientes</h1></center>

                        <a href="clases/nuevo.php">Nuevo Cliente</a>
                        <p></p>
                        <a href="clases/buscar.php">Buscar Cliente</a>
                        <p></p>

                        <table border=3 width="100%">
                            <thead>
                            <tr>
                                <td><b>Nombres</b></td>
                                <td><b>Apelll_paterno</b></td>
                                <td><b>Apell_materno</b></td>
                                <td><b>Telefono</b></td>
                                <td><b>Dirección</b></td>
                                <td><b>DNI</b></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tbody>
                            <?php while($row=$resultado->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $row['Nombres'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['Apelll_paterno'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['Apell_materno'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['Telefono'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['Dirección'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['DNI'];?>
                                    </td>
                                    <td>
                                        <a href="clases/modificar.php?id=<?php echo $row['Cliente_ID'];?>">Modificar</a>
                                    </td>
                                    <td>
                                        <a href="clases/eliminar.php?id=<?php echo $row['Cliente_ID'];?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                    </form>
                </div>
            </div>

        </div><!--/.col-->
        </div><!--/.col-->
    </div><!--/.row-->
</div>	<!--/.main-->


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
$('#calendar').datepicker({
    });

    !function ($) {
    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
        $(this).find('em:first').toggleClass("glyphicon-minus");
    });
    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
}(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
    </script>
</body>

</html>
