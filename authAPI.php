<?php
session_start();
require_once('siteConfig.php');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['authToken'])) {
        if (str_replace('=', '', $_GET['authToken']) === str_replace('=', '', base64_encode($AES_PRIMARY_ENCRYPTION_PASSPHRASE))) {
            if (isset($_SESSION['USER_AUTH_VALID'])) {
                if ($_SESSION['USER_AUTH_VALID'] != true) {
                    $authStatus = false;
                }
                else {
                    $authStatus = true;
                }
            }
            else {
                $authStatus = false;
            }
            echo json_encode(['success' => true, 'authStatus' => $authStatus], true);
        }
        else {
            echo json_encode(['success' => false]);
            header('HTTP/1.1 404 Not Found', true, 404);
        }
    }
    else {
        echo json_encode(['success' => false]);
        header('HTTP/1.1 404 Not Found', true, 404);
    }
}
else {
    echo json_encode(['success' => false]);
    header('HTTP/1.1 404 Not Found', true, 404);
}
?>