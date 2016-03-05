@extends('layouts.secundario')
@section('container')

    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Nosotros</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Nosotros </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-18">
                        <div class="entry">
                            <p><a href="{{asset('../images/nosotros-padua.png')}}" rel="wp-prettyPhoto[18]"><img class="size-full wp-image-189 aligncenter" src="../images/nosotros-padua.png" alt="nosotros-padua" width="599" height="202" /></a></p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!-- end main-content-padding -->
            </div><!-- end main-content -->


            <div id="sidebar" class="grid_8 pull_16 sidebar-box">
                <div id="sidebarSubnav">

                    <div id="subpages-widget-3" class="widget widget_subpages custom-formatting">			    <h3>Nosotros</h3>
                        <ul>
                            <li class="page_item page-item-7"><a href="{{url('nosotros/vision-mision')}}">Misión y Visión</a></li>
                            <li class="page_item page-item-24"><a href="{{url('nosotros/mensaje-director')}}">Mensaje del Director</a></li>
                            <li class="page_item page-item-35"><a href="{{url('nosotros/plan-estudio/')}}">Plan de Estudios</a></li>
                            <li class="page_item page-item-20"><a href="{{url('nosotros/reseña-historica')}}">Reseña Histórica</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->

        <div class="clear"></div>



    </div><!-- end page-content -->
@endsection