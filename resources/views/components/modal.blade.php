<!--  ventana Modal -->
<div class="modal fade" id="crearPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <form  action="{{url('crear')}}" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CREAR POST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="form-group">
           <label for="titulo">Título</label>
           <input type="text" name="titulo" class="form-control">
          </div>

          <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea name="contenido" class="form-control" rows="15" cols="80"></textarea>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary"  value="Publicar">

      </div>
    </form>
    </div>
  </div>
</div>
