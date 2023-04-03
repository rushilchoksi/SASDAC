<?php
session_start();
require_once('siteConfig.php');

if (isset($_SESSION['USER_AUTH_VALID'])) {
	if ($_SESSION['USER_AUTH_VALID'] != true) {
		header('Location: login');
	}
}
else {
	header('Location: login');
}

$formData = array();
parse_str($_POST['data'], $formData);

if ($formData['source'] == 'getBillDetails')
{
    $clientID = $formData['clientID'];
    $authHeader = "Authorization: Bearer 6d82549b48a8b079f618ee9c51a6dfb59c7e2196";
    $apiURL = $formData['endpoint'] . "?clientID=" . $clientID;
    
    $fetchBillingDataAPI = curl_init();
    curl_setopt($fetchBillingDataAPI, CURLOPT_URL, $apiURL);
    curl_setopt($fetchBillingDataAPI, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($fetchBillingDataAPI, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authHeader));
    $captureResult = curl_exec($fetchBillingDataAPI);
    curl_close ($fetchBillingDataAPI);
    echo json_encode($captureResult);
}

else if ($formData['source'] == 'parseResumeData')
{
    $clientID = $formData['clientID'];
    $authHeader = "Authorization: Bearer 6d82549b48a8b079f618ee9c51a6dfb59c7e2196";
    $apiURL = $formData['endpoint'] . "?filePath=" . $clientID;
    
    $fetchBillingDataAPI = curl_init();
    curl_setopt($fetchBillingDataAPI, CURLOPT_URL, $apiURL);
    curl_setopt($fetchBillingDataAPI, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($fetchBillingDataAPI, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authHeader));
    $captureResult = curl_exec($fetchBillingDataAPI);
    curl_close ($fetchBillingDataAPI);
    echo json_encode($captureResult);   
}

else if ($formData['source'] == 'parseRawData')
{
    $clientID = $formData['clientID'];
    $authHeader = "Authorization: Bearer 6d82549b48a8b079f618ee9c51a6dfb59c7e2196";
    $apiURL = $formData['endpoint'] . "?filePath=" . $clientID;
    
    $fetchBillingDataAPI = curl_init();
    curl_setopt($fetchBillingDataAPI, CURLOPT_URL, $apiURL);
    curl_setopt($fetchBillingDataAPI, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($fetchBillingDataAPI, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authHeader));
    $captureResult = curl_exec($fetchBillingDataAPI);
    curl_close ($fetchBillingDataAPI);
    echo json_encode($captureResult);   
}

?>