<?php
session_start();
require_once('siteConfig.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require('Exception.php');
require('PHPMailer.php');
require('SMTP.php');

if (isset($_SESSION['USER_AUTH_VALID'])) {
	if ($_SESSION['USER_AUTH_VALID'] != true) {
		header('Location: login');
	}
}
else {
	header('Location: login');
}

$endpointSources = array('parseResumeData', 'parseRawPDF', 'parseOCRData');
$formData = array();
parse_str($_POST['data'], $formData);

if ($formData['source'] == 'getBillDetails')
{
    if (isset($_COOKIE['params']))
        $otherParameters = $_COOKIE['params'];
    $clientID = $formData['clientID'];
    $authHeader = "Authorization: Bearer 6d82549b48a8b079f618ee9c51a6dfb59c7e2196";
    if (isset($_COOKIE['params']))
        $apiURL = $formData['endpoint'] . "?clientID=" . $clientID . '&otherParams=' . $otherParameters;
    else
        $apiURL = $formData['endpoint'] . "?clientID=" . $clientID;
    
    $fetchBillingDataAPI = curl_init();
    curl_setopt($fetchBillingDataAPI, CURLOPT_URL, $apiURL);
    curl_setopt($fetchBillingDataAPI, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($fetchBillingDataAPI, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authHeader));
    $captureResult = curl_exec($fetchBillingDataAPI);
    curl_close ($fetchBillingDataAPI);
    echo json_encode($captureResult);

    // Send notification mail to end-user
    $endpointURL = $SERVE_S3_FILE_ENDPOINT . base64_encode(urlencode(json_decode($captureResult, true)['S3FileName']));
    $messageID = getMessageID();
    $notificationMail = new PHPMailer;
    $notificationMail->CharSet = 'utf-8';
    $notificationMail->IsSMTP();
    $notificationMail->SMTPDebug = 0;
    $notificationMail->SMTPAuth = true;
    $notificationMail->SMTPSecure = 'ssl';
    $notificationMail->Host = $EMAIL_HOSTNAME;
    $notificationMail->Port = $EMAIL_PORT;
    $notificationMail->IsHTML(true);
    $notificationMail->Username = $EMAIL_USERNAME;
    $notificationMail->Password = $EMAIL_APP_PASSWORD;
    $notificationMail->From = $EMAIL_USERNAME;
    $notificationMail->FromName = $TITLE_NAME;
    $notificationMail->MessageID = $messageID;
    $notificationMail->Subject = '[' . $TITLE_NAME . '] JSON Available on S3';
    $notificationMail->Body = '<!DOCTYPE html><html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml"><head><title></title><meta content="text/html; charset=utf-8" http-equiv="Content-Type"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><style>@import url(\'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap\');*{box-sizing: border-box;font-family: \'IBM Plex Sans\', sans-serif;}body{margin: 0;padding: 0;}a[x-apple-data-detectors]{color: inherit !important;text-decoration: inherit !important;}#MessageViewBody a{color: inherit;text-decoration: none;}p{line-height: inherit}.desktop_hide,.desktop_hide table{mso-hide: all;display: none;max-height: 0px;overflow: hidden;}@media (max-width:520px){.desktop_hide table.icons-inner{display: inline-block !important;}.icons-inner{text-align: center;}.icons-inner td{margin: 0 auto;}.row-content{width: 100% !important;}.mobile_hide{display: none;}.stack .column{width: 100%;display: block;}.mobile_hide{min-height: 0;max-height: 0;max-width: 0;overflow: hidden;font-size: 0px;}.desktop_hide,.desktop_hide table{display: table !important;max-height: none !important;}}</style></head><body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;"><table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; background-color: #FFFFFF; width: 500px;" width="500"><tbody><tr><td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%"><table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:30px;"><div align="center" class="alignment" style="line-height:10px"><img src="https://i.ibb.co/f1zWrpY/sasdac.png" style="display: block; height: auto; border: 0; width: 151px; max-width: 100%;" width="151"/></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" class="divider_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:40px;"><div align="center" class="alignment"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #144ee3;"><span></span></td></tr></table></div></td></tr></table></td></tr></tbody></table></td></tr></tbody></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; border-radius: 0; color: #000000; width: 500px;" width="500"><tbody><tr><td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%"><table border="0" cellpadding="0" cellspacing="0" class="heading_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="pad" style="text-align:center;width:100%;padding-top:30px;"><h1 style="margin: 0; color: #0b101b; direction: ltr; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 20px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Hey ' . $_SESSION['USER_NAME'] . '</span></h1></td></tr></table><table border="0" cellpadding="0" cellspacing="0" class="paragraph_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%"><tr><td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:40px;"><div style="color:#0b101b;direction:ltr;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:16.8px;"><p style="margin: 0; margin-bottom: 16px;">We are pleased to inform you that the file you requested is now available for download. You can access the file by clicking on the following button. We have worked diligently to ensure that the file is securely stored and easily accessible for your convenience. Our system has automatically generated this message to let you know that the file is ready for download.</p><p style="margin: 0; margin-bottom: 16px;"></p><p style="margin: 0;"></p></div></td></tr></table><table border="0" cellpadding="10" cellspacing="0" class="button_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="pad"><div align="center" class="alignment"><div style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#144ee3;border-radius:4px;width:auto;border-top:0px solid transparent;font-weight:400;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent;padding-top:5px;padding-bottom:5px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:14px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:20px;padding-right:20px;font-size:14px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 28px;"><a href="' . $endpointURL . '" style="text-decoration: none; color: white;">DOWNLOAD FILE</a></span></span></div></div></td></tr></table><table border="0" cellpadding="10" cellspacing="0" class="paragraph_block block-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%"><tr><td class="pad"><div style="color:#0b101b;direction:ltr;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:16.8px;"><p style="margin: 0; margin-bottom: 16px;"></p><p style="margin: 0; margin-bottom: 16px;">The content of this email is classified as confidential and intended for the recipient specified in the message only. If you received this message by mistake, please reply to it or mail us at  <a href="mailto:security@sasdac.in" rel="noopener" style="text-decoration: none; color: #144ee3;" target="_blank" title="security@sasdac.in">security@sasdac.in</a> and follow up with its deletion so that we can ensure such an error does not occur in the future. </p><p style="margin: 0; margin-bottom: 16px;"></p><p style="margin: 0;">~ ' . $TITLE_NAME . ' Security team</p></div></td></tr></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body></html>';
    $notificationMail->AddAddress($_SESSION['USER_EMAIL'], $_SESSION['USER_NAME']);
    // $notificationMail->addCC('jeetmaniar19@gnu.ac.in', 'Jeet Maniar');
    $notificationMail->Send();

    // Encrypt email data prior to log creation
    $emailIV = openssl_random_pseudo_bytes(16);
    $emailEncIV = str_replace('==', '', base64_encode($emailIV));
    $encMessageID = encryptData($messageID, $emailIV);
    $encRecipientName = encryptData($_SESSION['USER_NAME'], $emailIV);
    $encSubject = encryptData('[' . $TITLE_NAME . '] JSON Available on S3', $emailIV);
    $encVerificationOTP = encryptData('NA', $emailIV);
    $encTimeStamp = encryptData(date('Y-m-d h:i:s'), $emailIV);

    // Insert encrypted email log to MySQL database
    $DB_CONNECTION = new mysqli($DB_HOSTNAME, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    $updateUserAccount = $DB_CONNECTION->prepare("INSERT INTO `emails` (`IV`, `messageID`, `recipientName`, `emailSubject`, `emailCode`, `TimeStamp`) VALUES (?, ?, ?, ?, ?, ?)");
    $updateUserAccount->bind_param("ssssss", $emailEncIV, $encMessageID, $encRecipientName, $encSubject, $encVerificationOTP, $encTimeStamp);
    $updateUserAccount->execute();
    
    unset($_COOKIE['params']);
    setcookie('params', null, -1, '/'); 
}

else if (in_array($_SESSION['source'], $endpointSources))
{
    if (isset($_COOKIE['params']))
        $otherParameters = $_COOKIE['params'];
    $targetFile = $SHARED_DIRECTORY_PATH . "/" . str_replace(" ", "_", basename($_FILES["filePath"]["name"]));
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["filePath"]["tmp_name"], $targetFile))
    {
        $clientID = $formData['clientID'];
        $authHeader = "Authorization: Bearer 6d82549b48a8b079f618ee9c51a6dfb59c7e2196";
        if (isset($_COOKIE['params']))
            $apiURL = $_SESSION['endpoint'] . "?filePath=" . $targetFile . '&otherParams=' . $otherParameters;
        else
            $apiURL = $_SESSION['endpoint'] . "?filePath=" . $targetFile;
        
        $fetchBillingDataAPI = curl_init();
        curl_setopt($fetchBillingDataAPI, CURLOPT_URL, $apiURL);
        curl_setopt($fetchBillingDataAPI, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($fetchBillingDataAPI, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authHeader));
        $captureResult = curl_exec($fetchBillingDataAPI);
        curl_close ($fetchBillingDataAPI);
        echo json_encode($captureResult);   

        // Send notification mail to end-user
        $endpointURL = $SERVE_S3_FILE_ENDPOINT . base64_encode(urlencode(json_decode($captureResult, true)['S3FileName']));
        $messageID = getMessageID();
        $notificationMail = new PHPMailer;
        $notificationMail->CharSet = 'utf-8';
        $notificationMail->IsSMTP();
        $notificationMail->SMTPDebug = 0;
        $notificationMail->SMTPAuth = true;
        $notificationMail->SMTPSecure = 'ssl';
        $notificationMail->Host = $EMAIL_HOSTNAME;
        $notificationMail->Port = $EMAIL_PORT;
        $notificationMail->IsHTML(true);
        $notificationMail->Username = $EMAIL_USERNAME;
        $notificationMail->Password = $EMAIL_APP_PASSWORD;
        $notificationMail->From = $EMAIL_USERNAME;
        $notificationMail->FromName = $TITLE_NAME;
        $notificationMail->MessageID = $messageID;
        $notificationMail->Subject = '[' . $TITLE_NAME . '] JSON Available on S3';
        $notificationMail->Body = '<!DOCTYPE html><html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml"><head><title></title><meta content="text/html; charset=utf-8" http-equiv="Content-Type"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><style>@import url(\'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap\');*{box-sizing: border-box;font-family: \'IBM Plex Sans\', sans-serif;}body{margin: 0;padding: 0;}a[x-apple-data-detectors]{color: inherit !important;text-decoration: inherit !important;}#MessageViewBody a{color: inherit;text-decoration: none;}p{line-height: inherit}.desktop_hide,.desktop_hide table{mso-hide: all;display: none;max-height: 0px;overflow: hidden;}@media (max-width:520px){.desktop_hide table.icons-inner{display: inline-block !important;}.icons-inner{text-align: center;}.icons-inner td{margin: 0 auto;}.row-content{width: 100% !important;}.mobile_hide{display: none;}.stack .column{width: 100%;display: block;}.mobile_hide{min-height: 0;max-height: 0;max-width: 0;overflow: hidden;font-size: 0px;}.desktop_hide,.desktop_hide table{display: table !important;max-height: none !important;}}</style></head><body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;"><table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; background-color: #FFFFFF; width: 500px;" width="500"><tbody><tr><td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%"><table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:30px;"><div align="center" class="alignment" style="line-height:10px"><img src="https://i.ibb.co/f1zWrpY/sasdac.png" style="display: block; height: auto; border: 0; width: 151px; max-width: 100%;" width="151"/></div></td></tr></table><table border="0" cellpadding="0" cellspacing="0" class="divider_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:40px;"><div align="center" class="alignment"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #144ee3;"><span></span></td></tr></table></div></td></tr></table></td></tr></tbody></table></td></tr></tbody></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%"><tbody><tr><td><table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; border-radius: 0; color: #000000; width: 500px;" width="500"><tbody><tr><td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%"><table border="0" cellpadding="0" cellspacing="0" class="heading_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="pad" style="text-align:center;width:100%;padding-top:30px;"><h1 style="margin: 0; color: #0b101b; direction: ltr; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 20px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Hey ' . $_SESSION['USER_NAME'] . '</span></h1></td></tr></table><table border="0" cellpadding="0" cellspacing="0" class="paragraph_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%"><tr><td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:40px;"><div style="color:#0b101b;direction:ltr;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:16.8px;"><p style="margin: 0; margin-bottom: 16px;">We are pleased to inform you that the file you requested is now available for download. You can access the file by clicking on the following button. We have worked diligently to ensure that the file is securely stored and easily accessible for your convenience. Our system has automatically generated this message to let you know that the file is ready for download.</p><p style="margin: 0; margin-bottom: 16px;"></p><p style="margin: 0;"></p></div></td></tr></table><table border="0" cellpadding="10" cellspacing="0" class="button_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%"><tr><td class="pad"><div align="center" class="alignment"><div style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#144ee3;border-radius:4px;width:auto;border-top:0px solid transparent;font-weight:400;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent;padding-top:5px;padding-bottom:5px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:14px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:20px;padding-right:20px;font-size:14px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 28px;"><a href="' . $endpointURL . '" style="text-decoration: none; color: white;">DOWNLOAD FILE</a></span></span></div></div></td></tr></table><table border="0" cellpadding="10" cellspacing="0" class="paragraph_block block-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%"><tr><td class="pad"><div style="color:#0b101b;direction:ltr;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:16.8px;"><p style="margin: 0; margin-bottom: 16px;"></p><p style="margin: 0; margin-bottom: 16px;">The content of this email is classified as confidential and intended for the recipient specified in the message only. If you received this message by mistake, please reply to it or mail us at  <a href="mailto:security@sasdac.in" rel="noopener" style="text-decoration: none; color: #144ee3;" target="_blank" title="security@sasdac.in">security@sasdac.in</a> and follow up with its deletion so that we can ensure such an error does not occur in the future. </p><p style="margin: 0; margin-bottom: 16px;"></p><p style="margin: 0;">~ ' . $TITLE_NAME . ' Security team</p></div></td></tr></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body></html>';
        $notificationMail->AddAddress($_SESSION['USER_EMAIL'], $_SESSION['USER_NAME']);
        // $notificationMail->addCC('jeetmaniar19@gnu.ac.in', 'Jeet Maniar');
        $notificationMail->Send();

        // Encrypt email data prior to log creation
        $emailIV = openssl_random_pseudo_bytes(16);
        $emailEncIV = str_replace('==', '', base64_encode($emailIV));
        $encMessageID = encryptData($messageID, $emailIV);
        $encRecipientName = encryptData($_SESSION['USER_NAME'], $emailIV);
        $encSubject = encryptData('[' . $TITLE_NAME . '] JSON Available on S3', $emailIV);
        $encVerificationOTP = encryptData('NA', $emailIV);
        $encTimeStamp = encryptData(date('Y-m-d h:i:s'), $emailIV);

        // Insert encrypted email log to MySQL database
        $DB_CONNECTION = new mysqli($DB_HOSTNAME, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
        $updateUserAccount = $DB_CONNECTION->prepare("INSERT INTO `emails` (`IV`, `messageID`, `recipientName`, `emailSubject`, `emailCode`, `TimeStamp`) VALUES (?, ?, ?, ?, ?, ?)");
        $updateUserAccount->bind_param("ssssss", $emailEncIV, $encMessageID, $encRecipientName, $encSubject, $encVerificationOTP, $encTimeStamp);
        $updateUserAccount->execute();
        
        unset($_COOKIE['params']);
        setcookie('params', null, -1, '/'); 
    }
    else 
    {
        echo json_encode(["success" => false, "message" => "Unable to upload the file to the server!"]);
    }
}
?>