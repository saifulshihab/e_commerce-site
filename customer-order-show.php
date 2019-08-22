<?php 

session_start();
	include_once 'Crud.php';
	$crud = new Crud();
		$email = $_SESSION['customer_email'];
		$query = "select * from customer_registration where customer_email='$email'";
	$result = $crud->getData($query);
?>
<table>
						    <tr>
						         <th>Customer Id</th>			        
						         <th>Customer Name</th>			        
						         <th>Customer Phone</th>			        
						         <th>Product Id</th>			        
						         <th>Product Name</th>			        
						         <th>Product Brand</th>
						         <th>Product Price</th>			        
						         <th>Deliver Address</th>			        
						         <th>Total Payment</th>
						         <th>Cancel Order</th>			        
						    </tr>
						    <?php 

			 						foreach($result as $res){
									$name= $res['customer_name'];
								}	
						    $query2 = "select * from  p_order where cname='$name'";
							$result2 = $crud->getData($query2);
						        foreach($result2 as $res){
						            echo"<tr>";
						            echo"<td>".$res['cid']."</td>";
						            echo"<td>".$res['cname']."</td>";
						            echo"<td>".$res['cphn']."</td>";
						            echo"<td>".$res['pid']."</td>";
						            echo"<td>".$res['pname']."</td>";
						            echo"<td>".$res['pbrand']."</td>";	
						            echo"<td>".$res['pprice']."</td>";
						            echo"<td>".$res['deliver_address']."</td>";
						            echo"<td>".$res['total_payment']."</td>";
						            echo"<td><button id=".$res['cid']." class='cancel_order btn btn-sm btn-danger' data-toggle=' ' data-target='#confirm_modal' style='margin-right:0'><i class='fas fa-times'style='margin-right:1px;'></i></button></td> ";
						            echo"</tr>";
						        }			    
						    ?>
						    
</table>

<div class="modal fade" id="confirm_modal">
	<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
		<div class="modal-header">
			<h4>Order Cancellation</h4>
		</div>
		<div class="modal-body">
			<h6>Do you want to cancel your order?</h6>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-warning btn-sm">No, Close</button>
			 <button class="btn btn-danger btn-sm" id="confirm_btn">Yes, Confirm</button>
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

		 $('.cancel_order').click(function(){
		 	var id = $(this).attr('id');

		 	 $("#confirm_modal").modal('show');

		 	 $('#confirm_btn').click(function(){					 
			 $.ajax({
			 	url:'customer-order-cancel.php',
			 	type:'post',
			 	data:{cid:id},
			 	success:function(data){
			 		if(data=="success"){
 						 
			 			$.get('customer-order-show.php', function(data){
							$('#customer_order_show').html(data);
						})

			 		}
			 	}
			 })
		})
		 	 
		 }) 
	})
</script>