<?php
class Product {

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
     *
     * @return  self
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
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
     *
     * @return  self
     */ 
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
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
     *
     * @return  self
     */ 
    public function setBase_variant_id($base_variant_id)
    {
        $this->base_variant_id = $base_variant_id;

        return $this;
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
     *
     * @return  self
     */ 
    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;

        return $this;
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
     *
     * @return  self
     */ 
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
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
     *
     * @return  self
     */ 
    public function setCost_price($cost_price)
    {
        $this->cost_price = $cost_price;

        return $this;
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
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
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
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     *
     * @return  self
     */ 
    public function setInventory_level($inventory_level)
    {
        $this->inventory_level = $inventory_level;

        return $this;
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
     *
     * @return  self
     */ 
    public function setInventory_warning_level($inventory_warning_level)
    {
        $this->inventory_warning_level = $inventory_warning_level;

        return $this;
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
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     *
     * @return  self
     */ 
    public function setPreorder_message($preorder_message)
    {
        $this->preorder_message = $preorder_message;

        return $this;
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
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
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
     *
     * @return  self
     */ 
    public function setReviews_count($reviews_count)
    {
        $this->reviews_count = $reviews_count;

        return $this;
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
     *
     * @return  self
     */ 
    public function setReviews_rating_sum($reviews_rating_sum)
    {
        $this->reviews_rating_sum = $reviews_rating_sum;

        return $this;
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
     *
     * @return  self
     */ 
    public function setUrl_image($url_image)
    {
        $this->url_image = $url_image;

        return $this;
    }
}    
?>