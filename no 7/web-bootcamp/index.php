<?php
	include_once 'database/config.php';
	$query = mysqli_query($dbconnect,"SELECT products.id AS id, products.name AS name, product_categories.name AS category_name FROM products INNER JOIN product_categories ON products.category_id = product_categories.id ORDER BY products.id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>web bootcamp</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Data Products</h2>
		<div class="table-responsive">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>PRODUCTS</th>
					</tr>
				</thead>
				<?php
						if (mysqli_num_rows($query)>0) {
							while ($data = mysqli_fetch_array($query)) {
							
					?>
				<tr>
					<td><?php echo $data["id"];?></td>
					<td><?php echo $data["name"];?></td>
					<td><?php echo $data["category_name"];?></td>
				</tr>
				<?php
							}
						}
				?>
			</table>
		</div>
	</div>
</body>
</html>