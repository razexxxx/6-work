<?php
namespace ChocolateFactory\Snacks;

use ChocolateFactory\Snack;

class CaramelSnack extends Snack {
    public function __construct() {
        $this->name = "Caramel Treat";
        $this->chocolate = "Milk Chocolate";
        $this->toppings = ["Caramel", "Sea Salt"];
    }
}
