<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
header("Content-Type: binary/octet-stream");
require_once('siteConfig.php');
require_once('vendor/autoload.php');

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

if (isset($_SESSION['USER_AUTH_VALID'])) {
	if ($_SESSION['USER_AUTH_VALID'] != true) {
		header('Location: login');
	}
}
else {
	header('Location: login');
}

if (isset($_GET['fileName'])) {
    $fileName = urldecode(base64_decode($_GET['fileName']));
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($fileName) . "\";");
	header('Content-Length: ' . filesize($SHARED_DIRECTORY_PATH . "/" . $fileName));
    readfile($SHARED_DIRECTORY_PATH . "/" . $fileName);
}
else {
    echo "You are not authorized to access this resource.";
    die();
}
?>