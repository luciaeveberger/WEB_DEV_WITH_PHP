<?php

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit
{
    public $weight;

    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    // this function we are calling => remember this is for more flexibility on our specialized class
    public function intro()
    {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
}




# when we use the extended class it will use the overriden method
$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();

# when we use the base class => it will use hte base function
$randomFruit = new Fruit("Random Fruit", "rainbow");
$randomFruit-> intro();
