<html>
<head>
    <title>Restful Routes</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
	<h1>Products</h1>
	<h4><?= $this->session->flashdata('created'); ?>
         <?= $this->session->flashdata('removed');?>
     	<?= $this->session->flashdata('updated');?></h4>
	<table>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Actions</th>
		</tr>
		<?php
			$i = 0;

			foreach($this->session->userdata('products') as $value)
		{
			$i++;?>
			<tr class = "row<?=$i%2?>">
				<td><?=$value['name']?></td>
				<td><?=$value['description']?></td>
				<td><?=$value['price']?></td>
				<td><a class = "smallLink" href = 'ProductsC/show_product/<?=$value['id']?>' >Show</a>
				<a class = "smallLink" href = 'display_product/<?= $value['id']?> '>Edit</a>
				<form class = "smallForm" action = 'remove_product/<?=$value['id']?>' method = "POST">
					<input class = "smallSubmitBtn" type="submit" value = "remove"></td>
				</form>
			</tr>
			<?php } ?>
	</table>
	<a href= 'new' value = "Add a new product">Add a new product</a>
</body>
</html>