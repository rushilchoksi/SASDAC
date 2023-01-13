<?php
session_start();

$decryptionKey = $_SESSION['REGISTER_PRIVATE_KEY'];
$encryptedString = $_POST['data'];

$res = openssl_get_privatekey($decryptionKey);
openssl_private_decrypt(base64_decode($encryptedString), $decryptedData, $res);
echo $decryptionKey . "\n::\n" . $decryptedData;

$formData = array();
parse_str($decryptedData, $formData);
var_dump($formData);
?>