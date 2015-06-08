<html>
<head>
    <title>Restful Routes</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
	<h1>Products</h1>
	<table>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Actions</th>
		</tr>
//take data from session 'all_products'
		<?php
			$i = 0;
			var_dump($this->session->userdata('all_products'));
			die("died inside products/all_products");
			foreach($this->session->userdata('all_products') as $value)
		{
			$i++;?>
			<tr class = "row<?=$i%2?>">
				<td><?=$value['name']?></td>
				<td><?=$value['description']?></td>
				<td><?=$value['price']?></td>
				<td><a class = "smallLink" href = '/show/<?=$value['id']?>' >Show</a>
				<a class = "smallLink" href = '/edit/<?= $value['id']?> '>Edit</a>
				<form class = "smallForm" method = 'remove' action = "POST">
					<input class = "smallSubmitBtn" type="submit" name = '<?=$value['id']?>' value = "remove"></td>
				</form>
			</tr>
			<?php } ?>
	</table>
	<a href= 'new' value = "Add a new product">Add a new product</a>
</body>
</html>