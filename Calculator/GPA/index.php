<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- for same page form action -->
    <!-- <form action= "<?= $_SERVER['PHP_SELF'] ?>" method="post"> -->

    <table border="2">
        <tr>
            <td>
                <form action="controller.php" method="post">
                    Sub 1: <input type="number" name="sub_1"><br>
                    Sub 2: <input type="number" name="sub_2"><br>
                    Sub 3: <input type="number" name="sub_3"><br>
                    <input type="submit" name="dhd">
                </form>
            </td>
        </tr>
    </table>
   
    <php require_once "controller.php" ; ?>
        <!-- <h3>Your Result is =  <?= $the_grade ?></h3> -->

        <?php

        // include_once './vendor/autoload.php';
        // include_once './utilities/helper.php';

        // use phpFirst\src\Calculator\Basic\Calculator;
        // $calculatorObj = new Calculator();


        // if($_SERVER['REQUEST_METHOD'] == "POST") {
        //     $num1 = $_post['sub_1'];
        //     $num2 = $_post['sub_2'];
        //     $num3 = $_post['sub_3'];

        //     $calculatorObj = new Calculator($num1, $num2, $num3);
        //     echo $calculatorObj->sum();    
        // }

        ?>
</body>

</html>