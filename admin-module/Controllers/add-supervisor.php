<?php

require_once("database-connection.php");

 $conn;


 if(isset($_REQUEST['submit'])){

    //Get Form input values 
     $supervisorName = $_POST ['sup_name'];
     $supervisorPassword= $_POST ['sup_password'];
     $query = "INSERT into supervisor_account  (sup_name, sup_password) VALUES('$supervisorName','$supervisorPassword')";
      
      if (mysqli_query($conn, $query)) {
        echo "<p style='color:red'>New record created successfully</p>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
      
      
    }










?>