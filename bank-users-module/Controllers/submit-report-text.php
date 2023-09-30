<?php

session_start();

//<?php echo $_SESSION ['admin_name'];

require_once("database-connection.php");

 $conn;


 if(isset($_REQUEST['submit'])){


    //Get Form input values 
     $incidentTitle = $_POST ['title'];
     $incidentContent= $_POST ['content'];
     $publish_at =  date('y/m/d');
     $authorName= $_SESSION ['author_name'];
     $authorPosition = $_SESSION ['author_position'];
     $authorOrganization = $_SESSION ['author_organization'];
     
     $query = "INSERT into incidents (incident_name, inicdent_content, publish_at, author_name, author_position, author_organization) VALUES('$incidentTitle','$incidentContent','$publish_at','$authorName','$authorPosition', '$authorOrganization')";
      
      if (mysqli_query($conn, $query)) {
        echo "<p style='color:green'>New record created successfully</p>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
      
      
    }










?>