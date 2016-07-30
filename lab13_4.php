<?php
//Programmer: Nate Canney

class cis
{
 var $str1="good";
 var $str2="luck";
}

class comp extends cis
{
 var $str3;
}

class ect extends cis
{
 function show()
 {
  return $this->str1;
 }
}

if (class_exists('comp')==1)
{
 $obj = new cis();
 echo "Comp is available in the <b>" . get_class($obj) . "</b> class<br>";
}

echo "<p> Methods in array are: <b>";

print_r(get_class_methods('etc'));

echo "</b><p> Variables in array are: <b>";

print_r(get_class_vars("cis"));

echo "</b>";

?>