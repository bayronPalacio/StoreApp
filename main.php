<?php
require __DIR__.'/vendor/autoload.php';

require_once("inc/Classes/Product.php");
require_once("inc/Classes/Customer.php");
require_once("inc/Classes/ProductOrdered.php");
require_once("inc/Classes/Order.php");
require_once("inc/Classes/Address.php");

require_once("inc/Utilities/FileAgent.inc.php");
require_once("inc/Utilities/FileParse.inc.php");
require_once("inc/Utilities/FileComFirebase.php");


$fileContent = file_readContents();
$readProducts = parseEvents($fileContent);

$dataToFirebase = new Communication();

// foreach($readProducts as $product){
    
//     $item = new Product();
//     $item->setBarcode($product[0]);
//     $item->setBrand_id($product[1]);
//     $item->setCategories($product[2]);
//     $item->setCost_price((double)$product[3]);
//     $item->setDescription($product[4]);
//     $item->setId($product[5]);
//     $item->setInventory_level((int)$product[6]);
//     $item->setInventory_warning_level((int)$product[7]);
//     $item->setName($product[8]);
//     $item->setReview_message($product[9]);
//     $item->setPrice((double)$product[10]);
//     $item->setReviews_count((int)$product[11]);
//     $item->setReviews_rating_sum((int)$product[12]);
//     $item->setUrl_image($product[13]);
    
//     $newProduct []= $item;
// }
// $response["products"] = $newProduct;
// $dataToFirebase->insertProduct($response);
// echo json_encode($response);

$newAddress = new Address();
$newAddress->setCity("Vancouver");
$newAddress->setCountry("Canada");
$newAddress->setPostal_code("V5M 2R6");
$newAddress->setState("BC");
$newAddress->setStreet("234 Tofino St");


$newCustomer = new Customer();
$newCustomer->setAddress($newAddress);
$newCustomer->setEmail("da@gmail.com");
$newCustomer->setFirst_name("Bayron");
$newCustomer->setId("1");
$newCustomer->setLast_name("Palacio");
$newCustomer->setPassword("V8D 9E9");
$newCustomer->setPhone("432-324-2343");

$customer = (array)$newCustomer->jsonSerialize();
// $response1[] = $customer;

$dataToFirebase->insertCustomerPush($customer);
echo json_encode($customer);
// $dataToFirebase->insertCustomer($response1);
// echo json_encode($response1);


// $proOrder = new ProductOrdered();
// $proOrder->setId("2");
// $proOrder->setName("Test Order");
// $proOrder->setOrder_id("1");
// $proOrder->setPrice("123");
// $proOrder->setQuantity("2");


// $order = new Order();
// $order->setCart_id(2);
// $order->setCustomer($customer);
// $order->setCustomer_message("What");
// $order->setDate_created("09-12-20");
// $order->setDate_shipped("21-12-20");
// $order->setId(1);
// $order->setItems_total(2);
// $order->setPayment_method("Debit");
// $order->setPayment_status("Done");
// $order->setProductsOrdered($proOrder);
// $order->setShipping_cost("43");
// $order->setStatus("Green");
// $order->setTotal("2423");
// $order->setTotal_tax("323");

// $response2[] = $order;
// $dataToFirebase->insertOrder($response2);
// echo json_encode($response2);

// $arrayCustomers = $dataToFirebase->getCustomers();
// var_dump($arrayCustomers);
?>