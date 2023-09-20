<?php

class Driver
{
    public $name, $age, $family, $hourlyRate, $martialStatus;

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() : string {
        return $this->name;
    }

    public function setAge(int $age) {
        $this->age = $age;
    }

    public function getAge() : int {
        return $this->age;
    }

    public function setFamily(array $family) {
        $this->family = $family;
    }

    public function getFamily() : array {
        return $this->family;
    }

    public function setHourlyRate(float $hourlyRate) {
        $this->hourlyRate = $hourlyRate;
    }

    public function getHourlyRate() : float {
        return $this->hourlyRate;
    }

    public function setMartialStatus(bool $martialStatus) {
        $this->martialStatus = $martialStatus;
    }

    public function getMartialStatus() : bool {
        return $this->martialStatus;
    }

}

class Car 
{
    public $brand, $model, $price, $spares, $available;

    public function __construct(string $brand, int $model, float $price, array $spares, bool $available)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->spares = $spares;
        $this->available = $available;
    }

    public function getbrand() : string {
        return $this->brand;
    }

    public function getModel() : int {
        return $this->model;
    }

    public function getPrice() : float {
        return $this->price;
    }

    public function getspares() : array {
        return $this->spares;
    }

    public function getAvailable() : bool {
        return $this->available;
    }

}

$dBob = new Driver();
$dBob->setName("Bob");
$dBob->setAge(30);
$dBob->setFamily(["Father"=>"Billey", "Mother"=>"Bonney", "Brother"=>"Bobby"]);
$dBob->setHourlyRate(8.5);
$dBob->setMartialStatus(FALSE);

echo "<hr>";

$dPaul = new Driver();
$dPaul->setName("Paul");
$dPaul->setAge(35);
$dPaul->setFamily(["Father"=>"Peter", "Mother"=>"Lilly", "Brother"=>"Bryan"]);
$dPaul->setHourlyRate(9.5);
$dPaul->setMartialStatus(TRUE);


?>