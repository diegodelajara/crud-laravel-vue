<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" @submit.prevent="editKeep">
	      <div class="modal-body">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Tarea</label>
			    <input type="text" class="form-control" placeholder="" v-model="fillKeep.keep">
			   </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Actualizar</button>
	      </div>
	    </form>
    </div>
  </div>
</div>
