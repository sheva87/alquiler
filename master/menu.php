<?php
$url =  $_SERVER['REQUEST_URI'];

$urlfinal = str_replace('/alquiler/', '', $url);

?>

<!--nav bar start-->
<nav class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <!--mobile nav icon (hidden:CSS)-->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
                menu
            </a><!--end btn-navbar-->
            <div class="nav-collapse">
                <ul class="nav">
                    <li <?php if ($urlfinal=="index.php") { ?>class="active"<?php } ?> >
                        <a href="index.php">Inicio</a>
                    </li>
                    <li <?php if ($urlfinal=="quienes.php") { ?>class="active"<?php } ?> >
                        <a href="quienes.php">Quienes somos</a>
                    </li>
                    <li <?php if ($urlfinal=="servicios.php") { ?>class="active"<?php } ?> >
                        <a href="servicios.php">Servicios</a>
                    </li>
                    <li <?php if ($urlfinal=="acerca.php") { ?>class="active"<?php } ?> >
                        <a href="acerca.php">Acerca de</a>
                    </li>
                    <li <?php if ($urlfinal=="contacto.php") { ?>class="active"<?php } ?> >
                        <a href="contacto.php">Contáctanos</a>
                    </li>
                    <!--                                <li class="dropdown">
                                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="alerts.html">Alerts</a>
                                                            </li>
                                                            <li>
                                                                <a href="buttons.html">Buttons</a>
                                                            </li>
                                                            <li>
                                                                <a href="columns.html">Columns</a>
                                                            </li>
                                                            <li>
                                                                <a href="tabs.html">Tabs</a>
                                                            </li>
                                                            <li>
                                                                <a href="widgets.html">Widgets</a>
                                                            </li>
                                                            <li>
                                                                <a href="icon.html">Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="block.html">Block Quotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="404.html">404 Error Page</a>
                                                            </li>
                                                        </ul>
                                                    </li>-->
                </ul>

                <form class="navbar-form pull-right" style="overflow:auto;">
                    <div class="input-append">
                        <input class="span2" id="appendedInputButton" type="text" x-webkit-speech="x-webkit-speech" placeholder="Buscar...">
                        <button class="btn btn-peach" type="button"> 
                            Buscar
                        </button>
                    </div>
                </form>

            </div><!-- end nav-collapse -->
        </div><!-- end container-->
    </div><!-- end navbar-inner -->
</nav><!--end nav bar-->