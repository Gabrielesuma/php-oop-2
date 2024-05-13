<?php
include_once __DIR__ . '/Product.php';
class Dogs extends Product
{
    
    public function __construct($id, $name, $weight, $price, $img, $category)
    {
        parent::__construct($id, $name, $weight, $price, $img, $category);
        


    }
    public function formatItem()
    {
        $item = [
            'name' => $this->name,
            'weight' => $this->weight,
            'price' => $this->price,
            'img' => $this->img,
            'category' => $this->category
        ];
        return $item;
    }
    public static function fetchAll()
    {
        $data = file_get_contents(__DIR__ . '/cani_db.json');
        $dataToArray = json_decode($data, true);
        $cani = [];
        foreach ($dataToArray as $item) {

            $cani[] =new Dogs($item['id'], $item['name'], $item['weight'], $item['price'], $item['img'], $item['category']);
        }
        //var_dump($cani);
        return $cani;
    }


}
