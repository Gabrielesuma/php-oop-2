<?php

class Product
{
    public int $id;
    public string $name;
    public string $weight;
    public string $price;
    public string $img;
    public string $category;
    

    public function __construct($id, $name, $weight, $price, $img, $category){
        $this->id = $id;
        $this->name = $name;
        $this->weight = $weight;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
        
    }
    public function printCard($item)
    {
        extract($item);
        include __DIR__ . '/../Views/card.php';
    }
   
}
