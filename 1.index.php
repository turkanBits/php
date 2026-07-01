<?php



$url = "https://api.example.com/protected-data";

$token = "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiIxMjM0NSIsImV4cCI6MTc4MjkzNTc2MH0.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,                   $url     );
curl_setopt($ch, CURLOPT_RETURNTRANSFER,        true     );
curl_setopt($ch, CURLOPT_HTTPHEADER,             [

        "Autohorization : $token",
        "Content-Type:application/json"

    ]);

$response = curl_exec($ch);

$data = json_decode($response, true);

curl_close($ch);