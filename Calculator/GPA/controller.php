<table border="2">
    <tr>
        <td>

            <?php
            //if(isset($_POST['submit'])){
            $sub1 = $_POST['sub_1'];
            $sub2 = $_POST['sub_2'];
            $sub3 = $_POST['sub_3'];
            class Calculator
            {
                //    public $sub1=10;
                //     public $sub2=20;
                //     public $sub3=30;
                // property.............

                // methood.....................
                public function __construct($n1, $n2, $n3)
                {
                    $this->sub1 = $n1;
                    $this->sub2 = $n2;
                    $this->sub3 = $n3;
                }
                function sum()
                //constructor use for print without echo
                {
                    // for static= return $static::$numer1;
                    return $this->sub1 + $this->sub2 + $this->sub3;
                }
            }
            $calculatorObject = new Calculator($sub1, $sub2, $sub3);
            //$calculatorObject = new Calculator();
            $avg = $calculatorObject->sum() / 3;
            echo "<h3>Your Avarage Mark Is : " . $avg . "</h3>";
            if ($avg >= 100) {
                echo "<h3>Your Grade Mark Is : Invalid marks </h3>";
            } else if ($avg >= 80) {
                echo "<h3>Your Grade Mark Is : A+</h3>";
            } else if ($avg >= 70) {
                echo "<h3>Your Grade Mark Is : A </h3>";
            } else if ($avg >= 60) {
                echo "<h3>Your Grade Mark Is : A-</h3>";
            } else if ($avg >= 50) {
                echo "<h3>Your Grade Mark Is : B</h3>";
            } else if ($avg >= 40) {
                echo "<h3>Your Grade Mark Is : C</h3>";
            } else if ($avg >= 33) {

                echo "<h3>Your Grade Mark Is : D</h3>";
            } else if ($avg >= 0) {
                echo "<h3>Your Grade Mark Is : F</h3>";
            } else {
                echo "<h3>Your Grade Mark Is : Invalid marks </h3>";
            }
            ?>

        </td>
    </tr>
</table>