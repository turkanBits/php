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

    public function addheader(string $key,string $value) {
      print_r($this->headers);
    }
}


$response =new ApiResponse();

$response->addHeader('turkan','hemide');