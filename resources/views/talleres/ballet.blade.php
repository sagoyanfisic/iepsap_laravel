@extends('layouts.secundario')
@section('container')

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Talleres</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Ballet </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-45">
                        <div class="entry">
                            <p><a href="../../images/titleballet.png" rel="wp-prettyPhoto[45]"><img class="size-full wp-image-137 aligncenter" src="{{asset('../../images/titleballet.png')}}" alt="titleballet" width="431" height="110" /></a><br />
                                Ballet - San Antonio de Padua Ballet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de PaduaBallet - San Antonio de Padua.<br />
                                Inicial</p>
                            <p>Primaria y Secundaria</p>
                            <p>Les permite desarrollar al máximo su elasticidad.<br />
                                Aquí las niñas se divierten mientras van aprendiendo los estilos de este curso.</p>
                            <p><img class="size-full wp-image-108 aligncenter" src="{{asset('../../images/ba1.png')}}<img" alt="ballet" width="350" height="270" /></p>
                            <p>&nbsp;</p>
                            Aquí las niñas se divierten mientras van aprendiendo los estilos de este curso.</p>
                            <p><img class="size-full wp-image-108 aligncenter" src="{{asset('../../images/ba2.png')}}" alt="ballet" width="350" height="270" /></p>
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
                            <li class="page_item page-item-42"><a href="{{url('talleres/computacion')}}">Computación</a></li>
                            <li class="page_item page-item-40"><a href="{{url('talleres/educacion-fisica')}}">Educación Física</a></li>
                            <li class="page_item page-item-47"><a href="{{url('talleres/ingles')}}">Inglés Intensivo</a></li>
                            <li class="page_item page-item-49"><a href="{{url('talleres/karate')}}">Karate</a></li>
                            <li class="page_item page-item-45 current_page_item"><a href="{{url('talleres/ballet')}}">Ballet</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->

@endsection