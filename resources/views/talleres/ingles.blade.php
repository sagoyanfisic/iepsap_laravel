@extends('layouts.secundario')
@section('container')

    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Inglés Intensivo</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Talleres</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Inglés Intensivo </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-47">
                        <div class="entry">

                            <p><a href="../../images/titleingles.png" rel="wp-prettyPhoto[42]"><img class="size-full wp-image-126 aligncenter" src="../../images/titleingles.png" alt="titlecomputacion" width="431" height="110" /></a></p>
                            <p style="text-align: justify;">El Idioma del mundo.<br />
                                Utilizar la lengua inglesa de forma escrita para comunicarse en situaciones reales diversas de manera clara, personal y creativa, con corrección, y haciendo uso de estrategias adecuadas. Leer de forma comprensiva y autónoma textos diversos en lengua inglesa con el fin de acceder a informaciones, adquirir más conocimientos en relación con otras áreas de interés y como fuente de disfrute y ocio.</p>
                            <p style="text-align: justify;">Reflexionar sobre el funcionamiento de la lengua inglesa y otras lenguas vinculadas a ella con fines comunicativos en situaciones variadas y de complejidad creciente, con el fin de mejorar las producciones propias y comprender las elaboradas por otras personas.</p>
                            <p style="text-align: justify;">La novedad que traemos este año es que los estudiantes llevarán el inglés intensivo durante todo el año escolar, y los jóvenes obtendrán un certificado oficial al finalizar el año.</p>
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
                            <li class="page_item page-item-47 current_page_item"><a href="{{url('talleres/ingles')}}">Inglés Intensivo</a></li>
                            <li class="page_item page-item-49"><a href="{{url('talleres/karate')}}">Karate</a></li>
                            <li class="page_item page-item-45 "><a href="{{url('talleres/ballet')}}">Ballet</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->

@endsection