<?php
        session_start();
         
      ?>
       
             <?php

$sess =  $_SESSION ['std_number'];
$studentNumberSession = intval($sess);

//var_dump($int);


require_once ('database-connection.php');

// Process login method 

function processUserLogin($studentNumber, $studentNumberSession, $conn){

    // Select student number and password fromstudent_account table
    $query = "SELECT * FROM  auto_generated WHERE id ='$studentNumber' AND  Stdnumber ='$studentNumberSession'"; 
   
    $result = mysqli_query($conn, $query) ;
    
    $count = mysqli_num_rows($result);
   
    if ($count == 1) {
        
        header("Location:mini-project-space-dashboard/index.php");
       

    } else {
        echo "<div class='form'>
              <h3>Incorrect Username/password.</h3><br/>
              <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
              </div>";
              
    }


}


 //Get Form input values 
if(isset($_REQUEST['submit'])){

   
  
    $studentNumber = $_POST ['code'];
   

    processUserLogin($studentNumber,$studentNumberSession,$conn);

}

?>
