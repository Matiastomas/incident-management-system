<?php

require_once("database-connection.php");
 $conn;

function getProgressReportDetails($conn){

    $query ="SELECT  id, sup_name, sup_password, nameassignedStudents  from  supervisor_account";
    if($result = mysqli_query($conn, $query)){
      if(mysqli_num_rows($result) > 0){
          echo "<table id='example' class='table data-table' style='width:100%'>";
            echo "<thead>";
              echo "<tr>";
                  echo "<th style='width:4%;'>#</th>";
                  echo "<th>Supervisor's User Name</th>";
                  echo "<th>Password</th>";
                  echo "<th>Assigned Students</th>";
                  echo "<th>Action</th>";
              echo "</thead>";    
              echo "</tr>";
          while($row = mysqli_fetch_array($result)){
              echo "<tbody>";
              echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['sup_name'] . "</td>";
                  echo "<td>" . $row['sup_password'] . "</td>";
                  echo "<td>" . $row['nameassignedStudents'] . "</td>";
                  echo "<td><a href='' class='btn .me-5 btn-danger'>Delete Account</a></br></br><a href='' class='btn btn-primary'>Update Account</a></td>";
                 
              echo "</tr>";

              
          }
          echo "</tbody>";
          echo "</table>";
          // Free result set
          mysqli_free_result($result);
      } else{
          echo "No records matching your query were found.";
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
   
  // Close connection
  mysqli_close($conn);

}



?>