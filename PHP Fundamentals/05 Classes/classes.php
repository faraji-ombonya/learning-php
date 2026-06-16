<?php


/**
 * Classes
 */

class Product
{
    public string $name;
    public float $price;

    public function isExpensive(): bool
    {
        return $this->price > 100;
    }
}

$product = new Product();
$product->name = "Phone";
$product->price = 99.99;

echo $product->name;    // returns "Phone"
var_dump($product->isExpensive());  // returns false


/**
 * Constructor method
 * 
 * - A special method that runs when creating a new object.
 * - Lets you add data while creating a new object instance.
 */

class Product2
{
    public function __construct(
        public string $name,
        public float $price
    ){}
}

$product = new Product("Phone", 99.99);


/**
 * Access levels
 * 
 * - three visibility levels for properties and methods
 *  - public (from anywhere)
 *  - private (only inside the class)
 *  - protected (inside class and child classes)
 */

class Product3
{
    public string $name;
    public float $price;
    protected bool $active;
}


/**
 * Inheritance
 */

class Product4
{
    public function __construct(
        public string $name,
        public float $price
    ) {}

    public function hasDiscount(): bool
    {
        return $this->price < 100;
    }

    public function getDescription(): string
    {
        return "{$this->name} costs {$this->price} Euros";
    }
}

class DigitalProduct extends Product4
{
    public function __construct(
        public string $name,
        public float $price,
        public string $downloadLink
    ) {}

    public function download(): string
    {
        return "Downloading {$this->name} from {$this->downloadLink}";
    }
}

$course = new DigitalProduct('PHP Course', 99.99, 'course.zip');
echo $course->getDescription(); // inherited method
echo $course->hasDiscount();    // inherited method
echo $course->download();       // new method
