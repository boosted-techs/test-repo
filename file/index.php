<!doctype html>
<html>
	<head>
		<title>
			File uploads
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
		<div class="col-md-6 mx-auto mt-4 shadow p-3">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<h4 class="text-center mt-2 mb-2">FILE UPLOAD</h4>
					<label for="name">Your name</label>
					<input type="text" id="name" placeholder="eg @Phionah" name="name" class="form-control mt-2 mb-2"/>
					<label for="file" class="btn btn-info">Select file to upload</label> <br/>
					<input type="file" id="file" class="mt-2 mb-2" name="fileToUpload" style="display:none">
					<button class="btn btn-primary form-control rounded-0 mt-2 mb-2">UPLOAD</button>
				</div>
			</form>
			<button onclick="document.getElementById('demo').innerHTML = Date() ">Click me</button>
			<div id="demo"></div>
		</div>
	</body>
</html>