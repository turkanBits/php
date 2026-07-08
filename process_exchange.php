<?php

$data =json_decode (  file_get_contents("php://input"),  true   );


$amount     =$data['amount'];
$currency   =$data['currency'];

