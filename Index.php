 
<?php

trait Calculator {

    public function sum($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

    public function mul($a, $b) {
        return $a * $b;
    }

    public function div($a, $b) {
        return $a / $b;
    }

    public function sqr($a) {
        return sqrt($a);
    }

}

class Rettangolo {

    use Calculator;

    public $b;
    public $h;

    public function __construct($b, $h) {
        $this->b = $b;
        $this->h = $h;
    }

    public function getSurfaceArea() {
        $result = $this->mul($this->b, $this->h);
        return $result;
    }

    public function getPerimeter() {
        $result = $this->sum(
            $this->sum($this->b, $this->h),
            $this->sum($this->b, $this->h)
        );

        return $result;
    }

    public function getDiagonal() {
        $result = $this->sqr(
            $this->sum(
                $this->mul($this->b, $this->b),
                $this->mul($this->h, $this->h)
            )
        );

        return $result;
    }

}

$rettangolo = new Rettangolo(10, 5);

echo "Area: " . $rettangolo->getSurfaceArea() . "\n";
echo "Perimetro: " . $rettangolo->getPerimeter() . "\n";
echo "Diagonale: " . $rettangolo->getDiagonal() . "\n";
