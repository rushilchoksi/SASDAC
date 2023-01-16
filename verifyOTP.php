<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
require_once('siteConfig.php');

$decryptionKey = $_SESSION['CONFIRM_PRIVATE_KEY'];
$encryptedString = $_POST['data'];

$res = openssl_get_privatekey($decryptionKey);
openssl_private_decrypt(base64_decode($encryptedString), $decryptedData, $res);

$formData = array();
parse_str($decryptedData, $formData);

echo " :: " . $_SESSION['USER_NAME'];
$encryptedCode = base64_decode($formData['code']);
$actualOTP = openssl_decrypt($encryptedCode, $AES_ENCRYPTION_ALG, $AES_ENCRYPTION_PASSPHRASE, $AES_ENCRYPTION_OPTION);
if ($actualOTP == $_SESSION['EMAIL_VERIFICATION_OTP'])
    $_SESSION['EMAIL_VERIFICATION_OTP_VALID'] = true;
else   
    $_SESSION['EMAIL_VERIFICATION_OTP_VALID'] = false;
?>