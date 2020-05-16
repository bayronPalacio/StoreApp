<?php

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class Communication {
    
    protected $database;
    protected $dbnameCustomer = 'customer';
    protected $dbnameProduct = 'product';

    public function __construct(){

        // $acc = ServiceAccount::fromJsonFile(__DIR__ . '/research-project-dc-0c3ba7f477ae.json');//json pato
        $acc = ServiceAccount::fromJsonFile(__DIR__ . '/phpandroid-954d76d1b771.json');//json byron
        $firebase = (new Factory)->withServiceAccount($acc)
        // ->withDatabaseUri('https://research-project-dc.firebaseio.com')//firebase pato
        ->withDatabaseUri('https://phpandroid.firebaseio.com')//firebase byron
        ->create();
        $this->database = $firebase->getDatabase();
    }
    
    public function insertCustomer(array $data) {
        if (empty($data) || !isset($data)) { return FALSE; }
        foreach ($data as $key => $value){
            $this->database->getReference()->getChild($this->dbnameCustomer)->getChild($key)->set($value);
        }
        return TRUE;
    }

    public function insertProduct(array $data) {
        if (empty($data) || !isset($data)) { return FALSE; }
        foreach ($data as $key => $value){
            $this->database->getReference()->getChild($this->dbnameProduct)->getChild($key)->set($value);
        }
        return TRUE;
    }
    
}
?>