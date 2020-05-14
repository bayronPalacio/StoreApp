<?php
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Users {
    protected $database;
    protected $dbname = 'users';
    public function __construct(){
        $acc = ServiceAccount::fromJsonFile(__DIR__ . '/research-project-dc-0c3ba7f477ae.json');
        $firebase = (new Factory)->withServiceAccount($acc)
        ->withDatabaseUri('https://research-project-dc.firebaseio.com')
        ->create();
        $this->database = $firebase->getDatabase();
    }
    public function get(int $userID = NULL){    
        if (empty($userID) || !isset($userID)) { return FALSE; }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
        } else {
            return FALSE;
        }
    }
    public function insert(array $data) {
        if (empty($data) || !isset($data)) { return FALSE; }
        foreach ($data as $key => $value){
            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
        }
        return TRUE;
    }
    public function delete(int $userID) {
        if (empty($userID) || !isset($userID)) { return FALSE; }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            $this->database->getReference($this->dbname)->getChild($userID)->remove();
            return TRUE;
        } else {
            return FALSE;
        }
    }
 }
?>