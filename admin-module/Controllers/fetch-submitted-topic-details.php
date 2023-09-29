<?php

require_once("database-connection.php");
 $conn;

function getProjectTopicReports($conn){

    $query ="SELECT * from  topic_submission";
    if($result = mysqli_query($conn, $query)){
      if(mysqli_num_rows($result) > 0){
          echo "<table id='example' class='table data-table' style='width:100%'>";
            echo "<thead>";
              echo "<tr>";
                  echo "<th>#</th>";
                  echo "<th style='width:2%;'>Name</th>";
                  echo "<th>student Number</th>";
                  echo "<th>Level</th>";
                  echo "<th>Topic</th>";
                  echo "<th>Email</th>";
                  echo "<th>Abstract and Problem Statement</th>";
                  echo "<th>Date</th>";
                  echo "<th>Status</th>";
                  echo "<th>Comment</th>";     
                  echo "<th>supervisor</th>";   
                  echo "<th>Action</th>";       
                 echo "</thead>";    
              echo "</tr>";
          while($row = mysqli_fetch_array($result)){
              echo "<tbody>";
              echo "<tr>";               
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['student_name'] . "</td>";
                  echo "<td>" . $row['student_number'] . "</td>";
                  echo "<td>" . $row['Academiclevel'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>". $row['projectTopicDoc'] . "</td>";
                  echo "<td>" . $row['publish_at'] . "</td>";
                  echo "<td>" . $row['SubStatus'] . "</td>";
                  echo "<td>" . $row['comments'] . "</td>";
                  echo "<td>" . $row['sup_name'] . "</td>";            
                  echo "<td>";
                  echo '<a href="topic-acceptance-status.php?id='. $row['id'] .'" class="btn btn-dark">Acceptance Status</a></br></br>';
                 
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
      echo "ERROR: Could not able to execute";
  }
   
  // Close connection
  mysqli_close($conn);

}



?>