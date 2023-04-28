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
	$s3Client = new S3Client([
		'version' => 'latest',
		'region' => 'us-east-1',
		'credentials' => [
			'key' => $AWS_ACCESS_KEY_ID,
			'secret' => $AWS_SECRET_ACCESS_KEY,
		],
	]);
	
	try {
		$result = $s3Client->getObject([
			'Bucket' => $AWS_BUCKET_NAME,
			'Key' => $fileName,
		]);
	
		header("Content-Disposition: attachment; filename = $fileName");
    	echo $result['Body'];
	} catch (S3Exception $e) {
		echo "Error getting file from S3: " . $e->getMessage();
	}
}
else {
    echo "You are not authorized to access this resource.";
    die();
}
?>