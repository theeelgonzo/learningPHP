<?php
class Person {
    var $name;
    var $age;
    var $birthday = false;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name() {
        return $this->name;
    }
}

$jordan = new Person('Jordan', 33);
$rachel = new Person('Rachel', 46);

echo $jordan->get_name();