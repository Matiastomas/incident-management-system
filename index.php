<?php
   
   //include("Controllers/process-login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index-style.css">
     <link rel="stylesheet" href="css/style.css">
    <title>INCIDENT  MANAGEMENT SYSTEM</title>
</head>
<body>
   
    <?php
          include 'includes/header.php';
       ?>
      
    </div>
    <div class="form-container">
        <h2>Login</h2>
        <form method="Post">
        <input type="radio" name="user" id="red" value="student">
    <label for="supervisor">Bank Users</label>
    <input type="radio" name="user" id="green" value="supervisor">
    <label for="green">Admin</label>
   </br></br>   
        <input type="text" class="input-text-shape-login input-size-1" name="username" placeholder="User Name"> <br/><br/>
        <input type="text" class="input-text-shape-login input-size-1" name="password" placeholder="Password"> <br/><br/>
   
        
        <input type="submit" class="login-button-size"  name ="" value="Login">
        </form>
        
    </div>

  <div class="footer">
  <?php
          include 'includes/footer.php';
       ?>
</div>
</body>
</html>