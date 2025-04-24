<?php
namespace ChocolateFactory;

abstract class Snack {
    protected string $name;
    protected string $chocolate;
    protected array $toppings = [];

    public function prepare(): void {
        echo "Началась создание snack-а {$this->name}\n";
        echo "Добавляется шоколад {$this->chocolate}\n";
        echo "Добавлены начинок: " . implode(", ", $this->toppings) . "\n";
    }

    public function cut(): void {
        echo "Snack нарезается по вертикали (кусками/кубиками/плитками)\n";
    }
}
