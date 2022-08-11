<?php
    $product = $_POST['product_description'];
    $listPrice = $_POST['list_price'];
    $percent = $_POST['discount_percent'];

    $listPrice = round($listPrice, 2);
    $discountAmoun = $listPrice / 100 * $percent;
    $discountAmount = round($discountAmoun, 2);

    $discountPric = $listPrice - $discountAmount;
    $discountPrice = round($discountPric, 2);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $product; ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$".$listPrice; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo "$".$percent; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$".$discountAmount; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$".$discountPrice; ?></span><br>
    </main>
</body>
</html>