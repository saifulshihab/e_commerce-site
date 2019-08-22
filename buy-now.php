<?php
session_start(); 

include_once 'Crud.php';
$crud = new Crud();

if(isset($_SESSION['customer_email'])){

	$id = $_POST['id'];
	 
	$query = "select * from product where id=$id";
 
	$result = $crud->getData($query);

	$email = $_SESSION['customer_email'];
	 $q="select * from customer_registration where customer_email='$email'"; 
	 $result2=$crud->getData($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 	<link rel="stylesheet" href="css/main_cart.css">
</head>
<body> 
	
	
		<div class="cart_data">

				<table>
					<tr>
						<th>Product ID</th>
						<th>Product Name</th>
						<th>Product Brand</th>						
						<th>Product Image</th>
						<th>Product Price</th>
						
					</tr>
					<?php 
					
						foreach ($result as $key => $res) {							
							echo "<tr>";
							echo "<td>".$res['id']."</td>";
							echo "<td>".$res['product_name']."</td>";
							echo "<td>".$res['product_brand']."</td>";							
							echo "<td><img width='15%' src='".$res['product_image']."'/></td>"; 
							echo "<td>".$res['product_price']."</td>";						
							echo "</tr>";
							 
						}
						$p=0;
						foreach ($result as $res) {
							$p=$p+(int)$res['product_price'];
						}

						 echo "</table>";

						 echo '<div id="msg" class="p-5 text-center">';
						 echo '<span id="" class="text-dark"><strong>'.$_SESSION['customer_name']. ', You have to pay BDT <span style="color:red">'.$p.'</span> Taka </strong></span>';
						 echo '</div>';	

						 echo '<div class="form-group">';
						 echo '<h4><strong>Your Address</strong></h4>';
						 echo '<textarea id="addr" type="text" name="" class="form-control" required></textarea>';
						 echo '</div>';

						}else{
							echo '<div id="msg" class="mt-5 mb-5 p-3 text-center">';
							echo '<span id="" class="text-danger">Please login first!</span>';
							echo '</div>';
						}
						

					?>
				<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-danger btn-sm">Close</button>
				<button class="btn btn-warning btn-sm" id="confirm_btn">Confirm</button>		
				</div>
			</div>			
 
	<!-- JavaScript Files -->

 	<script type="text/javascript">
 		$(document).ready(function(){


 		 $('#confirm_btn').click(function(){

 		 	var cid = "<?php foreach($result2 as $res){echo $res['customer_id'];} ?>";
			var cname = "<?php foreach($result2 as $res){echo $res['customer_name'];} ?>";
			var cphn = "<?php foreach($result2 as $res){echo $res['customer_phone'];} ?>";
			var pid = "<?php foreach($result as $res){echo $res['id'];echo ", ";} ?>";
			var pname ="<?php foreach($result as $res){echo $res['product_name'];echo ", ";} ?>";
			var pbrand = "<?php foreach($result as $res){echo $res['product_brand'];echo ", ";} ?>";
			var pprice = "<?php foreach($result as $res){echo $res['product_price'];echo ", ";} ?>";

		 

			var t_pay = "<?php $p=0;
						foreach ($result as $res) {
							 $p=$p+(int)$res['product_price'];
						} echo $p ?>";
			var daddr = $('#addr').val();
			if(daddr==""){
				alert("Please enter your deliver address");
			}else{
					$.ajax({
				url:"order.php",
				type:"POST",
				data:{c_id:cid,c_name:cname, c_phn:cphn, p_id:pid, p_name:pname, p_brand:pbrand,p_price:pprice,d_addr:daddr, total_payment:t_pay},
				success:function(data){
					if(data=="success"){
						$('#buynow_product_show').hide();
	
						$('#congomsgshow').slideDown();

						$.get('customer-order-show.php', function(data){
							$('#customer_order_show').html(data);
						})

					}
				}
			})
			}
		 
 		 })
 	}) 
 	</script>



</body>
</html>