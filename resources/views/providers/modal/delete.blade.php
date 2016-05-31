<modal title="¡Eliminando!" :show.sync="deleteModal" effect="fade" small>
	<div slot="modal-header" class="modal-header">
		<h4 class="modal-title">
		  <b>@yield('modal-delete-title')</b>
		</h4>
	</div>	
	<div slot="modal-body" class="modal-body">
		@include('layouts.flash')
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">¿Seguro que desea eliminar el proveedor?</div>
		</div>
	</div>
	<div slot="modal-footer" class="modal-footer">
		<button type="button" class="btn btn-default" @click='closeModal'>Cancelar</button>
		<button type="button" class="btn btn-success" @click="submit">Aceptar</button>
	</div>
</modal>