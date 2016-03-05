@extends('layouts.secundario')
@section('container')

    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Educación Inicial</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Admisión</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Educación Inicial </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-77">
                        <div class="entry">
                            <p><img class="size-full wp-image-198 aligncenter" src="{{asset('../images/nivelinicial-padua.png')}}" alt="nivelinicial-padua" width="599" height="202" /></p>
                            <p style="text-align: justify;">Consideramos este nivel de vital importancia porque los niños y las niñas reciben un conjunto de estímulos y aprestamiento que los prepara para las siguientes etapas.</p>
                            <p style="text-align: justify;">Los objetivos más significativos de esta etapa son:</p>
                            <ul style="text-align: justify;">
                                <li>Descubrir, conocer y controlar progresivamente su cuerpo, adquiriendo hábitos básicos de salud, higiene y bienestar.</li>
                                <li>Desarrollar capacidades para facilitar el aprendizaje de la lectura y escritura.</li>
                                <li>Fomentar la autonomía, favoreciendo su seguridad afectiva y emocional.</li>
                                <li>Conseguir que el niño (a) establezca relaciones sociales respetando las diferencias y desarrollando actitudes de colaboración y solidaridad.</li>
                                <li>Potenciar en el niño (a) la observación de su entorno inmediato con una actitud de curiosidad, a través de ejercicios lúdicos.</li>
                            </ul>
                            <p style="text-align: justify;">
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!-- end main-content-padding -->
            </div><!-- end main-content -->


            <div id="sidebar" class="grid_8 pull_16 sidebar-box">
                <div id="sidebarSubnav">

                    <div id="subpages-widget-3" class="widget widget_subpages custom-formatting">			    <h3>Admisión</h3>
                        <ul>
                            <li class="page_item page-item-77 current_page_item"><a href="{{url('admision/inicial')}}">Educación Inicial</a></li>
                            <li class="page_item page-item-75"><a href="{{url('admision/primaria')}}">Educación Primaria</a></li>
                            <li class="page_item page-item-79"><a href="{{url('admision/secundaria')}}">Educación Secundaria</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->
@endsection