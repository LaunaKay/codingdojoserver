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
		<tr>
			<td>filler name</td>
			<td>filler description</td>
			<td>filler price</td>
			<td><a href = '/show'>Show</a>
			<a href = '/edit'>Edit</a>
			<form method = 'remove' action = "POST">
				<input type="submit" name = 'product id' value = "product number"></td>
			</form>
		</tr>
	</table>
	<a href= 'new' value = "Add a new product">
</body>
</html>