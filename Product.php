<?php

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Product implements JsonSerializable {

    private $availability;
    private $barcode;
    private $base_variant_id;
    private $brand_id;
    private $categories;
    private $cost_price;
    private $description;
    private $id; 
    private $inventory_level; 
    private $inventory_warning_level;
    private $name; 
    private $preorder_message; 
    private $price; 
    private $reviews_count; 
    private $reviews_rating_sum; 
    private $url_image; 

    /**
     * Get the value of availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of availability
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * Get the value of barcode
     */ 
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set the value of barcode
     */ 
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * Get the value of base_variant_id
     */ 
    public function getBase_variant_id()
    {
        return $this->base_variant_id;
    }

    /**
     * Set the value of base_variant_id
     */ 
    public function setBase_variant_id($base_variant_id)
    {
        $this->base_variant_id = $base_variant_id;
    }

    /**
     * Get the value of brand_id
     */ 
    public function getBrand_id()
    {
        return $this->brand_id;
    }

    /**
     * Set the value of brand_id
     */ 
    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    /**
     * Get the value of categories
     */ 
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set the value of categories
     */ 
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get the value of cost_price
     */ 
    public function getCost_price()
    {
        return $this->cost_price;
    }

    /**
     * Set the value of cost_price
     */ 
    public function setCost_price($cost_price)
    {
        $this->cost_price = $cost_price;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of inventory_level
     */ 
    public function getInventory_level()
    {
        return $this->inventory_level;
    }

    /**
     * Set the value of inventory_level
     */ 
    public function setInventory_level($inventory_level)
    {
        $this->inventory_level = $inventory_level;
    }

    /**
     * Get the value of inventory_warning_level
     */ 
    public function getInventory_warning_level()
    {
        return $this->inventory_warning_level;
    }

    /**
     * Set the value of inventory_warning_level
     */ 
    public function setInventory_warning_level($inventory_warning_level)
    {
        $this->inventory_warning_level = $inventory_warning_level;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */ 
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of preorder_message
     */ 
    public function getPreorder_message()
    {
        return $this->preorder_message;
    }

    /**
     * Set the value of preorder_message
     */ 
    public function setPreorder_message($preorder_message)
    {
        $this->preorder_message = $preorder_message;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */ 
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get the value of reviews_count
     */ 
    public function getReviews_count()
    {
        return $this->reviews_count;
    }

    /**
     * Set the value of reviews_count
     */ 
    public function setReviews_count($reviews_count)
    {
        $this->reviews_count = $reviews_count;
    }

    /**
     * Get the value of reviews_rating_sum
     */ 
    public function getReviews_rating_sum()
    {
        return $this->reviews_rating_sum;
    }

    /**
     * Set the value of reviews_rating_sum
     */ 
    public function setReviews_rating_sum($reviews_rating_sum)
    {
        $this->reviews_rating_sum = $reviews_rating_sum;
    }

    /**
     * Get the value of url_image
     */ 
    public function getUrl_image()
    {
        return $this->url_image;
    }

    /**
     * Set the value of url_image
     */ 
    public function setUrl_image($url_image)
    {
        $this->url_image = $url_image;
    }

    //Serialize the object to JSON.
    public function jsonSerialize(){   

        $product = new stdClass;
        //Add all the attributes
        $product->availability = $this->availability;
        $product->barcode = $this->barcode;
        $product->base_variant_id = $this->base_variant_id;
        $product->brand_id = $this->brand_id;
        $product->categories = $this->categories;
        $product->cost_price = $this->cost_price;
        $product->description = $this->description;
        $product->id = $this->id;
        $product->inventory_level = $this->inventory_level;
        $product->inventory_warning_level = $this->inventory_warning_level;
        $product->name = $this->name;
        $product->preorder_message = $this->preorder_message;
        $product->price = $this->price;
        $product->reviews_count = $this->reviews_count;
        $product->reviews_rating_sum = $this->reviews_rating_sum;
        $product->url_image = $this->url_image;
        return $product;
    }

    protected $database;
    protected $dbname = 'product';
    public function __construct(){
        $acc = ServiceAccount::fromJsonFile(__DIR__ . '/research-project-dc-0c3ba7f477ae.json');
        $firebase = (new Factory)->withServiceAccount($acc)
        ->withDatabaseUri('https://research-project-dc.firebaseio.com')
        ->create();
        $this->database = $firebase->getDatabase();
    }
    
    public function insert(Product $data) {
        if (empty($data) || !isset($data)) { return FALSE; }
        foreach ($data as $key => $value){
            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
        }
        return TRUE;
    }

    public function get(int $userID = NULL){    
        if (empty($userID) || !isset($userID)) { return FALSE; }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
        } else {
            return FALSE;
        }
    }
}    
?>