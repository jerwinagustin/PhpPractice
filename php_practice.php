<!-- Hello World!

<h1>Hello World!</h1>

<style>
    h1 {
        color: blue;
    }
</style>

<script>
    alert("Hello World!")
</script> -->


<?php
/*

    echo "Hello World!";
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my first PHP page</h1> -->

    <?php
        // echo "Hello World!";
        // echo "Hello World!"

        //variable
        // $a = 5;
        // var_dump($a);
        // var_dump("john");
        // var_dump(3.14);
        // var_dump(false);
        // var_dump([1, 2, 3]);
        // var_dump(NULL   );


        // echo $a;


        // variable scope

        // $a = 5;


        // function test () {
        //     static $a = 6;
        //     echo $a;
        //     echo "<br>";
        //     $a++;
        // }
        // test();
        // test();
        // test();
        // test();


        // echo $a;


        // echo & print

        // echo ("Hello! <br>"), ("Hello! <br>");
        // echo "World! <br>", "World! <br>";
        // print ("Hello! <br>");
        // print "Hello! <br>"; 
        // echo print("hi");

        // Data Types
        // $a = "Jerwin";
        // $b = 21;
        // $c = 21.5;
        // $d = true; //of course
        // $e = ["Jerwin", "Christine", "Agustin"];
        // $f = new stdClass();
        // $g = NULL;
        // $h = fopen("php_practice.php", "r");

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        //String

        // $a = "red";
        // $name = "<h1 style=\"color: $a\">Jerwin Agustin ";
        $name = 'Jerwin Agustin ';


        echo strlen($name), "<br>";
        echo str_word_count($name), "<br>";
        echo strpos($name, "Agustin"), "<br>";
        echo strtoupper($name), "<br>";
        echo strtolower($name), "<br>";
        echo str_replace("Jerwin", "Christine", $name), "<br>";
        echo strrev($name), "<br>";
        echo trim($name), "<br>";
        echo strlen(trim($name)), "<br>";
        echo print_r(explode(" ", $name), "<br>");


        
    ?>
</body>
</html>