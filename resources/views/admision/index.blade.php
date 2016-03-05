@extends('layouts.secundario')
@section('container')

    <div class="clear"></div>

    
    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Admisión</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Admisión </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-68">
                        <div class="entry">
                            <p><img class="size-full wp-image-184 aligncenter" src="{{asset('../images/cabecera_sapadmision.png')}}" alt="cabecera_montessoridevillaadmision" width="599" height="202" /></p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!-- end main-content-padding -->
            </div><!-- end main-content -->


            <div id="sidebar" class="grid_8 pull_16 sidebar-box">
                <div id="sidebarSubnav">

                    <div id="subpages-widget-3" class="widget widget_subpages custom-formatting">			    <h3>Admisión</h3>
                        <ul>
                            <li class="page_item page-item-77"><a href="{{url('admision/inicial')}}">Educación Inicial</a></li>
                            <li class="page_item page-item-75"><a href="{{url('admision/primaria')}}">Educación Primaria</a></li>
                            <li class="page_item page-item-79"><a href="{{url('admision/secundaria')}}">Educación Secundaria</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->
        </div><!-- end content-container -->
@endsection