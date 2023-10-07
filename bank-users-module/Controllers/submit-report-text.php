<?php

session_start();

//<?php echo $_SESSION ['admin_name'];

require_once("database-connection.php");

 $conn;


 if (isset($_POST['submit'])) {


    //Get Form input values 
     $incidentTitle = $_POST ['title'];
     $incidentContent= $_POST ['content'];
     $publish_at =  date('y/m/d');
     $authorName= $_SESSION ['author_name'];
     $authorPosition = $_SESSION ['author_position'];
     $authorOrganization = $_SESSION ['author_organization'];
     
     if (isset($_FILES['pdf_file']['name']))
     {

      $file_name = $_FILES['pdf_file']['name'];
      $file_tmp = $_FILES['pdf_file']['tmp_name'];
     move_uploaded_file($file_tmp,"./pdf/".$file_name);

     
     
    $query = "INSERT into incidents (incident_name, inicdent_content, publish_at, author_name, author_position, author_organization,document_path) VALUES('$incidentTitle','$incidentContent','$publish_at','$authorName','$authorPosition', '$authorOrganization','$file_name')";
      
      if (mysqli_query($conn, $query)) {
        echo "<p style='color:green'>New record created successfully</p>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      //mysqli_close($conn);
      
      
    }else{

      echo "i am not working";
    }



  }







?>