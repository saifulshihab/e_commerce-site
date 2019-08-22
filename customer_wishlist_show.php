<?php 

session_start();
	include_once 'Crud.php';
	$crud = new Crud();

	$cemail = $_SESSION['customer_email'];
?>


<table>
						    <tr>
						         <th>Product Id</th>			        
						         <th>Product Name</th>			        
						         <th>Product Brand</th>			        
						         <th>Product Catagory</th>			        
						         <th>Product Image</th>			        
						         <th>Product Price</th>			        
						         <th>Action</th>
						    </tr>
						    <?php 			 					

						    $query2 = "select * from  wishlist where customer_email='$cemail'";
							$result2 = $crud->getData($query2);
						        foreach($result2 as $res){
						           echo "<tr>";
									echo "<td>".$res['p_id']."</td>";
									echo "<td>".$res['p_name']."</td>";
									echo "<td>".$res['p_brand']."</td>";
									echo "<td>".$res['p_catagory']."</td>";
									echo "<td><img width='50%' src='".$res['p_image']."'/></td>"; 
									echo "<td>".$res['p_price']."</td>";
									 echo"<td><button id=".$res['p_id']." class='buy_now btn btn-sm btn-success float-left' style='margin-right:0'><i class='fas fa-shopping-bag'style='margin-right:5px;margin-left:-2px'></i>Buy Now</button>
									  <button id=".$res['id']." class='remove btn btn-sm btn-danger'><i class='fas fa-times'style='margin-right:1px;margin-left:-2px'></i></button></td> ";
									echo "</tr>";
						        }			    
						    ?>
						    
						</table>
 			<div class="modal fade" id="buynowmodal">
				<div class="modal-dialog modal-xl modal-dialog-centered">
					<div class="modal-content justify-content-center">
						<div class="modal-header">
							<h2>Buy Now</h2>
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">							
							<div id="buynow_product_show" class="text-center justify-content-center"></div>
							<div id="congomsgshow" class="text-center"><div class="bg-success text-light"><p style="font-weight: bold" class="p-5"><span style="color: red">Congratulations!</span> Your order is successfully received! Will send a message very soon. Thank you:)</p></div></div>
						</div>
																							
					</div>
				</div>
			</div>

<!-- JavaScript Files -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	

	<script type="text/javascript">
		$(document).ready(function(){
			$('.buy_now').click(function(){
				$('#buynowmodal').modal('show');
				var id = $(this).attr('id');
			$.ajax({
 					url:"buy-now.php",
 					type:"POST",
 				 
 					data:{id:id},
 					success:function(data){
 						$('#congomsgshow').hide();
						$('#buynow_product_show').html(data);	
					 }
					
 				})			
			})
 
 			$(".remove").click(function(){
 				var id = $(this).attr('id');
 				$.ajax({
 					url:"wishlist_delete.php",
 					type:"post",
 					data:{id:id},
 					success:function(data){
 						if(data=="success"){
 							$.get('customer_wishlist_show.php', function(data){
								$('#customer_wishlist_show').html(data);
							})
 						}
 					}
 				})
 			})
		})
	</script>						