<?php
//phpinfo();

// namespace Nature;
// function Calculator()
// {
//     echo "Bangladesh Is the First Country"."<br>";
// }
// namespace Socity;
// function Calculator()
// {
//     echo "Bangladesh Is the First Country";
// }

// \Nature\Calculator();
// \Socity\Calculator();

// calculator ...........................................
namespace Calculator\Scicentific\Calculator;
class Calculator
{
    // property.............
    public $num1 = 10;
    //static = public static $number = 398768;
    public $num2 = 30;
    // methood.....................

    public function __construct($n1, $n2)
    {
        $this->num1 = $n1;
        $this->num2 = $n2;
    }
    function sum()
    //constructor use for print without echo
    {
        // for static= return $static::$numer1;
        return $this->num1 + $this->num2;
    }

    function sub()
    {
        return $this->num1 - $this->num2;
    }
    function log()
    {
        return $this->num1 - $this->num2;
    }
    function root()
    {
        return $this->num1 - $this->num2;
    }
}