<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inserted</title>
</head>
<body>
    
    <?php

    include "modules/config.php";

    if (isset($_POST['product_done'])){
        echo "<h1>Product Added Successfully!</h1>";
        echo "Product Description: $_POST[product_desc]<br>";
        echo "Brand Id: $_POST[brand_id]<br>";
        echo "Model Number: $_POST[model_number]<br>";
        echo "Model Name: $_POST[model_name]<br>";
        echo "Color: $_POST[model_color]<br>";
        echo "Display_size: $_POST[display_size]<br>";
        echo "Display_resolution: $_POST[display_resolution]<br>";
        echo "Operating System: $_POST[operating_system]<br>";
        echo "Processor: $_POST[processor]<br>";
        echo "Internal Storage: $_POST[internal_storage]<br>";
        echo "RAM: $_POST[ram]<br>";
        echo "Memory Card Available: $_POST[memory_card_available]<br>";
        echo "Primary Camera: $_POST[primary_camera]<br>";
        echo "Secondary Camera: $_POST[secondary_camera]<br>";
        echo "Nework Type: $_POST[network_type]<br>";
        echo "Battery Capacity: $_POST[battery_capacity]<br>";
        echo "Width: $_POST[mobile_width]<br>";
        echo "Depth: $_POST[mobile_depth]<br>";
        echo "Weight: $_POST[mobile_weight]<br>";
        echo "Price: $_POST[mobile_price]<br>";
        echo "Availablity: $_POST[mobile_availablity]<br>";
        $sql = "INSERT INTO `product_master` (`product_id`, `product_desc`, `brand_id`, `model_number`, `model_name`, `model_colour`, `display_size`, `display_resolution`, `operating_system`, `processor`, `internal_storage`, `ram`, `memory_card_available`, `primary_camera`, `secondary_camera`, `network_type`, `battery_capacity`, `mobile_width`, `mobile_depth`, `mobile_weight`, `mobile_price`, `mobile_availabilty`) VALUES
        (NULL, '$_POST[product_desc]', '$_POST[brand_id]', '$_POST[model_number]', '$_POST[model_name]', '$_POST[model_color]', '$_POST[display_size]', '$_POST[display_resolution]', '$_POST[operating_system]', '$_POST[processor]', '$_POST[internal_storage]', '$_POST[ram]', '$_POST[memory_card_available]', '$_POST[primary_camera]', '$_POST[secondary_camera]', '$_POST[network_type]', '$_POST[battery_capacity]', '$_POST[mobile_width]', '$_POST[mobile_depth]', '$_POST[mobile_weight]', '$_POST[mobile_price]', '$_POST[mobile_availablity]');";
        if ($conn->query($sql) == true){
            $sql = "SELECT `brand_name` FROM `brand_master` WHERE `brand_id`='$_POST[brand_id]'";
            $res = $conn->query($sql);
            $row = mysqli_fetch_array($res);
            echo "\n<script>
                alert('Product \'$row[brand_name] $_POST[model_name]\' added Successfully.');
                location.replace('data_inserter.php');
            </script>";
        }
    }
    else if (isset($_GET['brand_done'])){
        $sql = "SELECT `brand_name` FROM `brand_master` WHERE `brand_name`='$_GET[new_brand]';";
        $res = $conn->query($sql);
        if (mysqli_fetch_array($res) == NULL){
            echo "\n<script>
                alert('Brand $_GET[new_brand] added Successfully.');
            </script>";
            echo "<h3><a href='data_inserter.php'>Go to Add Product page!</a></h3>";
        }
        else{
            echo "<script>alert('Brand already present. PLease check again.');</script>";
        }
        echo "<script>
        location.replace('data_inserter.php');
        </script>";
    }
    else{
        echo "<h1><a href='data_inserter.php'>Want to insert a product?</a></h1>";
    }
    ?>

</body>
</html>