
<div class="form-group">
	<label>Nombre:</label>
	<input type="text" id="name" class="form-control" placeholder="Ingrese el nombre" value="<?=isset($data->name)?$data->name:''?>">
</div>
<div class="form-group">
	<label>Tipo de identificación:</label>
	<select id="identification_type" class="form-control" required>
		<option value="">Seleccionar</option>
		<option value="Cédula de ciudadanía" <?=$data->identification_type=='Cédula de ciudadanía'?'selected':''?>>Cédula de ciudadanía</option>
		<option value="Cédula de extranjería" <?=$data->identification_type=='Cédula de extranjería'?'selected':''?>>Cédula de extranjería</option>
		<option value="NIT" <?=$data->identification_type=='NIT'?'selected':''?>>NIT</option>
		<option value="Pasaporte" <?=$data->identification_type=='Pasaporte'?'selected':''?>>Pasaporte</option>
	</select>
</div>
<div class="form-group">
	<label>Número de identificación:</label>
	<input type="text" id="identification_number" class="form-control" placeholder="Ingrese el número de identificación" value="<?=isset($data->identification_number)?$data->identification_number:''?>">
</div>
<div class="form-group">
	<label>Número de teléfono:</label>
	<input type="text" id="phone_number" class="form-control" placeholder="Ingrese número de teléfono" value="<?=isset($data->phone_number)?$data->phone_number:''?>">
</div>
<div class="form-group">
	<label>Número de celular:</label>
	<input type="text" id="mobile_number" class="form-control" placeholder="Ingrese el número de celular" value="<?=isset($data->mobile_number)?$data->mobile_number:''?>">
</div>
<div class="form-group">
	<label>Fecha de nacimiento:</label>
	<input type="date" id="born_date" class="form-control" placeholder="Ingrese fecha de nacimiento" value="<?=isset($data->born_date)?$data->born_date:''?>">
</div>