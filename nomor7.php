<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function getInfo() {
        return $this->name . "(" . $this->age . ")";
    }
}

$person1 = new Person('Sarah', 25);

echo $person1->getInfo(); 
// Output: Sarah(25)
?>