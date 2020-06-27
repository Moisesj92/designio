@extends('admin.layout')

@section('header')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Posts <small>Crear Publicación</small> </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href=" {{route('admin')}} "> Inicio</a></li>
                    <li class="breadcrumb-item"><a href=" {{route('admin.posts.index')}} "> Posts</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
@endsection


@section('content')

    <div class="container-fluid">
        <form>
        <div class="row">
            <div class="col-8">
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="form-group">
                            <label >Título de la publicación</label>
                            <input name="title" type="text" class="form-control" placeholder="Ingresa el título de la publicación">
                        </div>

                        <div class="form-group">
                            <label >Contenido publicación</label>
                            <textarea name="body" class="form-control textarea" placeholder="Ingresa el contenido completo de la publicación"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-4">
                <div class="card card-secondary card-outline">
                    <div class="card-body">

                        <!-- Date -->
                        <div class="form-group">
                            <label>Fecha de Publicación</label>
                            <div class="input-group date" id="datePicker" data-target-input="nearest">
                                <input name="published_at" type="text" class="form-control datetimepicker-input" data-target="#datePicker"/>
                                <div class="input-group-append" data-target="#datePicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.form group -->

                        <div class="form-group">
                            <label>Categorías</label>
                            <select name="" class="form-control">
                                <option value="">Selecciona una categoría</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- /.form group -->

                        <div class="form-group">
                            <label> Eriquetas </label>
                            <select class="select2" 
                                    multiple="multiple" 
                                    data-placeholder="Selecciona una o mas etiquetas" 
                                    style="width: 100%;">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}"> {{ $tag->name }}</option>    
                                @endforeach
                            </select>

                        </div>
                        <!-- /.form group -->

                        <div class="form-group">
                            <label >Extracto de la publicación</label>
                            <textarea name="excerpt" class="form-control" placeholder="Ingresa un extracto de la publicación"></textarea>
                        </div>
                        <!-- /.form group -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                Guardar Publicación
                            </button>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </form>
        <!-- /.form -->
    </div>
    <!-- /.container-fluid -->

@endsection

@push('styles')

    <!-- Select2 -->
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    
    <!-- summernote -->
    <link rel="stylesheet" href="/adminlte/plugins/summernote/summernote-bs4.min.css">

@endpush

@push('scripts')

    <!-- InputMask -->
    <script src="/adminlte/plugins/moment/moment.min.js"></script>
    <script src="/adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Select2 -->
    <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>
    <!-- Summernote -->
    <script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
    

    <script>
        //Date range picker
        $('#datePicker').datetimepicker({
            format: 'D/M/YYYY'
        });

        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();
            // Summernote
            $('.textarea').summernote({
                height: 300,
            });
        });

        
    </script>
    
@endpush



