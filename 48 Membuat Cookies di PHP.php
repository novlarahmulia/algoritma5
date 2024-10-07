<?php
// mengatur cookie
$cookie_name = "novla";
$cookie_value = "johndoe";
$cookie_expire = time() + (86400 * 30); // cookie berlaku selama 30 hari
// Membuat cookie yang berlaku selama satu jam
setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // " / " berarti coolie tersedia di seluruh domain
// memeriksa apakah cookie telah di atur
if (!isset($_COOKIE[$cookie_name])) {
    echo "cookie '" . $cookie_name . "' belum diatur!";
} else {
    echo "cookie '" . $cookie_name . "' sudah diaturr!"; 
}
?>