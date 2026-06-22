<?php

// DOM ve NODE

 
class MenuManager 
{

   private $dom;
   private $menu;

   public function __construct($filePath) {


      $this->dom=new DOMDocument();
      $this->dom->load($filePath);
      $this->menu=$this->dom->getElementsBYTagName("menu")->item(0);
 
    //  echo "<pre>";
    //       print_r($this->menu->item(0)  );
    //   echo "</pre>";     

   }

   public function addDish($name,$price) {

      $dish=$this->dom->createElement("dish");

      $nameElement=$this->dom->createElement("name",$name);
      $priceElement=$this->dom->createElement("price",$price);

      $dish->appendChild($nameElement);
      $dish->appendChild($priceElement);

      $this->menu->appendChild($dish);

      $this->dom->save("menu.xml");

     

   }

}

$menuManager=new MenuManager("menu.xml");
$menuManager->addDish("Burger","8.99");


// echo "Yeni yemek menyusu elave edilir";



































// class ApiResponse
// {
//     private $statusCode;
//     private $headers=[];
//     private $data;

//     public function __construct(int $statusCode=200)
//     {
//         $this->statusCode=$statusCode;
//     }

//     public function addHeader(string $key,string $value) {
//       $this->headers[]="$key:$value";

//       // echo "<pre>";
//       // print_r($this->headers);
//       // echo "</pre>";

//     }

//     public function setData(array $data) {
//       $this->data=$data;
//     }

//     public function send() {

//         http_response_code($this->statusCode);

//         foreach ($this->headers as $header) {
//           echo "<pre>";
//             print_r($header);
//           echo "</pre>";  
//         }

//     }
// }

 
// $response =new ApiResponse();

// $response->addHeader('Content-Type','application/json');
// $response->addHeader('Cache-Control','no-cache');



// $data=[
//   'succes'=>true,
//   'message'=>'Melumat ugurla elde edildi',
//   'data'=> [
//     [
//           "id"=> 1,
//           "name"=> "Telefon",
//           "price"=> 1000,
//           "stock"=> 50
//     ],
//     [
//           "id"=> 2,
//           "name"=> "Laptop",
//           "price"=> 2000,
//           "stock"=> 20
//     ]

// ]

//     ];

//     $response->setData($data);

//     $response->send();