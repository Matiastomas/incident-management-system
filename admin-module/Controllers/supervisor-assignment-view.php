<?php

require_once("database-connection.php");
 $conn;

function getProjectTopicReportsToAssignSupervisor($conn){
   
  // Only fetch topic submission details for accepted topics
    $query ="SELECT * from  topic_submission where SubStatus ='Approved' ";
    if($result = mysqli_query($conn, $query)){
      if(mysqli_num_rows($result) > 0){
          echo "<table id='example' class='table data-table' style='width:100%'>";
            echo "<thead>";
              echo "<tr>";
                  echo "<th style='width:4%;'>#</th>";
                  echo "<th>student Name</th>";
                  echo "<th>Project Topic</th>";
                  echo "<th>Academic Level</th>";
                  echo "<th>Status</th>";
                  echo "<th>Assigned supervisor</th>";
                  echo "<th>Action</th>";               
                 echo "</thead>";    
              echo "</tr>";
          while($row = mysqli_fetch_array($result)){
              echo "<tbody>";
              echo "<tr>";

              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['student_name'] . "</td>";
              echo "<td>" . $row['project_topic'] . "</td>";
              echo "<td>" . $row['Academiclevel'] . "</td>";
              echo "<td>" . $row['SubStatus'] . "</td>";
              echo "<td>" . $row['sup_name'] . "</td>"; 
              echo "<td>";
              echo '<a href="assign-supervisor-form.php?id='. $row['id'] .'" class="btn btn-primary">Assign Supervisor</a>';

                echo "<td>";

                 
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