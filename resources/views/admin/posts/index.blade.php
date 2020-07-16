@extends('admin.layout')

@section('header')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Posts <small>Listado</small> </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href=" {{route('admin')}} "> Inicio</a></li>
                    <li class="breadcrumb-item active"> Posts</li>
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
        <div class="card card-outline card-secondary">
          <div class="card-header">
            <h3 class="card-title">Listado de publicaciones</h3>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> 
              <i class="fas fa-plus"></i> Crear Publicación
            </button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="posts-table" class="table table-bordered table-hover">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Extracto</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->excerpt }}</td>
                        <td>
                          <a href="" class="btn btn-xs btn-info"> <i class="fas fa-pencil-alt"></i> </a>
                          <a href="" class="btn btn-xs btn-danger"> <i class="fas fa-times"></i> </a>
                        </td>
                    </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->

    
@endsection


@push('styles')

  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    
@endpush

@push('scripts')

    <!-- DataTables -->
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
      $(function () {
        $('#posts-table').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form method="POST" action=" {{ route('admin.posts.store') }} ">
      @csrf
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar el título de la nueva publicación</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <!-- <label >Título de la publicación</label> -->
              <input name="title"
              value =" {{ old('title') }}" 
              type="text" 
              class="form-control  {{ $errors->has('title') ? 'is-invalid' : '' }}" 
              placeholder="Ingresa el título de la publicación">
              {!! $errors->first('title', '<span class="error invalid-feedback"> :message </span>') !!}
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary">Crear publicación</button>
          </div>
        </div>
      </div>
    </form>
    <!-- /.form -->
    </div>
    
@endpush