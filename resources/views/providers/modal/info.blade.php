<modal title="Información" :show.sync="infoModal" effect="fade">
	<div slot="modal-header" class="modal-header">
		<h4 class="modal-title">
		  <b>Información</b>
		</h4>
	</div>	
	<div slot="modal-body" class="modal-body">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				@include('layouts.flash')</div>
			</div>
	</div>
	<div slot="modal-footer" class="modal-footer">
		<button type="button" class="btn btn-success" @click="closeModal">Listo</button>
	</div>
</modal>