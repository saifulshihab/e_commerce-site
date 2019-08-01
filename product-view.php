<?php
 
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from product";

$result = $crud->getData($query);

?>
<button id="add-data">Add New Data</button>
 

						<table >
							 <tr>
						        <th>Product ID</th>
						        <th>Product Name</th>
						        <th>Brand</th>
						        <th>Catagory</th>
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
						            echo"<td>".$res['product_price']."</td>";           
						            echo"<td><button id=".$res['id']." class='edit'>Edit</button> | <button id=".$res['id']." class='delete'>Delete</button></td>";			                    
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
 					$('#product-edit-form').show();
 					$('#product-edit-form').html();
 				}
 			})
 		})

 		$('.delete').click(function(){
 			var id = $(this).attr('id');
 			$.ajax({
 				url:"delete.php",
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