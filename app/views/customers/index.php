<div id="table-container">
	<table class="table table-style mt-5">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Fecha</th>
				<th scope="col">Nombre</th>
				<th scope="col">Tipo identificación</th>
				<th scope="col">No. identificación</th>
				<th scope="col">Telefono</th>
				<th scope="col">Celular</th>
				<th scope="col">Fecha nacimiento</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach(json_decode($data) as $customer) { ?>
			<tr>
				<td><?=$customer->created_at?></td>
				<td><?=$customer->name?></td>
				<td><?=$customer->identification_type?></td>
				<td><?=$customer->identification_number?></td>
				<td><?=$customer->phone_number?></td>
				<td><?=$customer->mobile_number?></td>
				<td><?=$customer->born_date?></td>
				<td><a data-value="<?=$customer->id?>" class="btneditcustomer text-success">Editar</a></td>
				<td><a data-value="<?=$customer->id?>" class="btndeletecustomer text-danger">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>



