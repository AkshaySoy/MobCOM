<?php

if (isset($_POST['addProduct']) ){

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'mobcom';
    $con = mysqli_connect($server, $username, $password, $db);
    $sql = "INSERT INTO `product_master` (product_desc, brand_name, model_name, model_number, model_colour, display_size, display_resolution, operating_system, processor, internal_storage, ram, memory_card_available, primary_camera, secondary_camera, network_type, battery_capacity, mobile_width, mobile_depth, mobile_weight, mobile_price, mobile_availabilty) VALUES( '$_POST[product_desc]', '$_POST[brand_name]' , '$_POST[model_name]', '$_POST[model_number]' , '$_POST[model_colour]', $_POST[display_size], '$_POST[display_resolution]', '$_POST[operating_system]', '$_POST[processor]', $_POST[internal_storage], $_POST[ram], '$_POST[memory_card_available]', '$_POST[primary_camera]', '$_POST[secondary_camera]', '$_POST[network_type]' , $_POST[battery_capacity], $_POST[mobile_width], $_POST[mobile_depth], $_POST[mobile_weight], $_POST[mobile_price], $_POST[mobile_availability] )";
    if ($con) {
        $con->query($sql);
    }
    // Check if form was submited
    if(isset($_POST['addProduct'])) {

        // Configure upload directory and allowed file types
        $upload_dir = 'E:/xampp/htdocs/mobcom/images/';
        $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
        
        // Define maxsize for files i.e 2MB
        $maxsize = 2 * 1024 * 1024;
        
        // Create brand directory if it does not exist
        if(!is_dir("$upload_dir"."$_POST[brand_name]/")) {
            mkdir("$upload_dir"."$_POST[brand_name]/");
        }
        // Create product directory if it does not exist
        if(!is_dir("$upload_dir"."$_POST[brand_name]/$_POST[model_name]/")) {
            mkdir("$upload_dir"."$_POST[brand_name]/$_POST[model_name]/");
        }
        $upload_dir .= "$_POST[brand_name]/$_POST[model_name]/";
        // Checks if user sent an empty form
        if(!empty(array_filter($_FILES['files']['name']))) {

            // Loop through each file in files[] array
            foreach ($_FILES['files']['tmp_name'] as $key => $value) {
                
                $file_tmpname = $_FILES['files']['tmp_name'][$key];
                $file_name = $key + 1;
                $file_name = $file_name . ".jpg";
                $file_size = $_FILES['files']['size'][$key];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

                // Set upload file path
                $filepath = $upload_dir.$file_name;

                // Check file type is allowed or not
                if(in_array(strtolower($file_ext), $allowed_types)) {

                    // Verify file size - 2MB max
                    if ($file_size > $maxsize)		
                        echo "Error: File size is larger than the allowed limit.";

                    // If file with name already exist then append time in
                    // front of name of the file to avoid overwriting of file
                    if(file_exists($filepath)) {
                        $filepath = $upload_dir.time().$file_name;
                        
                        if( move_uploaded_file($file_tmpname, $filepath)) {
                            echo "{$file_name} successfully uploaded <br />";
                        }
                        else {					
                            echo "Error uploading {$file_name} <br />";
                        }
                    }
                    else {
                    
                        if( move_uploaded_file($file_tmpname, $filepath)) {
                            echo "{$file_name} successfully uploaded <br />";
                        }
                        else {					
                            echo "Error uploading {$file_name} <br />";
                        }
                    }
                }
                else {
                    
                    // If file extention not valid
                    echo "Error uploading {$file_name} ";
                    echo "({$file_ext} file type is not allowed)<br / >";
                }
            }
        }
        else {
            
            // If no files selected
            echo "No files selected.";
        }
    }

}

echo "<script>location.replace('../dashboard/products.php')</script>";
?>
