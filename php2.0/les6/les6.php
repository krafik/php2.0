<?php


abstract class Product
{
    public $name;
    public $price;
    public $weight;
    public $image;

    public static $companyName = 'A Web';
    const  YEAR_START = 2019;

    public static function showCompanyInfo(){
        echo self::$companyName;
        echo self::YEAR_START;
    }

    public function __construct(string $name, int $price, int $weight)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function printProduct()
    {
        echo "<div> <h2>{$this->name}</h2> <span>Цена: $this->price</span> <span>Вес: {$this->weight}</span>
                </div>";
    }

    public function showImage($image)
    {

        echo "<div style='background: $this->image'></div>";
    }
}

class Chocolate extends Product
{
    public $calories;



    public function __construct(string $name, int $price, int $weight, string $calories)
    {
        $this->calories = $calories;
        parent::__construct($name, $price, $weight);
    }

    public function printProduct()
    {
        echo "<div>
                <h2>{$this->name}</h2>
                <span>Цена: $this->price;</span>
                <span>Вес: {$this->weight};</span>
                <span>Колории:{$this->calories};</span>
              </div>";
    }

    public function showImage($image)
    {
        $this->image = $image;
        echo "<div style=' background-image: url($this->image); height: 200px; width: 200px;'></div>";
    }
}

class Candy extends Product
{
    public function showImage($image)
    {
        $this->image = $image;
        echo "<div style=' background-image: url($this->image); height: 100px; width: 100px;'></div>";
    }
}


$chocolate = new Chocolate('milka', 2, 100, 150);
$chocolate->showImage('milka.jpg');

$candy = new Candy('karkarov', 2, 300);
$candy->showImage('candy.jpg');
echo '<br>';

$chocolate::showCompanyInfo();
echo '<br>';
Product::showCompanyInfo();

//$test = new Candy('test', 20, 2);


