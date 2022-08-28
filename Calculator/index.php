<?php 

include_once "./src/Calculator/Basic/Calculator.php";
include_once "./src/Calculator/Scientific/Calculator.php";
//include "\autoload";
// namespace in use into here...........................



// use \Calculator\Basic\Calculator as BasicCalculator;
// use \Calculator\Scicentific\Calculator as ScientificCalculator;

// mpdf...................................
//require_once __DIR__ . '/vendor/autoload.php';

// $mpdf = new \Mpdf\Mpdf();
// $mpdf->WriteHTML('<h1>Hello world!</h1>');
// $mpdf->Output();
// $mpdf = new \Mpdf();

// $mpdf->writeHTML('<h1>Hello World!!!</h1>')
// ////////////////instance of class///////////////////////////////////////
$basicCalculator = new \Calculator\Basic\Calculator(30, 50);
// if it diclre in public property it clange from outside..............................................
$basicCalculator->num1 = 50;
// ......................->object access operator ...........................
echo "Basic Calculator 1 <hr>";
echo "Sum : ".$basicCalculator->sum();
echo "<br>";
echo "Sum : ".$basicCalculator->sub();
echo "<hr> Basic Calculator 2 <hr>";
// if($CalculatorObject instanceOf Calculator){
//     echo "Bangladesh Jindabad";
// }


// scientific.....................................
$scientificCalculatorObject2 = new \Calculator\Scicentific\Calculator(30, 60);

echo "sum : ".$scientificCalculatorObject2->sum();
//echo $CalculatorObject->sum();
// ..........................
echo "<br>";
echo "<br>";
echo "<br>";

$marks = [
    ['Shanto','Bangla','50'],
    ['Shanto','English','60'],
    ['Shanto','Math','40'],
    ['Shanto','Science','80'],
];
for ($row=0; $row < count($marks) ; $row++) { 
    echo "<h3> ".$row." </h3>";
    for ($col=0; $col < 3 ; $col++) { 

      //print_r(array_count_values($col[2]));
        // echo count($col[2]);
        echo "<li>".$marks[$row][$col]."</li>";
    }
}