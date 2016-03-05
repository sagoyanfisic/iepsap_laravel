@extends('layouts.secundario')
@section('container')
    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Talleres</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Talleres </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-37">
                        <div class="entry">
                            <p><a href="../images/computacion.png" rel="wp-prettyPhoto[37]"><img class="size-full wp-image-120 aligncenter" src="../images/computacion.png" alt="COMPUTACIÓN" width="600" height="150" /></a></p>

                            <p><a href="../images/ED-FISICA.png" rel="wp-prettyPhoto[37]"><img class="size-full wp-image-117 aligncenter" src="../images/ED-FISICA.png"alt="ED FÍSICA" width="600" height="150" /></a></p>

                            <p><a href="../images/ingles.png" rel="wp-prettyPhoto[37]"><img class="size-full wp-image-122 aligncenter" src="../images/ingles.png" alt="INGLÉS" width="600" height="150" /></a></p>

                            <p style="text-align: center;"><a href="../images/karate.png" rel="wp-prettyPhoto[37]"><img class="alignnone size-full wp-image-123" src="../images/karate.png" alt="KARATE" width="600" height="150" /></a></p>

                            <p><a href="../images/ballet.png" rel="wp-prettyPhoto[37]"><img class="alignnone size-full wp-image-124 aligncenter" src="../images/ballet.png"  alt="BALLET" width="600" height="150" /></a></p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!-- end main-content-padding -->
            </div><!-- end main-content -->


            <div id="sidebar" class="grid_8 pull_16 sidebar-box">
                <div id="sidebarSubnav">

                    <div id="subpages-widget-3" class="widget widget_subpages custom-formatting">			    <h3>Talleres</h3>
                        <ul>
                            <li class="page_item page-item-42"><a href="{{url('talleres/computacion')}}">Computación</a></li>
                            <li class="page_item page-item-40"><a href="{{url('talleres/educacion-fisica')}}">Educación Física</a></li>
                            <li class="page_item page-item-47"><a href="{{url('talleres/ingles')}}">Inglés Intensivo</a></li>
                            <li class="page_item page-item-49"><a href="{{url('talleres/karate')}}">Karate</a></li>
                            <li class="page_item page-item-45"><a href="{{url('talleres/ballet')}}">Ballet</a></li>
                        </ul>
                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->
@endsection