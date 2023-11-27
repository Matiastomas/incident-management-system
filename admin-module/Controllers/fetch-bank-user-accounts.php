<?php

require_once("database-connection.php");
 $conn;

function getAccountDetails($conn){

    $query ="SELECT  userid, username, bankname, position, Department, account_password  from  bank_users";
    if($result = mysqli_query($conn, $query)){
      if(mysqli_num_rows($result) > 0){
          echo "<table id='example' class='table data-table' style='width:100%'>";
            echo "<thead>";
              echo "<tr>";
                  echo "<th style='width:4%;'>#</th>";
                  echo "<th> User Name</th>";
                  echo "<th>Bank Name</th>";
                  echo "<th>Department</th>";
                  echo "<th>Position</th>";
                  echo "<th>Passwords</th>";
                  echo "<th>Action</th>";
              echo "</thead>";    
              echo "</tr>";
          while($row = mysqli_fetch_array($result)){
              echo "<tbody>";
              echo "<tr>";
                  echo "<td>" . $row['userid'] . "</td>";
                  echo "<td>" . $row['username'] . "</td>";
                  echo "<td>" . $row['bankname'] . "</td>";
                  echo "<td>" . $row['Department'] . "</td>";
                  echo "<td>" . $row['position'] . "</td>";
                  echo "<td>" . $row['account_password'] . "</td>";
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