<?php

# Конкатенація
$a = "100";
$b = 23;

var_dump($a + $b);
echo '<br>';
var_dump($a . $b);
echo '<hr>';

# foreach, ассоціативний масив
$numbers = array("One" => 1, "Two" => 2, "Three" => 3);

foreach ($numbers as $key => $number) {
    echo "$key $number<br/>";
}
echo '<hr>';

# explode(), implode()
$text = 'One Two Three Four Five';
$arr = explode(' ', $text);

foreach ($arr as $x) {
    echo "$x<br>";
}

$text = implode(', ', $arr);

echo "<br>$text<hr>";

# Розіменування
$b = 100;

echo "$b<br>";

$a = 'b';
$$a = 1;

echo $b . '<hr>';

# Логічні оператори
$a = 10;
$b = '10';

var_dump($a == $b);
echo '<br>';
var_dump($a === $b);
echo '<br>';
var_dump($a !== $b);
echo '<br>';
var_dump($a <=> $b);
echo '<hr>';

# Приведення типів
$a = 10;

var_dump($a);
echo '<br>';
var_dump($a = 10.0);
echo '<br>';
var_dump("$a");
echo '<br>';
var_dump($a * 1.1);
echo '<br>';
var_dump((bool)$a);
echo '<hr>';

# Класи, конструктори, наслідування
class Base {
    function __construct() {
        echo 'Base class constructor<br>';
    }
    function __destruct() {
        echo 'Base class destructor<br>';
    }
}

class Derived extends Base {
    function __construct() {
        #parent::__construct();
        echo 'Derived class constructor<br>';
    }
    function __destruct() {
        #parent::__destruct();
        echo 'Derived class destructor<br>';
    }
}

$obj = new Derived();
unset($obj);
echo '<hr>';

# Singleton
class Singleton {
    private static $instance = null;

    public static function getInstance() {
        if (static::$instance == null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
}

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();

var_dump($obj1 === $obj2);