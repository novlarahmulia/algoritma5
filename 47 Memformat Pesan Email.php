$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

$message = "<html><body>";
$message .= "<p>Pesan:</p>";
$message .= "<p>" . nl2br(htmlspecialchars($message)) . "</p>";
$message .= "</body></html>";

// Fungsi mail() seperti contoh sebelumnya.
