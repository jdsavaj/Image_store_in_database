<?php
if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["image"]["tmp_name"]);
	if ($check !== false) {
		$image = $_FILES['image']['tmp_name'];
		$name = $_FILES['image']['name'];
		$size = $_FILES['image']['size'];
		$type = $_FILES['image']['type'];
		$imgContent = addslashes(file_get_contents($image));
		$dbHost = 'localhost';
		$dbUsername = 'root';
		$dbPassword = '';
		$dbName = 'img_store_in_db';

		//Create connection and select DB
		$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

		// Check connection
		if ($db->connect_error) {
			die("Connection failed: " . $db->connect_error);
		}

		//$dataTime = date("Y-m-d H:i:s");

		//Insert image content into database
		// $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
		$insert = $db->query("INSERT into images (name,size,type,image) VALUES ('$name','$size','$type','$imgContent')");
		if ($insert) {
			echo "File uploaded successfully.";
		} else {
			echo "File upload failed, please try again.";
		}
	} else {
		echo "Please select an image file to upload.";
	}
}
?>