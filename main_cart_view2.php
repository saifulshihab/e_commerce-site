<?php
session_start(); 
include_once 'Crud.php';

$crud = new Crud();
 
$result =$crud->getData("select * from cart");

if(isset($_SESSION['customer_email'])){
	$email = $_SESSION['customer_email'];
	 $q="select * from customer_registration where customer_email='$email'"; 
	 $result2=$crud->getData($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		table{
			width:100% !important;
		}
	</style>
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
							echo "<td>".$res['p_id']."</td>";
							echo "<td>".$res['p_name']."</td>";
							echo "<td>".$res['p_brand']."</td>";							
							echo "<td><img width='15%' src='".$res['p_image']."'/></td>"; 
							echo "<td>".$res['p_price']."</td>";						
							echo "</tr>";
							 
						}
						$p=0;
						foreach ($result as $res) {
							$p=$p+(int)$res['p_price'];
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
			var pid = "<?php foreach($result as $res){echo $res['p_id'];echo ", ";} ?>";
			var pname ="<?php foreach($result as $res){echo $res['p_name'];echo ", ";} ?>";
			var pbrand = "<?php foreach($result as $res){echo $res['p_brand'];echo ", ";} ?>";
			var pprice = "<?php foreach($result as $res){echo $res['p_price'];echo ", ";} ?>";

		 

			var t_pay = "<?php $p=0;
						foreach ($result as $res) {
							 $p=$p+(int)$res['p_price'];
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
						$('#chkout_product_show').hide();
						

						$.ajax({
							 url:"main_cart_product_alldelete.php",
							type:"POST",
							success:function(data){						
								if(data=="success"){									 
								}						
							}
						 })

						$('#congomsgshow').show();

					}
				}
			})
			}
		 
 		 })
 	}) 
 	</script>



</body>
</html>