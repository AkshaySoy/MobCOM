<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<body>
    <?php
    
    include "modules/config.php";

    $b_name = "apple";

    $sql = "SELECT model_name, brand_id FROM product_master WHERE brand_id = (SELECT brand_id FROM brand_master WHERE brand_id='$b_name';)";
    $res = $conn->query($sql);
    while ($row = $res->fetch_array()){
        echo "<br>$row[brand_id] $row[model_name]";
    }
    ?>
</body>
</html>