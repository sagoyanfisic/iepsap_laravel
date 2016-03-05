@extends('layouts.secundario')
@section('container')
    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Educación Primaria</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en:
                </span> <a href="{{url('/')}}">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Admisión</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Educación Primaria </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">

                    <div class="post" id="post-75">
                        <div class="entry">
                            <p><img class="size-full wp-image-198 aligncenter" src="{{asset('../../images/primaria.png')}}" alt="nivelinicial-montessoridevilla" width="599" height="202" /></p>
                            <h2 style="text-align: justify;"><strong>Educación Primaria</strong></h2>
                            <p style="text-align: justify;">En el Primer Ciclo de Educación Primaria, que comprende los grados de 1º y 2º, nuestros alumnos consolidarán las técnicas básicas de lectura y escritura, potenciarán capacidades y enriquecerán su bagaje cultural. En el Segundo ciclo (3º y 4º grados), afianzarán lo aprendido en el anterior y se enfrentarán a nuevas metas: expresarse correctamente, tanto en el lenguaje oral como en el escrito, resolver problemas aplicando las operaciones básicas, conocer su entorno más cercano.</p>
                            <p style="text-align: justify;"> En el Tercer Ciclo, en los grados 5º y 6º, no sólo aumentarán los conocimientos en todas las áreas sino que se trabajará de forma especial en la adquisición de hábitos de organización y estudio. Es importante que los dos primeros años, la comprensión lectora, la ortografía y el razonamiento queden consolidados, ya que son la base para el éxito en la siguiente etapa escolar.</p>
                            <p> A lo largo de toda la Educación Primaria, el Colegio desarrolla planes de innovación que ayudan al logro de los siguientes objetivos:</p>
                            <ul>
                                <li>Desarrollar progresivamente hábitos de estudio y responsabilidad que les ayuden a valorar y descubrir la satisfacción del trabajo bien hecho.</li>
                                <li>Fomentar el hábito lector, para desarrollar la comprensión como un instrumento básico de todo aprendizaje.</li>
                                <li>Desarrollar el cálculo y las operaciones matemáticas para utilizarlas en la resolución de problemas.</li>
                                <li>Conocer aspectos fundamentales de las Ciencias de la Naturaleza, la Geografía, la Historia y la Cultura Peruana y adquirir comportamientos cívicos, que les llevan a ser buenos ciudadanos.</li>
                                <li>Desarrollar habilidades personales a través de la danza, la música, la pintura y el deporte</li>
                            </ul>
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
                            <li class="page_item page-item-75 current_page_item"><a href="{{url('admision/primaria')}}">Educación Primaria</a></li>
                            <li class="page_item page-item-79"><a href="{{url('admision/secundaria')}}">Educación Secundaria</a></li>
                        </ul>

                    </div>	    </div>
                <!-- end sidebarSubnav -->
            </div>
            <!-- end sidebar -->



        </div><!-- end content-container -->
@endsection