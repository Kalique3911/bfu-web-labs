<?php
$ch = curl_init('https://jsonplaceholder.typicode.com/nonexistent');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode >= 400) {
        echo "HTTP Error: $httpCode";
    } else {
        echo $response;
    }
}
curl_close($ch);
?>