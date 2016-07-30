<?php
class User
{
 var $test;
 var $test2;
}

$user1= new User();
$user2= new User();

$user1->test = "user1 is Jack";
$user1->test2 = "He is a student";

$user2->test= "user2 is Helen";
$user2->test2= "She is a professor";

print_r($user1);

echo "<br>";

print_r($user2);
echo "<br>";

foreach ($user1 as $key => $value)
{
 $user2->$key = $value;
}

print_r($user1);

echo"<br>";
print_r($user2);
?>