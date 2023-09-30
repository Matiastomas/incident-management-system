<?php

require_once("database-connection.php");

 $conn;


 if(isset($_REQUEST['submit'])){

    //Get Form input values 
     $bankUserName = $_POST ['user_name'];
     $bankName= $_POST ['bank_name'];
     $position= $_POST ['position'];
     $department= $_POST ['department'];
     $bankUserPassword= $_POST ['password'];
     $query = "INSERT into bank_users  (username, bankname, position, Department, account_password) VALUES(' $bankUserName','$bankName', '$position', '$department', ' $bankUserPassword')";
      
      if (mysqli_query($conn, $query)) {
        echo "<p style='color:red'>New record created successfully</p>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
      
      
    }










?>