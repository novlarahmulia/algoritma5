<?php
// Mengatur expiry time ke satu jam yang lalu
setcookie("user", "", time() - 3600);
