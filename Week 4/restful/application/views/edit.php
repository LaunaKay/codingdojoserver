<html>
<head>
    <title>Restful Routes</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
    <?php
    foreach($this->session->userdata('current_product') as $value)
    {?>
    <fieldset>
        <form action = 'ProductsC/update/<?=$value['id']?>' method = 'POST'>
            <legend>Edit Product No. <?=$value['id']?> </legend>
            <h3>Name:</h3>
            <input type="text" name = "name" value = "<?=$value['name']?>">
            <h3>Description:</h3>
            <input type="text" name = "description" value = "<?=$value['description']?>">
            <h3>Price:</h3>
            <input type="text" name = "price" value = "<?=$value['price']?>">
            <!-- <input type = "text" name = "test"> -->
        	<input class = "submitBtn" type="submit" value = "Update">
        </form>
    </fieldset>
	<a href="ProductsC/show_product/<?=$value['id']?>" >Show Product</a>
    <?php }?>
	<a href="/">Go Back</a>

</body>
</html>