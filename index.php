<?php
class ApiResponse
{
    private $statusCode;
    private $headers=[];
    private $data;

    public function __construct(int $statusCode=200)
    {
        $this->statusCode=$statusCode;
    }

    public function addHeader(string $key,string $value) {
      $this->headers[]="$key:$value";

      echo "<pre>";
      print_r($this->headers);
      echo "</pre>";

      
    }
}


$response =new ApiResponse();

$response->addHeader('Content-Type','application/json');
$response->addHeader('Cache-Control','no-cache');



// HTTP HEADER