<!DOCTYPE html>
<html>

<head>
	<title>
		Select and upload multiple
		files to the server
	</title>
</head>

<body>

	<!-- multipart/form-data ensures that form
	data is going to be encoded as MIME data -->
	<form action="../admin-modules/upload-multiple.php" method="POST" enctype="multipart/form-data">

		<h2>Upload Files</h2>
		
		<p>
			Select files to upload:
			
			<!-- name of the input fields are going to
				be used in our php script-->
			<input type="file" name="files[]" multiple>
            <input type="text" name="brand_name" placeholder="Brand name">
            <input type="text" name="model_name" placeholder="Model name">
			
			<br><br>
			
			<input type="submit" name="submit" value="Upload" >
		</p>
	</form>
</body>

</html>					
