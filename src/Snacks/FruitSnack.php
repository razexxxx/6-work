<?php
namespace ChocolateFactory\Snacks;

use ChocolateFactory\Snack;

class FruitSnack extends Snack {
    public function __construct() {
        $this->name = "Fruity Fun";
        $this->chocolate = "White Chocolate";
        $this->toppings = ["Dried Mango", "Coconut"];
    }
}
