@extends('layouts.secundario')
@section('container')

    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Contacto</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Contacto </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_16 push_8">
                <div class="main-content-padding">
                    <div class="post" id="post-22">
                        <div class="entry">
                            <p style="color: #090909;"><a href="{{asset('../images/contacto_padua.png')}}" rel="wp-prettyPhoto[22]"><img class="size-full wp-image-207 aligncenter" src="../images/contacto_padua.png" alt="contacto_padua" width="599" height="202" /></a></p>
                            <p style="color: #090909;"><strong style="font-style: inherit;">Puedes encontrarnos en el  la Urb. Mariscal Cáceres en el Jr. Bartolomé Mz A5 Lt. 18, 19 </strong><br />
                                <b>San Juan de Lurigancho</b><br />
                                <strong style="font-style: inherit;">Lima - Perú</strong></p>
                            <p style="color: #090909;">También te puedes poner en contacto con nosotros al telefono +<strong>511  393-3167</strong> ó al email <strong>iep.sap.11@gmail.com</strong></p>
                            <p style="color: #090909;">Si utilizas el formulario de contacto, por favor, deja tus datos en el formulario incluido teléfono con tus dudas y/o consultas. Nos pondremos en contacto contigo lo antes posible.</p>
                            <p style="color: #090909;">Síguenos en: <a title="Facebook San Antonio de Padua" href="https://www.facebook.com/iepsap/" target="_blank"><img class="alignnone size-full wp-image-160" src="../images/iconfacebook.png" alt="iconfacebook" width="32" height="32" /></a><a title="Facebook San Antonio de Padua" href="https://twitter.com/IepSap" target="_blank"><img class="alignnone size-full wp-image-160" src="../images/icontwitter.png" alt="iconfacebook" width="32" height="32" /></a></p>



                        </div>
                    </div>
                    <br />

                    <div class="clear"></div>


                    <div id="contact-wrapper">

                        <form id="contactForm" class="cmxform" method="post" action="http://montessori.edu.pe/contacto/#contact-wrapper">
                            <strong>Utilice el formulario de abajo para enviarnos un e-mail:</strong>
                            <div>
                                <label for="contact_name">Nombre </label><em>(obligatorio, al menos 2 caracteres)</em><br />
                                <input id="contact_name" name="contact_name" size="30" class="required" minlength="2" value="" />
                                <input type="hidden" id="rules_contact_message" value="required" />
                                <input type="hidden" id="contact_name_required" value="Por favor, ingrese un nombre" />
                                <input type="hidden" id="contact_name_min_length" value="Your name must consist of at least 2 characters" />
                            </div>
                            <div>
                                <label for="contact_email">E-Mail </label><em>(obligatorio)</em><br />
                                <input id="contact_email" name="contact_email" size="30"  class="required email" value="" />
                                <input type="hidden" id="messages_contact_email" value="Por favor ingrese una dirección de email válida" />
                            </div>
                            <div>
                                <label for="contact_phone">Teléfono </label><em>(opcional)</em><br />
                                <input id="contact_phone" name="contact_phone" size="14" class="phone" value="" maxlength="14" />
                                <label for="contact_ext">ext. </label>
                                <input id="contact_ext" name="contact_ext" size="5" class="ext" value="" maxlength="5" />
                            </div>
                            <div>
                                <label for="contact_message">Su comentario </label><em>(obligatorio)</em><br />
                                <textarea id="contact_message" name="contact_message" cols="70" rows="7" class="required"></textarea>
                                <input type="hidden" id="messages_contact_message" value="&lt;br /&gt;Please enter your message" />
                            </div>


                            <div>
                                <input name="submit" class="submit" type="submit" value="Enviar"/>
                            </div>
                        </form>

                    </div><!-- end contact-wrapper -->
                </div><!-- end main-content-padding -->
            </div><!-- end main-content -->




            <div id="sidebar" class="grid_8 pull_16 sidebar-box">
                <div id="sidebarSubnav">

                    <div id="googlemap-widget-2" class="widget widget_googlemap substitute_widget_class"><h3 class="widgettitle">Mapa de Google</h3>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses!2spe!4v1450228665150!6m8!1m7!1sPbeEJQPvhxFyt_G3227vJw!2m2!1d-11.959099!2d-76.9843652!3f331.44290065361776!4f3.500601084808281!5f2.9390255321624537" width="280" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>	    </div>
            </div><!-- end sidebar -->

        </div><!-- end content-container -->

        
@endsection