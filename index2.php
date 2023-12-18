<?php
$hello = 'welcome to PHP World';
echo $hello;
// decimal base integers
$deci1 = 50;
$deci2 = 654;

$sum = $deci1 + $deci2;
echo "\n\nthe sum is: ".$sum;
$name = "Krishna";
echo "\nThe name of the Professional is $name\n";
echo 'The name of the Professional is $name ';
echo "\n\n";

$intArray = array( 10, 20 , 30);
 
echo "First Element: $intArray[0]\n";
echo "Second Element: $intArray[1]\n";
echo "Third Element: $intArray[2]\n\n";
 
//returns data type and value
var_dump($intArray);
echo "Welcome to Proffessionals \n";
 
$site  = "Proffessionals";
 
echo "Welcome to $site";

 
  
$input  = "2016-04-08";
print_r(explode("-",$input));


// $grade = 85;
// if ($grade >= 90) {
//    echo "You got an A.";
// } elseif ($grade >= 80) {
//    echo "You got a B.";
// } elseif ($grade >= 70) {
//    echo "You got a C.";
// } elseif ($grade >= 60) {
//    echo "You got a D.";
// } else {
//    echo "You got an F.";
// }


$scores = array("Alice" => 90, "Bob" => 80, "Charlie" => 70);
foreach ($scores as $name => $score) {
   echo "$name scored $score. ";
}

 
// function with default parameter
function defProf($str, $num=12)
{
    echo "$str is $num years old \n";
}
 
// Calling the function
defProf("\n Ram", 15);
 
// In this call, the default value 12
// will be considered
defProf("\n Adam");

class Dog {
    public $name;
    public $age;
    public $color;
  }
  
  $roger = new Dog();
  
  $roger->name = 'Roger';
  $roger->age = 10;
  $roger->color = 'gray';
  
  var_dump($roger);
  
  $timestamp = time();
  echo date('Y-m-d', $timestamp);
    
  <form>
  <input type="text" name="name" />
  <input type="submit" />
 </form>
 
 
 <?php
 if (isset($_GET['name'])) {
  echo '<p>The name is ' . $_GET['name'];
 }
 ?>
 

?>

