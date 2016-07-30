<?php
// Programmer: Nate Canney

if($_POST)
{
 class Bonus
  {
   var $rate=0.02;
   var $bonus;

   var $support=1000;
   var $merit;
   var $salary;

   function Bonus($salary, $merit) {
    if  ($salary <=30000) {$salary += $this->support;}

   $this->bonus = $this->rate * ($salary * (1 + $merit/100) + $this->support);
   echo "Your year end bonus is $" . $this->bonus;
 }
}

$class = new Bonus ($_POST["salary"], $_POST["merit"]);

}
else
{
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Enter<ol>
<li>Annual Salary: <input type=text name="salary"> (e.g. 52000)
<li>Merit Points [1-5]: <input type=text name="merit">
</ol>
<input type="submit" value="Calculate">
</form>

<?php
}
?>
   