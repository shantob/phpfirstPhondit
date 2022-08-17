<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>First php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="container mt-5">
    <div class="card">
        <div class="card-body">

            <?php


            $cars = array("Volvo", "BMW", "Toyota");
            var_dump($cars);
            echo "<br>";
            // ..............................

            class Car
            {
                public $color;
                public $model;
                public function __construct($color, $model)
                {
                    $this->color = $color;
                    $this->model = $model;
                }
                public function message()
                {
                    return "My car is a " . $this->color . " " . $this->model . "!";
                }
            }

            $myCar = new Car("black", "Volvo");
            echo $myCar->message();
            echo "<br>";
            $myCar = new Car("red", "Toyota");
            echo $myCar->message();
            echo "<br>";

            require_once "2nd.php";
            $sum = "$x + $y";
            echo $sum;

            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>