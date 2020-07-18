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
                required
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