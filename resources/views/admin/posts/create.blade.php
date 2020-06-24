@extends('admin.layout');

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
        <div class="row">
            <div class="col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Crear una publicación</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="">
                        <div class="card-body">
                            <div class="form-group">
                                <label >Título de la publicación</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                    <!-- /.form -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

@endsection