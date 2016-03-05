@extends('layouts.secundario')
@section('container')


    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Mensaje del Director</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Nosotros</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Mensaje del Director </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-24">
                        <div class="entry">
                            <h1><strong>Mensaje del Director</strong></h1>
                            <p>&nbsp;</p>
                            <p><img class="size-full wp-image-103 aligncenter" src="{{asset('../images/director.png')}}" alt="director2" width="170" height="185" /></p>
                            <p style="text-align: justify;">Quiero aprovechar la oportunidad para agradecerles, en primer lugar, la confianza que han depositado en nuestra Institución Educativa al haberlo elegido para la educación de sus hijos e hijas. Convencidos de la importante tarea educativa que el Colegio realiza no dudamos en pedir su colaboración, pues conseguiremos mejorar la formación de los estudiantes, tanto en el aspecto académico como humano.</p>
                            <p style="text-align: justify;">En este sentido deseamos destacar el papel relevante de los tutores y tutoras, quienes serán sus interlocutores habituales en Institución Educativa. De la misma manera, a nuestros estudiantes, les digo que trabajaremos para afirmar su autonomía y libertad para vivir y pensar de acuerdo a sus propias convicciones, en base al respeto que les permitirá participar activamente en los cambios que nuestro país requiere.</p>
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
                            <li class="page_item page-item-24 current_page_item"><a href="{{url('nosotros/mensaje-director')}}">Mensaje del Director</a></li>
                            <li class="page_item page-item-35"><a href="{{url('nosotros/plan-estudio/')}}">Plan de Estudios</a></li>
                            <li class="page_item page-item-20"><a href="{{url('nosotros/reseña-historica')}}">Reseña Histórica</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->

@endsection