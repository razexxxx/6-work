<?php
namespace ChocolateFactory\Snacks;

use ChocolateFactory\Snack;

class NuttySnack extends Snack {
    public function __construct() {
        $this->name = "Nutty Delight";
        $this->chocolate = "Dark Chocolate";
        $this->toppings = ["Almonds", "Hazelnuts"];
    }
}
