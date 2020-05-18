<?php
require __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../inc/Classes/Product.php';
require_once __DIR__.'/../inc/Classes/Customer.php';
require_once __DIR__.'/../inc/Utilities/FileAgent.inc.php';
require_once __DIR__.'/../inc/Utilities/FileParse.inc.php';
require_once __DIR__.'/../inc/Utilities/FileComFirebase.php';

$dataToFirebase = new Communication();

if(isset($_POST['customer'])){
    $data = new Customer();
    $data = json_decode($_POST["customer"]);
    
    $customer = (array)$data;
    $dataToFirebase->insertCustomerPush($customer);
    echo json_encode($customer);
}

?>