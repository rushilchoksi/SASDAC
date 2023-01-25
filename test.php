<?php
// $wasItSecure = true;
// $iv = openssl_random_pseudo_bytes(32, $wasItSecure);
// if ($wasItSecure) {
//     // We're good to go!
// } else {
//     // Insecure result. Fail closed, do not proceed.
// }

// $data = 'Rushil Choksi';
// echo str_replace('=', '', base64_encode(openssl_encrypt($data, 'AES-256-XTS', 'JaNdRgUkXn2r5u8x/A?D(G+KbPeShVmYq3s6v9y$B&E)H@McQfTjWnZr4u7w!z%C*F-JaNdRgUkXp2s5v8y/A?D(G+KbPeShVmYq', OPENSSL_RAW_DATA, $iv)));
function getMessageID($data = null) {
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4)) . '@' . $_SERVER['SERVER_NAME'];
}
echo getMessageID();
?>
