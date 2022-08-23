<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd Page</title>
</head>
<body>
  
    <?php
// $resource = " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores facere autem optio vitae magnam numquam necessitatibus magni natus sunt velit.";
// $string = <<<FORM

// <h1>This is nowadoc program $resource</h1>
// FORM;
// echo $string;






// string handaling finction........................................////
$name = " bangladesh is a beautiful Country  <br>  ";

// echo strlen($name);
// echo "<br>";
// echo strtoupper($name);
// echo "<br>";
// echo strtolower($name);
// echo "<br>";
// echo ucfirst($name);
// echo "<br>";
// echo ucwords($name);
// echo "<br>";

// echo str_repeat($name ,3);

// echo str_replace("Country" , "", $name);
//echo str_replace(" " , "", $name);
// remove start and end space........................................
// echo "<br>";
// echo strlen($name);
// echo "<br>";
// $tremSpace = trim($name);
// echo $tremSpace;
// echo strlen($tremSpace);

// $arr = array('Name ',' Shanto',' Roll ','06');
// //echo implode(" ",$arr); //same to join
// $data= join(" ",$arr); //same to implode
// echo $data;
// echo "<br>";
// print_r(explode(" ", $data));

// echo nl2br("Bangladesh \n long Life");
// echo number_format(100000,2);


session_start();
echo "<pre>";
//print_r ($_SESSION);
echo "This Username is ". $_SESSION['username'];

session_destroy();

?>
</body>
</html>