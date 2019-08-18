<?php
 session_start();
include_once 'Crud.php';

$crud = new Crud();
 
$result =$crud->getData("select * from cart");
if($result){

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tech Hub</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="css/main_cart.css" />
</head>
<body> 
	
	
		<div class="cart_data">
				<table>
					<tr>
						<th>Product ID</th>
						<th>Product Name</th>
						<th>Product Brand</th>
						<th>Product Catagory</th>
						<th>Product Image</th>
						<th>Product Price</th>
						<th>Action</th>
					</tr>
					<?php 
					
						foreach ($result as $key => $res) {
							echo "<tr>";
							echo "<td>".$res['p_id']."</td>";
							echo "<td>".$res['p_name']."</td>";
							echo "<td>".$res['p_brand']."</td>";
							echo "<td>".$res['p_catagory']."</td>";
							echo "<td><img width='120%' src='".$res['p_image']."'/></td>"; 
							echo "<td>".$res['p_price']."</td>";
							 echo"<td><button id=".$res['id']." class='delete btn btn-sm btn-secondary'><i class='fas fa-times'style='margin-right:1px;margin-left:-2px'></i></button></td> ";
							echo "</tr>";
							 
						}
						echo "</table>";
					}else{

							echo '<div id="msg" class="mt-5 mb-5 p-3 text-center">';
							echo '<span id="" class="text-danger">Cart is Empty!</span>';
							echo '</div>';
					}	
					?>
				
			</div>			
			<button id="checkout" class="btn btn-info btn-sm btn-block" style="margin-top: 15px" data-toggle="modal" data-target="#checkoutModal">Checkout</button>
			<button id="all_delete" class="btn btn-sm btn-warning btn-md btn-block" style="margin-top: 15px">Clear cart</button>

			<div class="modal fade" id="checkoutModal">
				<div class="modal-dialog modal-xl modal-dialog-centered">
					<div class="modal-content justify-content-center">
						<div class="modal-header">
							<h2>Checkout</h2>
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">							
							<div id="chkout_product_show" class="text-center justify-content-center"></div>
							<div id="congomsgshow" class="text-center"><div class="bg-success text-light"><p style="font-weight: bold" class="p-5"><span style="color: red">Congratulations!</span> Your order is successfully received! Will send a message very soon. Thank you:)</p></div></div>
						</div>
																							
					</div>
				</div>
			</div>							

 
	<!-- JavaScript Files -->

 	<script type="text/javascript">
 		 $(document).ready(function(){

			 $('.delete').click(function(){				 
				 var id = $(this).attr('id');
				 $.ajax({
					 url:"main_cart_product_delete.php",
					 type:"POST",
					 data:{deleteid:id},
					 success:function(data){
						 if(data=="success"){
							 $.get('main_cart_view.php',function(data){
								$('#main_cart_data_show').html(data);
							 })
						 }
					 }
				 })
			 })
			 
			 $('#all_delete').click(function(){
				 
				 $.ajax({
					 url:"main_cart_product_alldelete.php",
					type:"POST",
					success:function(data){						
						if(data=="success"){							
							 $.get('main_cart_view.php',function(data){
								$('#main_cart_data_show').html(data);
							 })							
						}						
					}
				 })
				
			 })

			 $('#checkout').click(function(){
			 	$('#congomsgshow').hide();
			 	$.get('main_cart_view2.php',function(data){
					$('#chkout_product_show').html(data);
				})							
			 })

			 
		 })
 	</script>



</body>
</html>