<html>
<head>
    <title>Restful Routes</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
	<form action = 'products/c_create' method = "POST">
		<fieldset>
			<legend>Add a new product</legend>
			<h3>Name:</h3>
			<input type="text" name = "name">
			<h3>Description</h3>
			<input type="text" name = "description">
			<h3>Price</h3>
			<input type="decimal" name = "price">
		<input class = "submitBtn" type="submit" value = "Create">
	</fieldset>
	</form>
	<a href="/">Go back</a>


</body>
</html>