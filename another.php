<?php

// $cars =[
//     ["BMW",15,13],
//     ["Audi",5,2],
//     ["Saab",15,13],
//     ["Land Rover",12,25],
// ];
// foreach ($cars as $value) {
//     $flag=0;
//     echo "Car Name:";
//     foreach ($value as $valueCar){
//         if($flag++ !=0 ){
//            echo "Model :";
//         }elseif( $flag++ !=1){
//             echo "Licence :";
//         }
//         echo $valueCar. " ";
//     }
//     echo "<br>";
// }

// array........................................
// $students =['Shanto','Ashik','Badhon','Faisal','Pradip'];
// $length = count($students);
// for ($i=0; $i <$length ; $i++) { 
//     echo $i." = ".$students[$i]."<br>";
// }

// $students = ['kamal'=>25,'email'=>'kamal123@gmail.com','GPA'=>5.00];

// foreach ($students as $key => $value) {
//    echo $key. " = ".$value."<br>";
// }

// multidimantional array...........................................
// $cars =[
//         ["BMW",15,13],
//         ["Audi",5,2],
//         ["Saab",15,13],
//         ["Land Rover",12,25],
//     ];
//     foreach ($cars as $key=> $value) {
//        echo "Car Name:";
//         foreach ($value as $key2=> $valueCar){
//             // if($valueCar !=1) {

//             echo $valueCar;
//         // }elseif($valueCar !=2){
//         //     echo " Car Licence :".$valueCar ;
//         // }
//         }
//         echo "<br>";
//     }


?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // $cars = [
    //     ["Volvo", 22, 18],
    //     ["BMW", 15, 13],
    //     ["Saab", 5, 2],
    //     ["Land Rover", 17, 15],
    //     ["Hasib", 27, 25]
    // ];

    // foreach ($cars as $key => $values) {

    //     // $flag=0;
    //     echo "<b>Car Name : </b>";
    //     foreach ($values as $key => $car) {

    //         // echo "<br>";

    //         if ($key++ != 0) {
    //             echo ' - Model '.$car;
    //             if ($key++ !=1) {
    //                 echo ' -Licence '.$car;
    //             }
    //         } else {
    //             echo $car;
    //         }
    //     }
    //     echo "<br>";
    // }
    ?>

</body>

</html>



<?php
$students = [
    'cse' => [
        ['name' => 'Himel', 'email' => 'hemail@gmail.com', 'result' => '4'],
        ['name' => "Zarin", 'email' => 'zarin@gmail.com', 'result' => '4'],

    ],
    'bba' => [
        ['name' => 'Tamim', 'email' => 'tamim@gmail.com', 'result' => '4'],
        ['name' => 'Kafi', 'email' => 'kafi@gmail.com', 'result' => '3.9'],
    ]
];
// echo "<b>Output : </b>";
// foreach ($students as $value) {
//     echo $value['0'];
//     foreach ($value as $name => $email) { {
//             echo "Name : " . $name . " , " . " Email : " . $email . "\n";
//         }
//     }
// }// echo  "<pre>";
// print_r($students);
// tanvir vi ............................................

// echo "<b>Output : </b> <br>";
// foreach ($students as $key => $values) {

//     echo "Dept :";
//     //  echo "<br>";
//     echo $key;
//     echo "<br>";
//     echo 'Name :';
//     foreach ($values as $key => $value) {
//         //echo "<br>";

//         foreach ($value as $key => $stu) {
           
//                 echo $stu . ' Email : ';
            
           
//         }
//         echo "<br>";
//     }
// }
// redoy vi..........................................................

echo "Output :<br>";
foreach ($students as $key => $values) {
    # code...
    echo "Department :".$key.'<br>';
    echo "Student :".'<br>';
    foreach ($values as $key => $std) {
        foreach ($std as $key => $student) {
            # code...
            echo $key.': '.$student.', ';
        }
        echo "<br>";
    }
}







// .............................................
// $threeDim = array(

//     array(

//         array('Sadal Aam', 'Pakal Amm', 'Kothiya Aam', 'Sinduriya Aam'),

//         array('Pakal kohanda', 'Kach kohanda', 'Gol kohanda', 'Pichakal kohanda'),

//     ),

//     array(

//         array('Sadal angur', 'Bandhiya angur', 'Niman angur', 'Kharab angur'),

//         array('Lamhar lauki', 'Chot lauki', 'Golki laudi', 'Jabar wala lauki'),

//     ),

//     array(

//         array('Apple', 'Lal Apple', 'Kasatal Apple', 'Kanch Apple'),

//         array('Safedka nenuaa', 'Karika nenuaa', 'Taja nenuaa', 'Basiya nenuaa'),

//     ),

// );



// foreach ($threeDim as $value) {

//     foreach ($value as $value2) {

//         foreach ($value2 as $value3) {



//             echo "| $value3";
//         }

//         echo "<br>";
//     }

//     echo "<br>";
// }
// // ................
// echo "This program is about Three-Dimentional array<br>";



// // Creating a 3 Dimentional array :



// $muldim = array(

//     array(

//         array(5, 8, 7, 9),

//         array(2, 9, 3, 8),

//         array(1, 8, 5, 9),

//         array(6, 4, 3, 7)

//     ),



//     array(

//         array(5, 8, 7, 9),

//         array(2, 9, 3, 8),

//         array(1, 8, 5, 9),

//         array(6, 4, 3, 7)

//     ),



//     array(

//         array(5, 8, 7, 9),

//         array(2, 9, 3, 8),

//         array(1, 8, 5, 9),

//         array(6, 4, 3, 7)

//     ),



//     array(

//         array(5, 8, 7, 9),

//         array(2, 9, 3, 8),

//         array(1, 8, 5, 9),

//         array(6, 4, 3, 7)

//     )

// );



// for ($i = 0; $i < count($muldim); $i++) {



//     for ($j = 0; $j < count($muldim[$i]); $j++) {



//         for ($k = 0; $k < count($muldim[$i][$j]); $k++) {

//             echo ($muldim[$i][$j][$k]);

//             echo " ";
//         }
//     }

//     echo "<br>";
// }
// ......................................................

// $inscrits = [

//     [
//         'Nom' =>'Leonos',
//         'Age' => '24',
//         'Mail' =>'leonos@gmail.com'
//     ],
//     [
//         'Nom' =>'Leodos',
//         'Age' => '25',
//         'Mail' =>'leodos@gmail.com'
//     ],
//     [
//         'Nom' =>'Leotros',
//         'Age' => '26',
//         'Mail' =>'leotros@gmail.com'
//     ],
// ];
// $inscrits = [

//     [
//         'Nom' =>'Leonos',
//         'Age' => '24',
//         'Mail' =>'leonos@gmail.com'
//     ],
//     [
//         'Nom' =>'Leodos',
//         'Age' => '25',
//         'Mail' =>'leodos@gmail.com'
//     ],
//     [
//         'Nom' =>'Leotros',
//         'Age' => '26',
//         'Mail' =>'leotros@gmail.com'
//     ],
// ];

// foreach ($inscrits as $ligne => $infos) {
//    echo '<table><tr><td>Membre n°</td><td>Nom</td><td>Age</td><td>Mail</td>></tr>
//    <tr><td>' .($ligne+1). '</td>';
//     foreach($infos as $info) {
//         echo '<td>'.$info.'</td>';
//     }
//     echo '</tr></table><br><br>';
// }

?>