<?php
session_start();
require_once ('database-connection.php');



// Process login method 

function processUserLogin($studentNumber, $passWord, $conn){

    // Select student number and password fromstudent_account table
    $sql = "SELECT *  FROM student_account WHERE student_number ='$studentNumber' AND std_password ='$passWord'"; 
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
    
        
    $_SESSION ['std_number'] = $row['student_number'];
    $_SESSION ['std_name'] = $row['student_name'];
  echo $_SESSION ['std_number'];
    header("Location:home-page.php");

    }else {
       $error = "Your Login Name or Password is invalid";

       echo $error;
    }
 }

    
 //Get Form input v}alues 
if(isset($_REQUEST['stdnumber'])){

   
  
    $studentNumber = $_POST ['stdnumber'];
    $passWord = $_POST ['password'];

    processUserLogin($studentNumber, $passWord,  $conn);

}


// 




?>