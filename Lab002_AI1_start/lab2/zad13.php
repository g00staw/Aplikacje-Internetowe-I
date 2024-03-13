<?php
//Zad 2.13

class Point
{


    public function __construct(private float $x, private float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function move($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }

    public function __toString() {
        return "Point(" . $this->x . "," . $this->y . ")";
    }

}

$p1 = new Point(0, 0);
$p2 = new Point(1, 1);

echo $p1 . "\n";  // Wypisanie informacji o punkcie
echo $p2 . "\n";  // Wypisanie informacji o punkcie

$p1->setX(2);  // Aktualizacja współrzędnej x punktu
$p1->setY(3);  // Aktualizacja współrzędnej y punktu

echo $p1 . "\n";  // Wypisanie informacji o punkcie

$p1->move(1, 1);  // Przesunięcie punktu o podany dystans

echo $p1 . "\n";  // Wypisanie informacji o punkcie

?>

