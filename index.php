<?php include_once "autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table shadow">
	<a class="btn btn-sm btn-primary" href="create.php">Added product</a>
		<div class="card">
			<div class="card-body">
				<h2>All Product</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>category</th>
							<th>price</th>
							<th>sale price</th>
							<th>discription</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>		
					</thead>
					<tbody>
						<?php
							$pdata=all('products');

							$i= 1;
							while($data =$pdata->fetch_object()):
						?>
						<tr>
							<td><?php echo $i; $i++; ?></td>
							<td><?php echo $data->name ?></td>
							<td><?php echo $data->category ?></td>
							<td><?php echo $data->price ?></td>
							<td><?php echo $data->sprice  ?></td>
							<td><?php echo $data->pdesc  ?></td>
							<td><img src="media/products/<?php echo $data->photo ?>" alt=""></td>
								<td>
									<a class="btn btn-sm btn-info" href="#">View</a>
									<a class="btn btn-sm btn-warning" 
									href="update.php?edit_id=<?php echo $data->id; ?>">
									Edit</a>
									<a class="btn btn-sm btn-danger" 
									href="delete.php?delete_id=<?php echo $data->id; ?>">Delete</a>
								</td>
						</tr>
						<?php endwhile; ?>
						</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>