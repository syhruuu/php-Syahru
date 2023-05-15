<?php
class Animal {
    private $name;
    private $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function makeSound() {
        return "The " . $this->name . " Goes " . $this->sound . ".";
    }
}

$animal1 = new Animal('Lion', 'Raaarrwwr');

echo $animal1->makeSound(); 
// Output: The Lion Goes Raaarrwwr.
?>`