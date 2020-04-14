<?php

# Конкатенація
//$a = "100";
//$b = 23;
//
//var_dump($a + $b);
//echo '<hr>';
//var_dump($a . $b);

# foreach, ассоціативний масив
//$numbers = array("One" => 1, "Two" => 2, "Three" => 3);
//
//foreach ($numbers as $key => $number) {
//    echo "$key $number<br>";
//}

# explode(), implode()
//$text = 'One Two Three Four Five';
//$arr = explode(' ', $text);
//
//foreach ($arr as $x) {
//    echo "$x<br>";
//}
//
//$text = implode(', ', $arr);
//
//echo "<hr>$text";

# Розіменування
//$b = 100;
//
//echo "$b<hr>";
//
//$a = 'b';
//$$a = 1;
//
//echo $b;

# Логічні оператори
//$a = 10;
//$b = '10';
//
//var_dump($a == $b);
//echo "<br>";
//var_dump($a === $b);
//echo "<br>";
//var_dump($a !== $b);
//echo "<br>";
//var_dump($a <=> $b);

# Приведення типів
//$a = 10;
//
//var_dump($a);
//echo "<br>";
//var_dump($a = 10.0);
//echo "<br>";
//var_dump("$a");
//echo "<br>";
//var_dump($a * 1.1);
//echo "<br>";
//var_dump((bool)$a);

# Класи, конструктори, наслідування
//class Base {
//    function __construct() {
//        echo "Base class constructor<br>";
//    }
//    function __destruct() {
//        echo "Base class destructor<br>";
//    }
//}
//
//class Derived extends Base {
//    function __construct() {
//        #parent::__construct();
//        echo "Derived class constructor<br>";
//    }
//    function __destruct() {
//        #parent::__destruct();
//        echo "Derived class destructor<br>";
//    }
//}
//
//$obj = new Derived();

# Singleton
//class Singleton {
//    private static $instance = null;
//
//    public static function getInstance() {
//        if (static::$instance == null) {
//            static::$instance = new static();
//        }
//
//        return static::$instance;
//    }
//
//    private function __construct() {}
//    private function __clone() {}
//    private function __wakeup() {}
//}
//
//$obj1 = Singleton::getInstance();
//$obj2 = Singleton::getInstance();
//
//var_dump($obj1 === $obj2);