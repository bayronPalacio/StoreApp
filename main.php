<?php
require __DIR__.'/vendor/autoload.php';

require_once("inc/Classes/Product.php");
require_once("inc/Classes/Customer.php");
require_once("inc/Utilities/FileAgent.inc.php");
require_once("inc/Utilities/FileParse.inc.php");
require_once("inc/Utilities/FileComFirebase.php");


$fileContent = file_readContents();
$readProducts = parseEvents($fileContent);

$dataToFirebase = new Communication();

foreach($readProducts as $product){
    
    $item = new Product();
    $item->setBarcode($product[0]);
    $item->setBrand_id($product[1]);
    $item->setCategories($product[2]);
    $item->setCost_price((double)$product[3]);
    $item->setDescription($product[4]);
    $item->setId($product[5]);
    $item->setInventory_level((int)$product[6]);
    $item->setInventory_warning_level((int)$product[7]);
    $item->setName($product[8]);
    $item->setReview_message($product[9]);
    $item->setPrice((double)$product[10]);
    $item->setReviews_count((int)$product[11]);
    $item->setReviews_rating_sum((int)$product[12]);
    $item->setUrl_image($product[13]);
    
    $newProduct []= (array)$item->jsonSerialize();
}

$response[] = $newProduct;
$dataToFirebase->insertProduct($response);
echo json_encode($response);

$newCustomer = new Customer();
$newCustomer->setCity("Vancouver");
$newCustomer->setCountry("Canada");
$newCustomer->setEmail("da@gmail.com");
$newCustomer->setFirst_name("Bart");
$newCustomer->setId("1");
$newCustomer->setLast_name("Simpson");
$newCustomer->setPhone("432-324-2343");
$newCustomer->setPostal_code("V8D 9E9");
$newCustomer->setState("BC");
$newCustomer->setStreet("23 Tofino Street");

$customer = (array)$newCustomer->jsonSerialize();
$response1["customers"] = $customer;

$dataToFirebase->insertCustomer($response1);
echo json_encode($response1);

?>