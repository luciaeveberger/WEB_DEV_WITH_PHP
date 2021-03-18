<?php
# for us is going to load our dependencies :)


class Orange extends Fruit
{
    // data point -> instance variable => doesn't make senes for this to be on all FRUIT
    public $wasGrownInFlorida;
    public function __construct($name, $color, $wasGrownInFlorida)
    {
        $this->name = $name;
        $this->color = $color;
        $this->wasGrownInFlorida = $wasGrownInFlorida;
    }

}