<?php
//Zad 2.12

require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

class Dog
{

    private $uuid;
    private $name;
    private $age;
    private $admissionDate;

    public function __construct($name, $age, $admissionDate) {
        $this->uuid = Uuid::uuid4();
        $this->name = $name;
        $this->age = $age;
        $this->admissionDate = $admissionDate;
    }

    public function __toString() {
        return "UUID: " . $this->uuid->toString() . ", Name: " . $this->name . ", Age: " . $this->age . ", Admission Date: " . $this->admissionDate;
    }
}

$dogs = [];
$dogs[] = new Dog("Rex", 5, "2024-01-01");
$dogs[] = new Dog("Bella", 3, "2024-02-01");
$dogs[] = new Dog("Max", 7, "2024-03-01");
$dogs[] = new Dog("Lucy", 2, "2024-04-01");
$dogs[] = new Dog("Charlie", 4, "2024-05-01");

foreach ($dogs as $dog) {
    echo $dog . "\n";
}

?>
