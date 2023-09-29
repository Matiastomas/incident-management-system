<?php

require_once("database-connection.php");

 $conn;


if(isset($_REQUEST['id']) && !empty($_POST["id"])){
   
  
// Get StudentTOPICID  from hidden input 
//Get Accet/rejct value from select
//Get Comments
    
$studentProjectTopicId = $_POST["id"];
$supervisorname = $_POST ["supervisorname"];

  if (!empty($studentProjectTopicId)){
     
      $sql = "UPDATE topic_submission SET sup_name ='$supervisorname' WHERE id='$studentProjectTopicId'";
      if (mysqli_query($conn, $sql)) {
        
        header("location:assign-supervisor.php");
    
        exit();

      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
      
      mysqli_close($conn);
     
          
    }
   
}

?>