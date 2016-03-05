@extends('layouts.secundario')
@section('container')
    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Karate</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Talleres</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Karate </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-49">
                        <div class="entry">
                            <p style="text-align: justify;"><a href="../../images/titlekarate.png" rel="wp-prettyPhoto[49]"><img class="size-full wp-image-135 aligncenter" src="../../images/titlekarate.png" alt="titlekarate" width="431" height="110" /></a><br />
                            </p>
                            <p><img class="size-full wp-image-108 aligncenter" src="../../images/ka1.png" alt="karate" swidth="350" height="270" /></p>
                            <p>Técnicas</p>
                            <ul>
                                <li>karate -san antonio de padua karate -san antonio de PADUAkarate -san antonio de padua karate -san antonio de padua</li>
                                <li>karate -san antonio de padua karate -san antonio de padua karate -san antonio de padua karate -san antonio de padua</li>
                                <li>karate -san antonio de padua karate -san antonio de paduakarate -san antonio de PADUA </li>

                            </ul>
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
                            <li class="page_item page-item-49 current_page_item"><a href="{{url('talleres/karate')}}">Karate</a></li>
                            <li class="page_item page-item-45 "><a href="{{url('talleres/ballet')}}">Ballet</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->
@endsection