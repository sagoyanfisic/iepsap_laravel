@extends('layouts.secundario')
@section('container')

    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Educación Secundaria</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Admisión</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Educación Secundaria </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-79">
                        <div class="entry">
                            <p><img class="size-full wp-image-198 aligncenter" src="{{asset('../../images/secundaria.png')}}" alt="nivelinicial-montessoridevilla" width="599" height="202" /></p>
                            <p style="text-align: justify;">Planteamos un aprendizaje significativo buscando que nuestros alumnos desarrollen un espíritu crítico y emprendedor. Potenciamos un aprendizaje académico y cultural, más allá de las asignaturas escolares, facilitando el desarrollo de cada alumno, creando y favoreciendo un clima de innovación continua, buscamos desarrollar los siguientes objetivos:</p>
                            <ul style="text-align: justify;">
                                <li>Comprender y elaborar mensajes orales y escritos con propiedad, creatividad y corrección a fin de desarrollar su propio pensamiento.</li>
                                <li>Obtener, seleccionar y organizar información, utilizando fuentes adecuadas para tratarlas con una finalidad previamente establecida.</li>
                                <li>Elaborar estrategias desde la identificación y resolución de problemas en los diversos campos del conocimiento y la experiencia a través del razonamiento lógico.</li>
                                <li>Conocer y utilizar con espíritu crítico las nuevas tecnologías de la información y comunicación.</li>
                            </ul>
                            <p>Nuestros alumnos al culminar la educación secundaria, serán capaces de:</p>
                            <ul style="text-align: justify;">
                                <li>Asumir actitudes positivas hacia la vida, competir sin privilegios, dando muestras de honradez e integridad moral.</li>
                                <li>Defender los Derechos Humanos y denunciar todo aquello que atente contra la dignidad y la vida de las personas.</li>
                                <li>Poner en práctica diaria los valores morales, espirituales y éticos.</li>
                                <li>Comunicarse libre y respetuosamente sin discriminación de ninguna índole, promoviendo la</li>
                                <li>Poner en práctica sus idiomas del conocimiento ingles, la importancia de la tecnología informática en los procesos de investigación cultural y científica</li>
                                <li>Constituirse un líder, haciendo gala de una mentalidad emprendedora y exitosa</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
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
                            <li class="page_item page-item-79 current_page_item"><a href="{{url('admision/secundaria')}}">Educación Secundaria</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->
@endsection