<?php
require __DIR__.'/vendor/autoload.php';
require ("Users.php");
require ("Product.php");

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
//This assumes that you have placed the Firebase credentials in the same directory
//as this PHP file.
// $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/research-project-dc-0c3ba7f477ae.json');
// $firebase = (new Factory)
//    ->withServiceAccount($serviceAccount)
//    ->withDatabaseUri('https://research-project-dc.firebaseio.com')
//    ->create();
// $database = $firebase->getDatabase();


$product = new Product();
$product->setAvailability("yes");
$product->setDescription("Men t-shirt");
$product->setName("T-Shirt");
// $newProduct = (array)$product->jsonSerialize();
$product->insert($product);

// var_dump($product->get("availability"));





// var_dump($users->get(1));

// $response["products"] = array();
 
//         // temp user array
//         $product = array();
//       //   $product["pid"] = $row["pid"];
//         $product["name"] = $users->get(1);
//       //   $product["price"] = $row["price"];
//       //   $product["created_at"] = $row["created_at"];
//       //   $product["updated_at"] = $row["updated_at"];
 
//         // push single product into final response array
//         array_push($response["products"], $product);
//     // success
//     $response["success"] = 1;
 
//     // echoing JSON response
//     echo json_encode($response);


?>