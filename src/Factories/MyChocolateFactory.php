<?php
namespace ChocolateFactory\Factories;

use ChocolateFactory\ChocolateFactory;
use ChocolateFactory\Snack;
use ChocolateFactory\Snacks\NuttySnack;
use ChocolateFactory\Snacks\CaramelSnack;
use ChocolateFactory\Snacks\FruitSnack;

class MyChocolateFactory extends ChocolateFactory {
    protected function createSnack(string $type): ?Snack {
        return match (strtolower($type)) {
            "nutty" => new NuttySnack(),
            "caramel" => new CaramelSnack(),
            "fruit" => new FruitSnack(),
            default => null
        };
    }
}
