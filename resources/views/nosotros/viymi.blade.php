@extends('layouts.secundario')
@section('container')
<div id="page-content-title">
    <div id="page-content-header" class="container_24">
        <div id="page-title">
            <h1>Misión y Visión</h1>
        </div>
        <!-- end page-title -->
    </div>
    <!-- end page-content-header -->
</div>
<!-- end page-content-title -->

<div class="clear"></div>

<div id="page-content">
    <div class="container_24">
        <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><a href="../index.html">Nosotros</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Misión y Visión </span></p>			</div>




    <div id="content-container" class="container_24">
        <div id="main-content" class="grid_16 push_8">
            <div class="main-content-padding">

                <div class="post" id="post-7">
                    <div class="entry">
                        <p><a href="../images/mision.png" rel="wp-prettyPhoto[7]">
                                <img class="size-full wp-image-177 aligncenter" src="{{asset('../images/mision.png')}}" alt="mision-padua" width="143" height="157" /></a></p>
                        <blockquote><p>&nbsp;</p>
                            <p>La <span class='current_crumb'>IEP ”SAN ANTONIO DE PADUA”</span>, es una Institución Particular que pertenece al Sistema Educativo Privado, creada para ofrecer una educación con dignidad  humana a los niños, niñas, púberes y jóvenes que forman parte de nuestra Población Estudiantil; buscando en forma permanente desarrollar integralmente su desarrollo personal, sustentando su labor en los siguientes propósitos institucionales:</p>

                            <p>	Modelo educativo basado en una Currícula Valorativa.</p>
                            <p>	Estilo de gestión horizontal, democrática y que garantice una comunicación permanente entre todos sus miembros de la comunidad educativa.</p>
                            <p>	Organización del trabajo escolar, centrada en el aprendizaje de los alumnos.</p>
                            <p>	Clima Organizacional saludable, que permita un trabajo armonioso y unas óptimas relaciones interpersonales.</p>
                            <p>	Toma de decisiones ágil, centrada en la oportunidad, la pertinencia muy atenta a las necesidades educativas.</p>
                            <p>	Con los procesos administrativos simples y funcionales .</p>
                            <p>	Reivindica el auténtico Rol del Maestro Formador, facilitador, guía y orientador permanente.</p>
                            <p>	Forma alumnos plenos en valores morales – espirituales; con capacidades de aprender por sí mismo, con desarrollo de su pensamiento, con habilidades sociales para saber convivir pacífica, democrática, productiva y muy comprometidos con su entorno social.</p>
                            <p>	Padres de familia proactivos y con una participación más dinámica en el proceso educativo de sus hijos.</p>
                        </blockquote>
                        <p>&nbsp;</p>
                        <p><a href="../images/vision.png" rel="wp-prettyPhoto[7]">
                                <img class="aligncenter wp-image-178 size-full" src="{{asset('../images/vision.png" alt="vision-padua')}}" width="143" height="157" /></a></p>
                        <blockquote><p>&nbsp;</p>
                            <p><span class='current_crumb'>	Nuestra Institución:</span> Constituirse en una de las mejores instituciones educativas del distrito, líder en la Formación Integral de nuestros estudiantes, centro de nuevos estilos de vida que comprometa socialmente a los futuros ciudadanos que iremos construyendo.</p><br>
                            <p><span class='current_crumb'>	Concepción de la Persona que queremos formar:</span>
                                El Sistema Educativo de la IEP “SAN ANTONIO DE PADUA”, se sustenta en una propuesta concebida en la visión y formación de un hombre libre, justo y solidario, crítico y creativo; a través del amor, la amistad, el estudio, el respeto y la disciplina como testimonio de vida y el desarrollo de una actitud comunicativa, corporativa con mentalidad ganadora de riqueza espiritual y de bienestar social.
                            </p></blockquote>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!-- end main-content-padding -->
        </div><!-- end main-content -->


        <div id="sidebar" class="grid_8 pull_16 sidebar-box">
            <div id="sidebarSubnav">

                <div id="subpages-widget-3" class="widget widget_subpages custom-formatting">			    <h3>Nosotros</h3>
                    <ul>
                        <li class="page_item page-item-7 current_page_item"><a href="{{url('nosotros/vision-mision')}}">Misión y Visión</a></li>
                        <li class="page_item page-item-24 "><a href="{{url('nosotros/mensaje-director')}}">Mensaje del Director</a></li>
                        <li class="page_item page-item-35"><a href="{{url('nosotros/plan-estudio/')}}">Plan de Estudios</a></li>
                        <li class="page_item page-item-20"><a href="{{url('nosotros/reseña-historica')}}">Reseña Histórica</a></li>
                    </ul>

                </div>	    </div>
            <!-- end sidebarSubnav -->
        </div>
        <!-- end sidebar -->



    </div><!-- end content-container -->
    @endsection