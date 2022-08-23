<?php


// $cars = array("Volvo", "BMW", "Toyota");
// var_dump($cars);
// echo "<br>";
// // ..............................

// class Car
// {
//     public $color;
//     public $model;
//     public function __construct($color, $model)
//     {
//         $this->color = $color;
//         $this->model = $model;
//     }
//     public function message()
//     {
//         return "My car is a " . $this->color . " " . $this->model . "!";
//     }
// }

// $myCar = new Car("black", "Volvo");
// echo $myCar->message();
// echo "<br>";
// $myCar = new Car("red", "Toyota");
// echo $myCar->message();
// echo "<br>";

// require_once "2nd.php";
// $sum = "$x + $y";
// echo $sum;
// ..............................................
// function...........................................
// function number($number1 = 30, $number2 = 26)
// {
//     echo $number1 + $number2;
// }
// number(36, 40);
// number();
// ninus function................................./
// function sum($number1, $number2)
// {
//     echo $number1 + $number2;
// }
// function minus($number1, $number2)
// {
//     echo $number1 - $number2;
// }
// minus(26, 30);
// echo '</br>';
// sum(26, 30);

// if (!isset($math)) {
// }
// echo $math;
// .........................................
// $studentIs = "Shanto";
// if (!is_null($studentIs))
// echo "$studentIs Is not here";
// empty...............................................
// $studentName = "Akas";
// echo empty($studentName);
// if(!empty($studentName)){
//     echo "$studentName Is a good Student";
// }
// array key edist.................................................

// $data = [
//     'roll' => 26,
//     'name' => 'shanto'

// ];
// if (array_key_exists('number', $data)) {

//     echo "This Is shanto";
// }
//require_once "2nd.php";///////////////////////////
// echo "<br>";
// // $text = (serialize($data));
// // var_dump(unserialize($text));
// print_r($data);
// unset($data['roll']);
// echo "<br>";
// print_r($data);





// ....................................................................

?>
<?php
// $a = 15;
// $b = 10;

// $c = $a + $b;
// echo "The Result of $a+$b=" . $c;


// $c1 = $a - $b;
// $c_mul = $a * $b;
// $c_div = $a / $b;
// $c_vagsesh = $a % $b;
// //  assignment operator.....................................
// $b = 10;
// $a = 15;

// $b += $a;
// $x = 100;
// $y = 5;
// var_dump($x === $y);


// $x = 100;
// $y = "10";
// var_dump($x != $y);

// $x = 100;
// $y = "10";
// var_dump($x != $y);

// $x = 100;
// //  $y = 50;
// var_dump($x != $y);



// echo "<pre>";
// print_r($x + $y);
// $a = 10;

// if ($a == 10) {
//     echo "condition True";
// } else {
//     echo "Condition ";
// }
// 
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action=""></form>
    <?php $user = "Shanto Bepari";
    ?>
    <table>
        <tr>
            <td>User name: <?php echo  $user ?? ' ' ?> </td>
        </tr>
        <?php echo isset($user) ? "loged In" : "pls sign Up"; ?>
    </table>

    <h1> Here is another example</h1>

    <table>
        <?php $paid = "Varified"; ?>

        <tr>
            <td>Payment Status: <?php echo $paid ?? '' ?></td>
        </tr>
        <?php echo isset($paid) ? "Payment Varified" : "Please make Payment"; ?>


    </table> -->

<?php
//include "2nd.php";
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// echo $_SERVER['DOCUMENT_ROOT'];

session_start();

// $_SESSION['username'] = "Shanto Bepari";
// $_SESSION['userEmail'] = "sb97@gmail.com";
// $_SESSION['massage'] = "vwiojrfoi3 biuwehf biuwhfnw ";


// echo $_SESSION['username'];
// echo "<pre>";
//print_r($_SESSION);

// coockes start........................................

// $cookie_name = "Shanto Bepari";
// $cookie_value = "Alex Porter";
// //setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

// if(!isset($_COOKIE[$cookie_name])) {
//     echo "Cookie Name '" . $cookie_name . "' is set!";
// } else {
//    echo "Cookie Name Not is set!";
// }
// echo "<br>";
// if(!isset($_COOKIE[$cookie_value])) {
//     echo "Cookie Value '" . $cookie_value . "' is set!";
// } else {
//    echo "Cookie Value Not is set!";
// }

// switch case.........................................................

$mark = "70";

switch (true) {
    case ($mark >= 100):
        echo " You got Invailade Number!!";
        break;
    case ($mark >= 90):
        echo " Most Congress You Got Golden A+!";
        break;
    case ($mark >= 80):
        echo "Congress Your got A+";
        break;
    case ($mark >= 70):
        echo "Congress You Got A";
        break;
    case ($mark >= 60):
        echo "Congress You Got A-";
        break;
    case ($mark >= 50):
        echo "Congress You Got B";
        break;
    case ($mark >= 40):
        echo "Congress You Got C";
        break;
    case ($mark >= 33):
        echo "Congress You Got D";
        break;
    case ($mark < 33 && $mark>0):
        echo "Congress You Passed This EXM";
        break;
    default:
        echo "Invilade Number!";
}

?>


</body>

</html>