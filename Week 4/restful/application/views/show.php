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
             <legend>Product No. <?=$value['id']?> </legend>
            <h3>Name:</h3>
            <h5><?=$value['name']?></h5>
            <h3>Description:</h3>
            <h5><?=$value['description']?></h5>
            <h3>Price:</h3>
            <h5><?=$value['price']?></h5>
    </fieldset>
    <a href="ProductsC/display_product/<?=$value['id']?>" >Edit Product</a>
    <?php }?>
    <a href="/">Go Back</a>

</body>
</html>