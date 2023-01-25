<?php
/* GLOBAL VARIABLES */
$TITLE_NAME = 'IBM Project';

/* DATABASE VARIABLES */
$DB_HOSTNAME = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'ibm';

/* ENCRYPTION VARIABLES */
$RSA_DIGEST_ALG = 'SHA256';
$RSA_KEY_BITS = 4096;
$RSA_KEY_TYPE = OPENSSL_KEYTYPE_RSA;

$AES_ENCRYPTION_ALG = 'AES-256-XTS';
$AES_ENCRYPTION_PASSPHRASE = 'v9y$B&E(H+MbQeThWmZq4t7w!z%C*F-J@NcRfUjXn2r5u8x/A?D(G+KbPdSg';
$AES_ENCRYPTION_OPTION = OPENSSL_RAW_DATA;

$AES_PRIMARY_ENCRYPTION_ALG = 'AES-256-CTR';
$AES_PRIMARY_ENCRYPTION_PASSPHRASE = 'JaNdRgUkXn2r5u8x/A?D(G+KbPeShVmYq3s6v9y$B&E)H@McQfTjWnZr4u7w!z%C*F-JaNdRgUkXp2s5v8y/A?D(G+KbPeShVmYq';
$AES_PRIMARY_ENCRYPTION_OPTION = OPENSSL_RAW_DATA;

/* EMAIL CREDENTIALS */
$EMAIL_HOSTNAME = 'smtp.gmail.com';
$EMAIL_PORT = 465;
$EMAIL_USERNAME = 'ibm.project.soc@gmail.com';
$EMAIL_APP_PASSWORD = 'mdktbxgxcslyrzno';

/* ENCRYPT DATA */
function encryptData($inputString, $initVector){
    return str_replace('=', '', base64_encode(openssl_encrypt($inputString, 'AES-256-CTR', 'JaNdRgUkXn2r5u8x/A?D(G+KbPeShVmYq3s6v9y$B&E)H@McQfTjWnZr4u7w!z%C*F-JaNdRgUkXp2s5v8y/A?D(G+KbPeShVmYq', OPENSSL_RAW_DATA, $initVector)));
}

/* GENERATE MESSAGE ID */
function getMessageID($msgID = null) {
    $msgID = $msgID ?? random_bytes(16);
    assert(strlen($msgID) == 16);
    $msgID[6] = chr(ord($msgID[6]) & 0x0f | 0x40);
    $msgID[8] = chr(ord($msgID[8]) & 0x3f | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($msgID), 4)) . '@' . $_SERVER['SERVER_NAME'];
}

/* SITE HEADER & FOOTER */
function getAuthHeader(){
    echo '<div data-w-id="d60ddca1-d07c-112f-3c2f-794a5c0af801" data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="header-wrapper v2 w-nav">
                <div class="container-default w-container">
                    <div class="header-content-wrapper">
                        <div class="header-middle center---tablet">
                            <a href="index.html" class="header-logo-link w-nav-brand">
                                <img src="https://assets.website-files.com/63619a386216ae681d93409b/6361ced8050220282fb340e9_logo-dataplus-template.svg" class="header-logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
';
}
function getAuthFooter(){
    echo '<footer class="footer-wrapper v2">
					<div class="container-default w-container">
						<div data-w-id="b4234064-9c46-ece5-3a78-23e2b6487e92" class="footer-bottom text-right text-center---tablet v2">
							<div class="w-layout-grid footer-bottom---grid">
								<a id="w-node-b4234064-9c46-ece5-3a78-23e2b6487e94-b6487e90" href="index.html" class="footer-logo-wrapper mg-bottom-0 w-inline-block">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6361ced8050220282fb340e9_logo-dataplus-template.svg" class="footer-logo" />
								</a>
								<p class="mg-bottom-0">IBM Project</p>
							</div>
						</div>
					</div>
				</footer>
';
}
?>