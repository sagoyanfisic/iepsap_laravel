@extends('layouts.secundario')
@section('container')

     <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Reseña Histórica</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Nosotros</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Reseña Histórica </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-20">
                        <div class="entry">
                            <p><a href="{{asset('../images/resenahistorica-padua.png')}}" rel="wp-prettyPhoto[20]">
                                    <img class="size-full wp-image-195 aligncenter" src="{{asset('../images/resenahistorica-padua.png')}}" alt="resenahistorica-padua" width="599" height="202" /></a></p>
                            <p style="text-align: justify;">La Institución Educativa Privada “SAN ANTONIO DE PADUA” Fue creada por R.D N°03725 el 17 de Diciembre de 1999 a cargo del Sr. Director: JESÚS ORDOÑEZ ÁLVAREZ y la Promotora: IVONE VEINTEMILLA DE ORDOÑEZ.</p>
                            <p style="text-align: justify;">La Institución se encuentra ubicada en la Urb. Mariscal Cáceres en el Jr. Bartolomé Mz A5 Lt. 18, 19 en el distrito de SAN JUAN DE LURIGANCHO.</p>
                            <p style="text-align: justify;">En la actualidad contamos con una plana docente altamente calificada, y una infraestructura moderna con 40 aulas, 02 salas de cómputo, karate, ballet, danzas y sala de Música con asesoramiento psicológico permanente.</p>
                            <p style="text-align: justify;">Las aulas han sido diseñadas con la finalidad de respetar la individualidad del educando y sus afinidades con el resto de sus compañeros. Durante 7 años, además de formar y dar bases educativas a sus alumnos, se ha ido trasformando para llegar a ser una institución moderna, adaptada a las nuevas tecnologías y avances del nuevo milenio, sin embargo estos cambios no han impedido que el colegio conserve sus ideales, los cuales han permitido dar a sus alumnos un desarrollo integral a través de una educación humana y dinámica.</p>
                            <p style="text-align: justify;">Durante los años la Institución “SAN ANTONIO DE PADUA”  ha sido ganador de diversos reconocimientos en los concursos de matemática, conocimiento, dibujo y pintura y en los desfiles cívicos patrióticos obteniendo 10 Medallas, 52 Gallardetes del 1er y 2do PUESTO y a la vez Ganadores del GONFALÓN DISTRITAL en el PASACALLE ESCOLAR 2013 siendo nuestro lema:</p>
                            <p style="text-align: center;"><span class='current_crumb'>"IMPARTIENDO EDUCACIÓN DE CALIDAD"</span></p>


                            <p style="text-align: justify;">Aspiramos que nuestros alumnos tengan un desarrollo biológico, social, espiritual armónico por influencia del hogar y la escuela a más de otros elementos influyentes. Consecuentemente nuestra Institución Educativa esta reorientando su organización y quehaceres fin de alcanzar nuestros ideales.</p>
                            <p style="text-align: justify;">Garantizamos su formación desde el nivel inicial a ser profesionales de calidad ya en nuestra I.E.P SAN ANTONIO DE PADUA nunca escatimamos recursos para brindar a los estudiantes las mejores herramientas, para ser personas útiles y felices en el mundo en el que se desarrollan. Para lograr este fin, contamos con:</p>
                            <ul>
                                <li>Personal altamente calificado.</li>
                                <li>Aulas espaciosas ventiladas y confortables.</li>
                                <li>Áreas de juegos en el patio para los niños.</li>
                                <li>Clases de ingles intensivo.</li>
                                <li>Sala de cómputo con acceso a Internet.</li>
                                <li>Seguridad (uso de la credencial del colegio para recoger a sus hijos).</li>
                                <li>Uso de uniforme para su seguridad y ahorro.</li>
                                <li>Taller de computación.</li>
                                <li>Taller de Ballet.</li>
                                <li>Taller de Minichef.</li>
                                <li>Danza y Música</li>
                                <li>Karate y Aeróbicos.</li>
                                <li>Círculo de estudios.</li>
                                <li>Departamento de Psicología.</li>
                            </ul>
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
                            <li class="page_item page-item-35"><a href="{{url('nosotros/plan-estudio/')}}">Plan de Estudios</a></li>
                            <li class="page_item page-item-20 current_page_item"><a href="{{url('nosotros/reseña-historica')}}">Reseña Histórica</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->

@endsection