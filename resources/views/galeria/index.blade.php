@extends('layouts.secundario')
@section('container')
    <div class="clear"></div>

    
    <div id="page-content-title">
        <div id="page-content-header" class="container_24">
            <div id="page-title">
                <h1>Galería</h1>
            </div>
            <!-- end page-title -->
        </div>
        <!-- end page-content-header -->
    </div>
    <!-- end page-content-title -->

    <div class="clear"></div>

    <div id="page-content">
        <div class="container_24">
            <p class="breadcrumbs"><span class="breadcrumb_info">Usted está en: </span> <a href="../index.html">Inicio</a><span class="breadarrow"> &raquo; </span><span class='current_crumb'>Galería </span></p>			</div>




        <div id="content-container" class="container_24">
            <div id="main-content" class="grid_24">
                <div class="main-content-padding">

                    <div class="post portfolio-page" id="post-70">
                        <div class="entry">
                            <p><strong>Galería</strong></p>
                        </div>
                    </div>


                    <div class="clear"></div>
                    <div class="portfolio-items-wrapper">
                        <div class="one_third">
                            <div class="thumb-holder-3-col pngfix">
                                <div class="portfolio-img-thumb-3-col">
                                    <span class="portfolio-zoom-image-3-col pngfix"> </span>
                                        <a rel="wp-prettyPhoto[portfolio]" href="{{asset('../images/galeria/ambientacion.png')}}" title="ambientacion">
                                            </a>				
                                        </div><!-- end portfolio-img-thumb-3-col -->
                            </div><!-- end thumb-holder-3-col -->


                        </div><!-- end one_third -->

                        <div id="paginationPortfolio" class="grid_23">
                            <div class="navigation">
                                <div class="alignleft"></div>
                                <div class="alignright"></div>
                            </div>
                        </div>
                    </div><!-- end portfolio-items-wrapper -->

                    <div class="clear"></div>

                </div><!-- end main-content-padding -->
            </div><!-- end main-content -->
        </div><!-- end content-container -->

        <div class="clear"></div>



    </div><!-- end page-content -->
@endsection