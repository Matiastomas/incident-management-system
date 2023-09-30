<?php

require_once ('database-connection.php');

// Process login method 

function processUserLogin($studentNumber, $conn){

    // Select student number and password fromstudent_account table
    
    $query = "SELECT * FROM student_registration_table  WHERE  student_number ='$studentNumber'"; 
   
   
    if(mysqli_query($conn, $query)){

       $addStudentNumber = "INSERT INTO auto_generated (Stdnumber) VALUES('$studentNumber')";
       if(mysqli_query($conn, $addStudentNumber)){
      
        echo $studentNumber;
       }

    } else {
      
        echo "gggg";


}
}


 //Get Form input values 
if(isset($_REQUEST['submit'])){

   
  
    $studentNumber = $_POST ['std_number'];
    

    processUserLogin($studentNumber, $conn);

}




// 




?>