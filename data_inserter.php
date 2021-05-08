<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data_inserter</title>

<style>
    table, th,td {
        padding:10px;
    }
    table {
        width:80%;
    }
    td {
        text-align:right;
    }
</style>

</head>
<body>
    <?php
        include "modules/config.php";
        $sql = "SELECT * FROM brand_master;";
        $result = $conn->query($sql);
    ?>
    <button onclick='form_toggle()' id='form_toggle' name='form_toggle'>Add new Brand</button>

    <form id='product_inserter' name='product_inserter' method="POST" action='data_inserted.php'><h1 align='center'>Add Product</h1>
        <table align='center'>
            <tbody>
                <tr>
                    <td><label for="brand_id">Brand Name</label></td>
                    <td>
                        <select name="brand_id" id="brand_id" style='width:100%;' required>
                            <option disabled selected value=''>Choose a Brand</option>
                            <?php
                            while ($row = $result->fetch_array()){
                                echo "<option value='$row[brand_id]'>$row[brand_name]</option>\n\t\t\t\t\t\t\t";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="product_desc">Product Description</label></td>
                    <td><textarea style='width:100%;' name='product_desc' id='product_desc'rows='4' required placeholder="Enter a brief description of the product here."></textarea></td>
                </tr>
                <tr>
                    <td><label for="model_number">Model Number</label></td>
                    <td><input style='width:100%;' type="text" name='model_number' id='model_number' required placeholder="Enter the Unique Sequence this model has been named."></td>
                </tr>
                <tr>
                    <td><label for="model_name">Model Name</label></td>
                    <td><input style='width:100%;' type="text" name='model_name' id='model_name' required placeholder="Enter Name of this Product. (exclude the brand name)."></td>
                </tr>
                <tr>
                    <td><label for="model_color">Model Color</label></td>
                    <td><input style='width:100%;' type="text" name='model_color' id='model_color' required placeholder="Enter the color this model comes with.(Hazel, Purple, Onyx Black, etc)"></td>
                </tr>
                <tr>
                    <td><label for="display_size">Display Size</label></td>
                    <td><input style='width:100%;' type="number" step='any' name='display_size' id='display_size' required placeholder="Enter the size of the screen in cms(centi-metres)."></td>
                </tr>
                <tr>
                    <td><label for="display_resolution">Display resolution</label></td>
                    <td><input style='width:100%;' type="text" name='display_resolution' id='display_resolution' required placeholder="Resolution in this format(1680 x 1080)"></td>
                </tr>
                <tr>
                    <td><label for="operating_system">Operating System</label></td>
                    <td><input style='width:100%;' type="text" name='operating_system' id='operating_system' required placeholder="Enter the Operatin System this products works on."></td>
                </tr>
                <tr>
                    <td><label for="processor">Processor</label></td>
                    <td><input style='width:100%;' type="text" name='processor' id='processor' required placeholder="Enter the processor this device is equipped with.(ex. Qualcomm Snapdragon 666)"></td>
                </tr>
                <tr>
                    <td><label for="internal_storage">Internal Storage</label></td>
                    <td><input style='width:100%;' type="number" step='any' name='internal_storage' id='internal_storage' required placeholder="Enter the Internal Storage this device has in GB."></td>
                </tr>
                <tr>
                    <td><label for="ram">RAM</label></td>
                    <td><input style='width:100%;' type="number" step='any' name='ram' id='ram' required placeholder="Enter the RAM this device possesses in GB."></td>
                </tr>
                <tr>
                    <td><label for="memory_card_available">Memory Card Available</label></td>
                    <td><input style='width:100%;' type="text" name='memory_card_available' id='memory_card_available' required placeholder="Enter the type of Memory Card slot."></td>
                </tr>
                <tr>
                    <td><label for="primary_camera">Primary Camera</label></td>
                    <td><input style='width:100%;' type="text" name='primary_camera' id='primary_camera' required placeholder="ex. 2MP + 8MP + 16MP"></td>
                </tr>
                <tr>
                    <td><label for="secondary_camera">Secondary Camera</label></td>
                    <td><input style='width:100%;' type="text" name='secondary_camera' id='secondary_camera' required placeholder="ex. 2MP + 8MP + 16MP"></td>
                </tr>
                <tr>
                    <td><label for="network_type">Network Type</label></td>
                    <td><input style='width:100%;' type="text" name='network_type' id='network_type' required placeholder="Enter the Type of Network this device works on."></td>
                </tr>
                <tr>
                    <td><label for="battery_capacity">Battery Capacity</label></td>
                    <td><input style='width:100%;' type="number" step='any' name='battery_capacity' id='battery_capacity' required placeholder="Enter the Capacity of Battery in mAh."></td>
                </tr>
                <tr>
                    <td><label for="mobile_width">Mobile Width</label></td>
                    <td><input style='width:100%;' type="number" step='any' name='mobile_width' id='mobile_width' required placeholder="Enter the width of the device in cms(centi-metres)."></td>
                </tr>
                <tr>
                    <td><label for="mobile_depth">Mobile Depth</label></td>
                    <td><input style='width:100%;' type="number" step='any' name='mobile_depth' id='mobile_depth' required placeholder="Enter the depth/thickness of the device in cms(centi-metres)."></td>
                </tr>
                <tr>
                    <td><label for="mobile_weight">Mobile Weight</label></td>
                    <td><input style='width:100%;' type="number" step='any' name='mobile_weight' id='mobile_weight' required placeholder="Enter the weight of the device in gms(grams)."></td>
                </tr>
                <tr>
                    <td><label for="mobile_price">Mobile Price</label></td>
                    <td><input style='width:100%;' type="number" step='any' name='mobile_price' id='mobile_price' required placeholder="Enter the MRP of the device in Rs."></td>
                </tr>
                <tr>
                    <td><label for="mobile_availablity">Mobile Availablity</label></td>
                    <td><input style='width:100%;' type="number" step='any' name='mobile_availablity' id='mobile_availablity' required placeholder="Enter the Available number of this item in stock(Any number between 1 and 99)."></td>
                </tr>
                <tr>
                    <td><label for="complete">Complete</label></td>
                    <td><input style='width:100%;' type="submit" name='product_done' id='product_done' value='Commit'></td>
                </tr>
            </tbody>
        </table>
    </form>

    <form name='brand_inserter' id='brand_inserter' method='GET' action="data_inserted.php" hidden><h1 align='center'>Add Brand</h1>
        <table align='center'>
            <tbody>
                <tr>
                    <td><select style='width:100%;'>
                        <option disabled selected value="">brands already present</option>
                        <?php
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_array()){
                                echo "<option value='$row[brand_id]'>$row[brand_name]</option>\n\t\t\t\t\t\t";
                            }
                        ?>
                    </select></td>
                    <td>
                            <input style='width:100%;' type='text' id='new_brand' name='new_brand' placeholder="new brand name" required>
                    </td>
                    <tr>
                            <td>Confirm?</td>
                            <td><input style='width:100%;' type='submit' id='brand_done' name='brand_done' value='Commit'></td>
                    </tr>
                </tr>
            </tbody>
        </table>
    </form>

</body>

<script>
    function form_toggle(){
        if (document.getElementById('product_inserter').hidden != true){
            document.getElementById('product_inserter').hidden = true;
            document.getElementById('brand_inserter').hidden = false;
            document.getElementById('form_toggle').innerHTML = 'Add new Product';
        }
        else{
            document.getElementById('product_inserter').hidden = false;
            document.getElementById('brand_inserter').hidden = true;
            document.getElementById('form_toggle').innerHTML = 'Add new Brand';
        }
    }
</script>
</html>