<?php
 
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from product";

$result = $crud->getData($query);

?>

<table >
	<tr>
		 <th>Product ID</th>
		 <th>Product Name</th>
		 <th>Brand</th>
		 <th>Catagory</th>
		 <th>Picture</th>
		 <th>Price</th>
		 <th>Action</th>					        			       
	  </tr>
 <?php 

	  $query = "select * from  product";
	  $result = $crud->getData($query);
	foreach($result as $key=>$res){
		 echo"<tr>";
		 echo"<td>".$res['id']."</td>";
		 echo"<td>".$res['product_name']."</td>";
		 echo"<td>".$res['product_brand']."</td>";  
		 echo"<td>".$res['product_catagory']."</td>";
		 echo "<td><img width='17%' src='".$res['product_image']."'/></td>"; 
		 echo"<td>".$res['product_price']."</td>";           
		 echo"<td><button id=".$res['id']." class='edit btn btn-sm btn-success'  style='margin-right:5px'><i class='fas fa-edit'style='margin-right:1px'></i></button><button id=" .$res['id']." class='delete btn btn-sm btn-warning'><i class='fas fa-trash-alt' style='margin-right:2px'></i></button></td>";			                    
		 echo"</tr>";
	 }			    
?>
						    
</table>
 

<script type="text/javascript">
 	$(document).ready(function(){

 		$('#add-data').click(function(){
 			$("#product-add-form").slideDown();
 		})


 		$('.edit').click(function(){
 			var id = $(this).attr('id');
 			$.ajax({
 				url:"product-edit.php",
 				type:"POST",
 				data:{id:id},
 				success: function(data){
 					$('#product-edit-form').slideDown();
 					$('#product-edit-form').html(data);
 				}
 			})
 		})

 		$('.delete').click(function(){
 			var id = $(this).attr('id');
 			$.ajax({
 				url:"product-delete.php",
 				type:"POST",
 				data:{id:id},
 				success: function(data){
 					if(data=='success'){
 						$.get('product-view.php',function(data){
							$('#product-list-show').html(data);
 					})
 					 
 				}
 			} 
 		})
	})

 	})
</script>