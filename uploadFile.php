<?php
session_start();
require('siteConfig.php');

if (isset($_SESSION['USER_AUTH_VALID'])) {
	if ($_SESSION['USER_AUTH_VALID'] != true) {
		header('Location: login');
	}
}
else {
	header('Location: login');
}

$targetDir = "/Applications/XAMPP/xamppfiles/htdocs/ibm/uploads/";
$targetFile = $targetDir . basename($_FILES["filePath"]["name"]);
$uploadAuthorized = 1;
$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

if ($_FILES["filePath"]["size"] > 500000) {
    echo "<br>Sorry, your file is too large.";
    $uploadAuthorized = 0;
}

// Check if $uploadAuthorized is set to 0 by an error
if ($uploadAuthorized == 0) {
  echo "<br>Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  var_dump($_FILES["filePath"]);
  if (move_uploaded_file($_FILES["filePath"]["tmp_name"], $targetFile)) {
    echo "<br>The file ". $targetDir . htmlspecialchars( basename( $_FILES["filePath"]["name"])). " has been uploaded.";
  } else {
    echo "<br>Sorry, there was an error uploading your file.";
  }
}
?>