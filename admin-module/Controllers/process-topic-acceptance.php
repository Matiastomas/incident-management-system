<?php

require_once("database-connection.php");

 $conn;

if(isset($_REQUEST['id']) && !empty($_POST["id"])){
   
  
// Get StudentTOPICID  from hidden input 
//Get Accet/rejct value from select
//Get Comments
    
$studentProjectTopicId = $_POST["id"];
$acceptanceStatus = $_POST ["topicstatus"];
$comment = $_POST ['comment'];
  if (!empty($acceptanceStatus)){
    
      $sql = "UPDATE topic_submission SET subStatus ='$acceptanceStatus', Comments='$comment' WHERE id='$studentProjectTopicId'";

      if (mysqli_query($conn, $sql)) {
        
        header("location:project-topics-report.php");
    
        exit();

      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
      
      mysqli_close($conn);
     
          
    }
   
} 

?>