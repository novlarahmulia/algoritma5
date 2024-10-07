<?php
if (empty($name) || empty($email) || empty($message)) {
    echo "Semua bidang harus diisi.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email tidak valid.";
    exit;
}
?>