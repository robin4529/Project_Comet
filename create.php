<?php include_once "autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Mshop</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
	<?php
			if(isset($_POST['product'])){
					//get value//
				$name = $_POST['name'];
				$category = $_POST ['category'];
				$price = $_POST ['price'];
				$sprice = $_POST['sprice'];
				$pdesc = $_POST['pdesc'];

				$slug= slug($name);

				//validitation form value//
				if(empty($name)|| empty($category)|| empty($price)||empty($sprice)||empty($pdesc)){
					$msg= validate("All filed are Require");
				}else{
					$file_name =move($_FILES['photo'],'media/products/');

					create("INSERT INTO products (name, slug, category, price, sprice, pdesc , photo)
					 VALUES ('$name','$slug','$category','$price','$sprice','$pdesc','$file_name')");
					
					$msg = validate('Product updated successfully','success');
				}
			}
	?>
		<div class="wrap ">
		<a class="btn btn-sm btn-primary" href="index.php">All product</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add new Product</h2>
				<?php
                    if(isset($msg)){
                    	echo $msg;}
                    ?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">category</label>
						<select class="form-control" name="category" id="">
						<option value="">-select-</option>
							<option value="Men">Men</option>
							<option value="Women">Women</option>
							<option value="kid">kid</option>
							<option value="Electronics">Electronics</option>
						</select>
					</div>	
					
					<div class="form-group">
						<label for="">Price</label>
						<input name="price" class="form-control"  type="text">
					</div>
					<div class="form-group">
						<label for="">sale price</label>
						<input name="sprice" class="form-control"  type="text">
					</div>
						<div class="form-group">
						<label for="">discription</label>
						<textarea name="pdesc" class="form-control" id="" ></textarea>
					</div>
					<div class="form-group">
						<label for="">photo</label>
						<input name="photo" class=""  type="file">
					</div>
					<div class="form-group">
						<input name="product" class="btn btn-primary" type="submit" value="Addedd Product">
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>