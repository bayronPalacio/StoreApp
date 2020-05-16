<?php
require __DIR__.'/vendor/autoload.php';
require_once("Users.php");
require_once("inc/Classes/Product.php");
require_once("inc/Utilities/FileAgent.inc.php");
require_once("inc/Utilities/FileParse.inc.php");

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$fileContent = file_readContents();
$readProducts = parseEvents($fileContent);

foreach($readProducts as $product){
    
    $item = new Product();
    $item->setAvailability($product[0]);
    $item->setBarcode($product[1]);
    $item->setBase_variant_id($product[2]);
    $item->setBrand_id($product[3]);
    $item->setCategories($product[4]);
    $item->setCost_price($product[5]);
    $item->setDescription($product[6]);
    $item->setId($product[7]);
    $item->setInventory_level($product[8]);
    $item->setInventory_warning_level($product[9]);
    $item->setName($product[10]);
    $item->setPreorder_message($product[11]);
    $item->setPrice($product[12]);
    $item->setReviews_count($product[13]);
    $item->setReviews_rating_sum($product[14]);
    $item->setUrl_image($product[15]);
    
    $newProduct []= (array)$item->jsonSerialize();
}

$response["products"] = $newProduct;
$item->insert($response);
echo json_encode($response);

?>