<?php
if(isset($_COOKIE["user"])) {
    echo "Selamat datang " . $_COOKIE["novla"];
} else {
    echo "Selamat datang, novla!";
}
