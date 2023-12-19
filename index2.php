<?php
// $hello = 'welcome to PHP World';
// echo $hello;
// // decimal base integers
// $deci1 = 50;
// $deci2 = 654;

// $sum = $deci1 + $deci2;
// echo "\n\nthe sum is: ".$sum;
// $name = "Krishna";
// echo "\nThe name of the Professional is $name\n";
// echo 'The name of the Professional is $name ';
// echo "\n\n";

// $intArray = array( 10, 20 , 30);
 
// echo "First Element: $intArray[0]\n";
// echo "Second Element: $intArray[1]\n";
// echo "Third Element: $intArray[2]\n\n";
 
// //returns data type and value
// var_dump($intArray);
// echo "Welcome to Proffessionals \n";
 
// $site  = "Proffessionals";
 
// echo "Welcome to $site";

 
  
// $input  = "2016-04-08";
// print_r(explode("-",$input));


// // $grade = 85;
// // if ($grade >= 90) {
// //    echo "You got an A.";
// // } elseif ($grade >= 80) {
// //    echo "You got a B.";
// // } elseif ($grade >= 70) {
// //    echo "You got a C.";
// // } elseif ($grade >= 60) {
// //    echo "You got a D.";
// // } else {
// //    echo "You got an F.";
// // }


// $scores = array("Alice" => 90, "Bob" => 80, "Charlie" => 70);
// foreach ($scores as $name => $score) {
//    echo "$name scored $score. ";
// }

 
// // function with default parameter
// function defProf($str, $num=12)
// {
//     echo "$str is $num years old \n";
// }
 
// // Calling the function
// defProf("\n Ram", 15);
 
// // In this call, the default value 12
// // will be considered
// defProf("\n Adam");
  
//   $timestamp = time();
//   echo date('Y-m-d', $timestamp);
    

 
// //  class Dog {
// //   public $name;
// //   public $age;
// //   public $color;
// // }

// // $roger = new Dog();

// // $roger->name = 'Roger';
// // $roger->age = 10;
// // $roger->color = 'gray';

// // var_dump($roger);

// //   }
  

  
//   class Animal {
//     public $age;
//     public $name;
//     public $color;
//      public function __construct($age =5,$name='Boby', $color='gray'){   
//         $this->age=$age;
//         $this->name=$name;
//         $this->color=$color;;

//     }
  
//     public function eat() {
//       echo " <br> the animal is eating";
//     }
//   }
  
//   class Dog extends Animal {
//     public function eat() {
//       echo "<br> the dog is eating";
//     }
//     public function bark() {
//             echo "<br> ".$this->name . " barked!";
//     }
//   }

//   $roger = new Dog();
//   $roger->bark();
//   $roger->eat();
//  print_r($roger);

// $roger->name = 'Roger';
// $roger->age = 10;
// $roger->color = 'gray';
//   print_r($roger);

  class Employee{
        public $fn;
        public $ln;
        public $role;
        public $company;
        public $experianceInYears;
        public function getFullName() {
            return ($this->fn).' '.($this->ln);
        }
        public function sayHello() {
            echo"<br> Hello, My Name is ".($this->getFullName())." <br>";
            echo"<br> I'm  ".($this->role).' at ' .($this->company)." <br>";
        }

        public function calculateSalary() {
            echo"<br> My Salary:".(($this->experianceInYears)*2000)."<br>";
        }

  }
  class TechEmp extends Employee{
        public $tech;
  }
  class MngrEmp extends Employee{
    public $mngrCerteficate;
    public function calculateSalary() {
        echo"<br> My Salary:".(($this->experianceInYears)*4000)."<br>";
    }
  }

  $berhan = new MngrEmp();
  $berhan->fn = "Berhan";
  $berhan->ln = "Bekele";
  $berhan->role = "Group Leader";
  $berhan->company = "MoD Main Dept InfoSys";
  $berhan->experianceInYears = 10;
  $berhan->sayHello();
  $berhan->calculateSalary();

  $berhan = new TechEmp();
  $berhan->fn = "Berhan";
  $berhan->ln = "Bekele";
  $berhan->role = "Web Devloper";
  $berhan->company = "MoD Main Dept InfoSys Sub Dept";
  $berhan->experianceInYears = 22;
  $berhan->sayHello();
  $berhan->calculateSalary();
  
  <form>
  <input type="text" name="name" />
  <input type="submit" />
 </form>

?>

