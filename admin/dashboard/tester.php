<!DOCTYPE html>
<html>
<body>

<form action="../admin-modules/upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload[]" id="fileToUpload" multiple>
  <input type="text" id="brand_name" name="brand_name" placeholder="brand">
  <input type="text" id="model_name" name="model_name">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>