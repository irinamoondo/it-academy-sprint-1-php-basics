<?php
    //EXERCISE 1
    echo "<strong>Exercici 1</strong><br>";
    //integer variable
    $age = 23;
    echo $age;
    echo "<br>";
    //double variable
    $time = 2.5;
    echo $time;
    echo "<br>";
    //string variable
    $name = "Paul";
    echo $name;
    echo "<br>";
    //boolean variable
    $male = true;
    echo $male;
    echo "<br><br>";
    
    //EXERCISE 2
    echo "<strong>Exercici 2</strong><br>";
    $message1 = "Hello World";
    echo $message1."<br>"; //print
    echo strtoupper($message1)."<br>"; //capitalize
    echo strlen($message1)."<br>"; //number of letters
    echo strrev($message1)."<br>"; //reverse string
    $message2 = "Aquest és el curs de PHP";
    echo $message1.$message2;
    echo "<br><br>";
    
    //EXERCISE 3
    echo "<strong>Exercici 3</strong><br>";
    define("myName", "Young");
    echo "<h1><strong>".myName."</strong></h1>";
    echo "<br><br>";
    
    //EXERCISE 4
    echo "<strong>Exercici 4</strong><br>";
    //Operacions amb variables x i y
    $x = 2;
    $y = 3;
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo $x + $y; //Suma
    echo "<br>";
    echo $x - $y; //Resta
    echo "<br>";
    echo $x * $y; //Producte
    echo "<br>";
    //Operacions amb variables n i m
    echo "<br>";
    $n = 15.2;
    $m = 8.4;
    echo $n;
    echo "<br>";
    echo $m;
    echo "<br>";
    echo $n + $m; //Suma
    echo "<br>";
    echo $n - $m; //Resta
    echo "<br>";
    echo $n * $m; //Producte
    echo "<br><br>";
    //Operacions amb variables x, y, n i m
    echo "<br>";
    //Doble de cada variable
    echo $x * 2;
    echo "<br>";
    echo $y * 2;
    echo "<br>";
    echo $n * 2;
    echo "<br>";
    echo $m * 2;
    echo "<br>";
    //Suma de totes les variables
    echo $x + $y + $n + $m;
    echo "<br>";
    //Producte de totes les variables
    echo $x * $y * $n * $m;
    echo "<br><br>";

    //EXERCISE 5
    echo "<strong>Exercici 5</strong><br>";
    $numberApples = array(5, 6, 3, 2, 4);
    $numberBananas = array(3, 2, 4);
    $numberBananas[3] = 4;
    $result = array_merge($numberApples, $numberBananas);
    echo "<pre>";
    echo var_dump(count($result));
    echo var_dump ($result);
    
?>
