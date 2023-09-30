<?php



require_once("database-connection.php");

function getSearchResult($conn){

    //Get Form input v}alues 
if(isset($_REQUEST['submit'])){

   
    $searchInput = $_POST ['topic'];
    
    $query ="SELECT * from  final_documentation where project_topic ='$searchInput'";
    if($result = mysqli_query($conn, $query)){
      if(mysqli_num_rows($result) > 0){
            

      while($row = mysqli_fetch_array($result)){
        echo "<p>" . $row['project_topic'] . "</p>";
          echo   $row['document_path'];
          echo "<p>" . $row['publish_at'] . "</p>";
          
                 
             
    
              
          }
        
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
}



?>