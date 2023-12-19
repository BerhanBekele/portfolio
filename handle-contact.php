<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Display form date
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
header("Location:/thankyou.php?name=$name");
    //Display the submitted data
    // echo"Name: ".$name."/br";
    // echo"Email: ".$email."/br";
    // echo"Message: ".$message."/br";
  
}


?>