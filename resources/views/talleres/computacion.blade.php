@extends('layouts.secundario')
@section('container')

    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Computación</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Talleres</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Computación </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-42">
                        <div class="entry">
                            <p><a href="../../images/titlecomputacion.png" rel="wp-prettyPhoto[42]"><img class="size-full wp-image-126 aligncenter" src="../../images/titlecomputacion.png" alt="titlecomputacion" width="431" height="110" /></a></p>
                            <p style="text-align: justify;"> En esta era de la información, el desarrollo de la tecnología es tan rápido, que los niños de SAN ANTONIO DE PADUA tienen que enfrentarse diariamente a nuevos retos. Por ello, preparamos a los estudiantes para sean futuros profesionales actualizados, competentes y capaces de dominar las últimas tecnología.</p>
                            <p><img class="size-full wp-image-108 aligncenter" src="../../images/co1.png" alt="computacion" width="350" height="270" /></p>
                            <p style="text-align: justify;">Aprenderá entre otras cosas:</p>
                            <ul>
                                <li>Manejo general del PC. Partes. Cuidados. Uso de los distintos dispositivos.</li>
                                <li>Taller de Sistema Operativo. Operación de procesadores de texto, gráficos y multimedios. Proyectos Creativos.</li>
                                <li>Talleres de aprendizaje con programas educativos: razonamiento y deducción.</li>
                                <li>Micromundos (comandos y programación).</li>
                                <li>Enciclopedias e Internet: búsquedas e impresión de la información.</li>
                                <li>Taller de aplicación. Proyecto Final Integrador.</li>
                                <li>Programación Básica</li>
                                <li>Diseño y Desarrollo Web</li>
                                <li>Redes</li>
                                <li>Windows Server</li>
                            </ul>

                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!-- end main-content-padding -->
            </div><!-- end main-content -->


            <div id="sidebar" class="grid_8 pull_16 sidebar-box">
                <div id="sidebarSubnav">

                    <div id="subpages-widget-3" class="widget widget_subpages custom-formatting">			    <h3>Talleres</h3>
                        <ul>
                            <li class="page_item page-item-42 current_page_item"><a href="{{url('talleres/computacion')}}">Computación</a></li>
                            <li class="page_item page-item-40"><a href="{{url('talleres/educacion-fisica')}}">Educación Física</a></li>
                            <li class="page_item page-item-47"><a href="{{url('talleres/ingles')}}">Inglés Intensivo</a></li>
                            <li class="page_item page-item-49"><a href="{{url('talleres/karate')}}">Karate</a></li>
                            <li class="page_item page-item-45 "><a href="{{url('talleres/ballet')}}">Ballet</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->
@endsection