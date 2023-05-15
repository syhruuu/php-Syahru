<?php 
class Car {
    private $brand;
    private $year;

    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getYear() {
        return $this->year;
    }

    public function getInfo() {
        return $this->brand . "(" . $this->year . ")";
    }
}

$car1 = new Car('Toyota Supra MK4 ', 2020);

echo $car1->getInfo(); 
// Output: Toyota Supra MK4 (2020)

?>