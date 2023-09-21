<?php

class Rent 
{
    public $car,$driver;

    public function __construct(Car $car,Driver $driver) 
    {
        $this->car = $car;
        $this->driver = $driver;
    }

    public function getCar() : Car
    {
        return $this->car;
    }

    public function getDriver() : Driver
    {
        return $this->driver;
    }
}

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

$toyota = new Car("Trueno AE86", 1983, 50.5, ["Seat Belt", "Turbo", "Tires"], FALSE);
$nissan = new Car("Skyline R32", 1994, 45.5, ["Seat Belt", "Turbo", "Tires"], TRUE);

$rent1 = new Rent($toyota, $dPaul);
$rent2 = new Rent($nissan, $dBob);

$list = [$rent1, $rent2];

echo "There are " . count($list) . " cars in this company.<hr>";

$serializeData = serialize($list);
echo $serializeData;
echo "<hr>";
$ary = unserialize($serializeData);
echo "<pre>" . print_r($ary, true) . "</pre>";
echo "<hr>";

echo $list[0]->getCar()->getBrand() . "<br>";
echo $list[0]->getDriver()->getName() . "<br>";
echo $list[0]->getDriver()->getHourlyRate() . "<hr>";

echo $list[1]->getCar()->getBrand() . "<br>";
echo $list[1]->getDriver()->getName() . "<br>";
echo $list[1]->getDriver()->getHourlyRate() . "<hr>";

?>