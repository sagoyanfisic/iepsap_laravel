@extends('app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Noticia</label>
                        <div class="col-md-5">
                            <input id="name" name="name" type="text" placeholder="Ingrese el nombre de la noticia" class="form-control input-md" required="">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="button" onclick="addContent();" data-toggle="tooltip" data-placement="top" title="Add Content" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Agregar nueva noticia</button>
            </div>
        </div>

        <?php $content_row=0 ; ?>
        <div id="content-row">

            <div class="form-group">
                <label class="col-sm-2"></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="code_preview0" name="" style="height: 300px;"></textarea>
                </div>
            </div>
        </div>
        <?php $content_row++; ?>
    </div>
    <!-- Page - Content End -->
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#code_preview0').summernote({height: 300});
        });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@endsection
