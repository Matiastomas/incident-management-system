<?php

require_once("database-connection.php");
 $conn;

function  getListOfSupervisoNames($conn){

    $query ="SELECT sup_name from  supervisor_account";

    if($result = mysqli_query($conn, $query)){

      if(mysqli_num_rows($result) > 0){
          
          while($row = mysqli_fetch_array($result)){
            
            echo "<option>". $row['sup_name'] ."</option>";  
              
          }
          mysqli_free_result($result);
      } else{

          echo "No records matching your query were found.";
      }
  } else{

      echo "ERROR: Could not able to execute";
  }
   
  // Close connection
  mysqli_close($conn);

}



?>