<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("location: admin-login.php");
}

include_once 'crud.php';
$crud = new crud();
	
	$id = $_POST['id'];

	$query = "select * from product where id=$id";

	$query1 = "Select * from brand order by brand_name";
	$brand_name_result = $crud->getData($query1);

	$result = $crud->getData($query);

	foreach ($result as $key => $res) {
		 $id = $res['id'];
		 $p_name = $res['product_name'];
		 $p_brand = $res['product_brand'];
		 $p_catagory = $res['product_catagory'];
		 $p_image = $res['product_image'];
		 $p_price = $res['product_price'];
	}
?>
 
							<h3 id="content-header">Product Edit</h3>
							 <input type="text" id="uid" hidden value="<?php echo $id ?>">
		 					<div class="form-group">
		 						<label for=""><strong>Product Name</strong></label>
		 						<input type="text" class="form-control" name="product_name" id="uproduct_name" value="<?php echo $p_name?>" />
		 					</div>
		 					<div class="form-group">
		 						<label for=""><strong>Product Brand</strong></label>
		 						<div class="form-group">
		 							<p>Previous Brand</p>
		 						 <input type="text" class="form-control"  id="uproduct_brand_txt" readonly="readonly" value="<?php echo $p_brand ?>"  >
		 						</div>
		 						<p>New Brand</p>
		 						 <select class="form-control" id="uproduct_brand" name="product_brand">
								   	 <?php 
		 								foreach($brand_name_result as $res){
											echo "<option>".$res['brand_name']."</option>";			
										}
		 							?>
							    </select required>
							   
		 					</div>
		 		
		 					<div class="form-group">
		 						<label for=""><strong>Product Catagory</strong></label>
		 						<div class="form-group">
		 							<p>Previous Catagory</p>
		 						 <input type="text" class="form-control" readonly="readonly"  id="uproduct_catagory_txt" value="<?php echo $p_catagory ?>"  >
		 						</div>
		 						<p>New Catagory</p>
		 						<select class="form-control" id="uproduct_catagory" name="product_catagory">
		 							  <option value="0" selected disabled>--Select Catagory--</option>
								      <option value="1">Desktop & PC</option>							 
								      <option value="2">Mobile & Tabs</option>
								      <option value="3">Camera</option>
								      <option value="4">Watch</option>
								      <option value="5">Laptop</option>
							    </select required>
		 					</div>
		 					
							<label for=""><strong>Product Image</strong></label> <br>
		 					<img id="upreview" style="width:10%;margin-bottom: 10px" src="<?php echo $p_image ?>" />

		 					<div class="form-group">
		 						
		 						<input style="color: green" type="file" onchange="showImage(this,'preview')" name="uproduct_image" id="uproduct_image_url" required>
		 					</div>
		 					<div class="form-group">
		 						<label for=""><strong>Product Price</strong></label>
		 						<input type="text" class="form-control" name="product_price" id="uproduct_price" value="<?php echo  $p_price ?>" required>
		 					</div>

		 					 
		 					<button class="btn btn-danger float-right" type="button" id="cancel" value="Cancel" onclick="$('#product-edit-form').slideUp();"><i class="fas fa-window-close mr-2"></i>Cancel</button>
		 					 
		 					<button style="margin-right: 5px" class="btn btn-success float-right" type="button" name="update" id="update"><i class="fas fa-save mr-2"></i>Update</button>


<script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript">
	
	function showImage(fileInput,id){
		 

		var files = fileInput.files;
		 
		for(var i=0;i<files.length;i++){
			var file = files[i];
			var imageType=/image.*/;
			if(!file.type.match(imageType)){
				continue;
			}
			var img=document.getElementById(""+id);
			img.file=file;
			var reader = new FileReader();
			reader.onload = (function(aImg){
				return function(e){
					aImg.src = e.target.result;
				};
			})(img);
			reader.readAsDataURL(file);
		}
	}
			 
		 $(document).ready(function(){

		 	$('#update').click(function(){
		 	var id = $('#uid').val();
 			 var p_name = $('#uproduct_name').val();
			 var p_brand = $('#uproduct_brand_txt').val();
			var p_catagory = $('#uproduct_catagory_txt').val();
			 var p_image = $('#upreview').attr('src');
			 var p_price = $('#uproduct_price').val();

			 $.ajax({
			 	url:"product-editAction.php",
			 	type:"POST",
			 	data: {id:id,uproduct_name:p_name, uproduct_brand:p_brand, uproduct_catagory: p_catagory, uproduct_image:p_image, uproduct_price:p_price},
			 	success:function(data){
			 		if(data=="success"){
			 			$('#uproduct_name').val('');
			 			$('#uproduct_brand_txt').val('');
			 			$('#uproduct_catagory_txt').val('');
			 			 
			 			$('#uproduct_price').val('');

			 			$('#product-edit-form').slideUp();
			 			$.get('product-view.php',function(data){
			 				$('#product-list-show').html(data);
			 			})
			 		}
			 	}
			 })
 		})	
 

 }) 


		 $(function(){
		 	$("#uproduct_brand").change(function(){
		 		var result = $("#uproduct_brand option:selected").text();
		 		$("#uproduct_brand_txt").val(result);
		 	})
		 })
	  $(function(){
		 	$("#uproduct_catagory").change(function(){
		 		var result2 = $("#uproduct_catagory option:selected").text();
		 		$("#uproduct_catagory_txt").val(result2);
		 	})
		 })

	 </script>
 