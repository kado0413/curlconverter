<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:9000');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_PROXY, 'http://localhost:8080');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'anonymous:anonymous');

$response = curl_exec($ch);

curl_close($ch);
