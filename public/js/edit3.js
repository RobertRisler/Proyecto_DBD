

$(function() {
	$('#select-mesas').on('change', selectMesas); 
	
});



function selectMesas (){
	var cantidad = $(this).option();


	//Ajax
	$.get('cantidad', function(data){
		var html_select = '<input type="text" value="" >';


		
		html_select += '<input type="text" value="'+data.cantidad_asientos+'">';
		
		$('#cantidad_personas').html(html_select);


		


	});

}









