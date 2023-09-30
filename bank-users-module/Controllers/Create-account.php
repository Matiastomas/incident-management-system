<?php
require_once("database-connection.php");

 $conn;

// Register/create student account Students
function registerStuduents($studentName, $studentNumber, $course, $academicLevel, $passWord, $conn){

      
      $query = "INSERT into student_account (student_name, student_number, course,  academic_level, std_password) VALUES('$studentName', '$studentNumber', '$course', '$academicLevel', '$passWord')";
      
      if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
      
      
    }



if(isset($_REQUEST['username'])){

//Get Form input values 
$studentName = $_POST['username'];
$studentNumber = $_POST ['stdnumber'];
$course = $_POST ['courses'];
$academicLevel= $_POST['levels'];
$passWord = $_POST ['password'];


//Call registerStudents Function 

registerStuduents($studentName, $studentNumber, $course, $academicLevel, $passWord, $conn);



}





?>