<?php
//print_r($_POST);
//print_r($_FILES);

$name = $_POST['name'];

if (isset($_FILES)) {
	$file_name = $_FILES['fileToUpload']['name']; //Name of the upload
	$temp_file = $_FILES['fileToUpload']['tmp_name']; //File from the temporary
	$upload = "uploads/"; //Folder to be uploaded to
	
	$file_extension = pathinfo($file_name)['extension']; //Gets the file extension
	//uploads/file_to_uploaded.jpg
	$name = strtolower($name);
	$name = str_replace(" ", "-", $name);
	
	/*
	We maintain the name of the file
	*/
	
	//move_uploaded_file($temp_file, $upload /* Folder  */ . $file_name /* File name uploaded */);
	
	
	/* Changes the name of the file uploaded to the server */
	move_uploaded_file($temp_file, $upload /* Folder  */ . $name /* New name of the file */ . "." . /*File extension of the uploaded file */ $file_extension);
	
	echo "<img src='" . $upload . $name . "." . $file_extension  ."' style='width:500px'/>";
}
