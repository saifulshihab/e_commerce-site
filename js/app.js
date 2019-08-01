$(document).ready(function(){
	
	$('#product-add-form').hide();
	$.get('product-view.php',function(data){
		$('#product-list-show').html(data);
	})
	

})