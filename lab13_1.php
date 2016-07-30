<?php
// Programmer: Nate Canney

class compensation
{
var $rate;

function compensation($salary)
{
$rate=0.02;
$this->rate = $rate * 0.1 * $salary;
echo "Regular employees pay $" .$this->rate . "<br>";
}

function Manager ($salary)
{
$rate=0.01;
$this->rate = $rate * 0.15 * $salary;
echo "Managers pay $" . $this->rate . "<br>";
}

}

$obj1= new compensation(90000);

$obj2= new compensation(70000);

$obj2->Manager(50000);

?>