<!-- filepath: /Users/ashleymartinez/Desktop/html5up-alpha/send_sms.php -->
<?php
if (mail($to, $subject, $body, $headers)) {
    http_response_code(200);
    echo "Success";
} else {
    http_response_code(500);
    echo "Error";
}