console.log('inciando -')

$("#showcustomer").click(function(){
	var route= "/TestUST/customer";
	$.ajax({
		url: route,
		type: 'GET',
		data: { },

		beforeSend:function(data){
			$("#projectcontainer").html('<div class="loader"></div>');
		},
		success:function(data){
			$("#projectcontainer").html(data);
		},
		error:function(xhr, thrownError, data){
			$("#projectcontainer").html('Error al realizar la consulta.');
		}
	});
});

$("#createcustomer").click(function(){
	var route= "/TestUST/customer/create";

	$.ajax({
		url: route,
		type: 'GET',
		data: {  },

		beforeSend:function(data){
			$("#projectcontainer").html('<div class="loader"></div>');
		},
		success:function(data){
			$("#projectcontainer").html(data);
		},
		error:function(xhr, thrownError, data){
			$("#projectcontainer").html('Error al realizar la consulta.');
		}
	});
});

$(document).on('click','#btnsavecustomer', function(e){
	var route= "/TestUST/customer/store";

	var name = $("#name").val();
	var identification_type = $("#identification_type").val();
	var identification_number = $("#identification_number").val();
	var mobile_number = $("#mobile_number").val();
	var phone_number = $("#phone_number").val();
	var born_date = $("#born_date").val();

	if(name && identification_type && identification_number && mobile_number && phone_number && born_date){
		$.ajax({
			url: route,
			type: 'POST',
			//type: 'JSON',
			data: { name:name, identification_type:identification_type, identification_number:identification_number, mobile_number:mobile_number, phone_number:phone_number, born_date:born_date  },

			beforeSend:function(data){
				$("#projectcontainer").html('<div class="loader"></div>');
			},
			success:function(data){
				$("#showcustomer").click();
				alert('Creado con éxito');
			},
			error:function(xhr, thrownError, data){
				$("#projectcontainer").html('Error al realizar la consulta.');
			}
		});
	}else{
		alert('Todos los datos del formulario son requeridos');
	}
});

$(document).on("click", ".btneditcustomer", function(){
	var route= "/TestUST/customer/edit";
	var value= $(this).attr('data-value');

	$.ajax({
		url: route,
		type: 'POST',
		//type: 'JSON',
		data: { id:value },

		beforeSend:function(data){
			$("#projectcontainer").html('<div class="loader"></div>');
		},
		success:function(data){
			$("#projectcontainer").html(data);
		},
		error:function(xhr, thrownError, data){
			$("#projectcontainer").html('Error al realizar la consulta.');
		}
	});
});

$(document).on("click", ".btndeletecustomer", function(){
	var route= "/TestUST/customer/destroy";
	var value= $(this).attr('data-value');

	$.ajax({
		url: route,
		type: 'POST',
		//type: 'JSON',
		data: { id:value },

		beforeSend:function(data){
			$("#projectcontainer").html('<div class="loader"></div>');
		},
		success:function(data){
			$("#showcustomer").click();
		},
		error:function(xhr, thrownError, data){
			$("#projectcontainer").html('Error al realizar la consulta.');
		}
	});
});

$(document).on('click','#btnupdatecustomer', function(e){
	var route= "/TestUST/customer/update";
	var value= $(this).attr('data-value');

	var name = $("#name").val();
	var identification_type = $("#identification_type").val();
	var identification_number = $("#identification_number").val();
	var mobile_number = $("#mobile_number").val();
	var phone_number = $("#phone_number").val();
	var born_date = $("#born_date").val();

	if(name && identification_type && identification_number && mobile_number && phone_number && born_date){
		$.ajax({
			url: route,
			type: 'POST',
			//type: 'JSON',
			data: { id:value, name:name, identification_type:identification_type, identification_number:identification_number, mobile_number:mobile_number, phone_number:phone_number, born_date:born_date  },

			beforeSend:function(data){
				$("#projectcontainer").html('<div class="loader"></div>');
			},
			success:function(data){
				$("#showcustomer").click();
				alert('Actualizado con éxito');
			},
			error:function(xhr, thrownError, data){
				$("#projectcontainer").html('Error al realizar la consulta.');
			}
		});
	}else{
		alert('Todos los datos del formulario son requeridos');
	}
});




