

$(function() {
	$('#select-restaurantes').on('change', onSelectRestaurantesChange); 
	
});



function onSelectRestaurantesChange (){
	var id_restaurante = $(this).val();


	//Ajax
	$.get('/restaurante/'+id_restaurante+'/mesas', function(data){
		var html_select = '<option value="">Seleccione</option>';


		for(var i=0; i<data.length;++i){ 
			html_select += '<option value="'+data[i].id+'">'+data[i].cantidad_asientos+'</option>';
		}
		$('#select-mesas').html(html_select);


		


	});

}









