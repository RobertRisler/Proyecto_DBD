$(function() {
	$('#select-mesas').on('change', onSelectMesasChange); 
});



function onSelectMesasChange (){
	var id_mesa = $(this).val();



	//Ajax
	$.get('api/mesa/'+id_mesa+'/horarios', function(data){
		var html_select = '<option value="">Seleccione</option>';


		for(var i=0; i<data.length;++i){ 
			if(data[i].estado_reservacion==false){
			html_select += '<option value="'+data[i].id+'">'+data[i].hora_inicio+'</option>';
			}else{
				html_select += '<option value="" disabled>No existe horario disponible '+data[i].hora_inicio+'</option>';

			}
		}
		$('#select-horarios').html(html_select);


		


	});

}