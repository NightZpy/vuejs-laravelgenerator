<validator name="validation">			
		<!-- Id Field -->
		<div class="form-group col-sm-6">
		    {!! Form::label('id', 'Id:') !!}
		    <input type="number" class="form-control" v-model="row.id" data-type="text" number data-type="number"/>
		</div>

		<div class="form-group col-sm-6">
		    <label for="name">Nombre:</label>
		    <input type="text" class="form-control" v-model="row.name" data-type="text" />
		</div>

		<!-- Code Field -->
		<div class="form-group col-sm-6">
		    <label for="code">Código:</label>
		    <input type="text" class="form-control" v-model="row.code" v-validate:code="{ required: true, minlength: 3, maxlength: 128 }" data-type="text" />
		    <div v-if="$validation.code.invalid" class="alert alert-danger" role="alert">
				<div v-if="$validation.code.required"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					El código es obligatorio
				</div>
				<div v-if="$validation.code.minlength">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					Longitud mínima erronea					
				</div>
			</div>		
		</div>

		<!-- Specialty Field -->
		<div class="form-group col-sm-6">
		    <label for="specialty">Código:</label>
		    <input type="text" class="form-control" v-model="row.specialty" v-validate:specialty="{ required: true, minlength: 3, maxlength: 128 }" data-type="text" />
		    <div v-if="$validation.specialty.invalid" class="alert alert-danger" role="alert">
				<div v-if="$validation.specialty.required"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					El código es obligatorio
				</div>
				<div v-if="$validation.specialty.minlength">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					Longitud mínima erronea					
				</div>
			</div>	
		</div>			
</validator>	