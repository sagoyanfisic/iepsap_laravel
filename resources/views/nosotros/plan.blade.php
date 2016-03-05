@extends('layouts.secundario')
@section('container')

    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Plan de Estudios</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Nosotros</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Plan de Estudios </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-35">
                        <div class="entry">
                            <h1><img class="alignnone size-full wp-image-192" src="{{asset('../images/plandeestudios-padua.png')}}" alt="plandeestudios-padua" width="599" height="202" /></h1>
                            <h1></h1>
                            <h2>Nivel Inicial</h2>
                            <h3>DESARROLLO</h3>
                            <ul>
                                <li>Matemática</li>
                                <li>Comunicación</li>
                                <li>Ciencia y Ambiente</li>
                                <li>Personal Social</li>
                            </ul>
                            <h3>TALLERES</h3>
                            <ul>
                                <li>Computación</li>
                                <li>MiniChef</li>
                                <li>Karate</li>
                                <li>Ingles</li>
                                <li>Danza</li>
                                <li>Ballet</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h2>Nivel Primaria</h2>
                            <h3>DESARROLLO</h3>
                            <ul>
                                <li>Comunicación</li>
                                <li>Raz. Matemático</li>
                                <li>Aritmética </li>
                                <li>Geometría</li>
                                <li>Comunicación Integral</li>
                                <li>Fonología</li>
                                <li>Comprensión Lectora</li>
                                <li>Razonamiento Verbal</li>
                                <li>Álgebra</li>
                                <li>Personal Social</li>
                                <li>Ciencia y Ambiente</li>
                                <li>Educación Religiosa</li>
                                <li>Educación Física</li>


                            </ul>
                            <h3>TALLERES</h3>
                            <ul>
                                <li>Computación</li>
                                <li>Danza</li>
                                <li>Ingles</li>
                                <li>Francés</li>
                                <li>Ballet</li>
                                <li>Karate</li>
                                <li>Arte y Pintura</li>
                            </ul>
                            <p>&nbsp;</p>
                            <h2>Nivel Secundaria</h2>
                            <h3>DESARROLLO</h3>
                            <ul>
                                <li>Lenguaje</li>
                                <li>Razonamiento Verbal</li>
                                <li>Raz. Matemático</li>
                                <li>Aritmética </li>
                                <li>Álgebra</li>
                                <li>Geometría</li>
                                <li>Algebra</li>
                                <li>Historia</li>
                                <li>Geografía</li>
                                <li>Economía</li>
                                <li>Educación Cívica</li>
                                <li>Biología</li>
                                <li>Química</li>
                                <li>Educación Física</li>
                            </ul>
                            <h3>TALLERES</h3>
                            <ul>
                                <li>Computación</li>
                                <li>Danza</li>
                                <li>Inglés</li>
                            </ul>
                            <h1></h1>
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
                            <li class="page_item page-item-24 "><a href="{{url('nosotros/mensaje-director')}}">Mensaje del Director</a></li>
                            <li class="page_item page-item-35 current_page_item"><a href="{{url('nosotros/plan-estudio/')}}">Plan de Estudios</a></li>
                            <li class="page_item page-item-20"><a href="{{url('nosotros/reseña-historica')}}">Reseña Histórica</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->

@endsection