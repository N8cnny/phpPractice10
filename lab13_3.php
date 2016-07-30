
<?php
//Programmer: Nate Canney		

class emp
{
 var $psd;
 var $content= "<p> Every employee can see this line.. </p>";
 var $link= "<p><a href='http://www.msn.com'>Benefit for all employees</a></p>";

function emp()
{
 echo $this->content;
 echo $this->link;
 }
}

class mgr extends emp
{
 var $site="Stock option for <b>Managers</b> only.";

 function show()
 {
  echo $this->site;
 }
}

class ceo extends mgr
{
 var $image="<p><button>Bonus for CEO only</button></p>";

function display()
 {
 parent::show();
  echo $this->image;
 }
}
if($_POST)
{
 if ($_POST["psd"]=="emp")
 {
  $obj = new emp;
 }
else if ($_POST["psd"]=="mgr")
 {
  $obj = new mgr();
  $obj->show();
 }
else if ($_POST["psd"]=="ceo")
 {
  $obj= new ceo();
  $obj->display();
 }
else
{
 echo "You are not an authorized user.";
 }
}
else{
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Enter password: <input type="password" name="psd">
<input type="submit" value="proceed">
</form>

<?php
}
?>
