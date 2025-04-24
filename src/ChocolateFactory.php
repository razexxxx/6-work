<?php
namespace ChocolateFactory;

use ChocolateFactory\Snacks\NuttySnack;
use ChocolateFactory\Snacks\CaramelSnack;
use ChocolateFactory\Snacks\FruitSnack;

abstract class ChocolateFactory {
    public function orderSnack(string $type): ?Snack {
        $snack = $this->createSnack($type);
        if ($snack) {
            $snack->prepare();
            $snack->cut();
        }
        return $snack;
    }

    abstract protected function createSnack(string $type): ?Snack;
}
