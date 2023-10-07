<?php

   include("Controllers/submit-report-text.php");

?>
<?php


// Check if the user is logged in (you can modify this part based on your authentication logic)
if (!isset($_SESSION['author_name'])) {
    header("Location: login.php"); // Redirect to the login page if the user is not logged in
    exit();
}

$conn;

// Execute the SELECT query to fetch data
$query = "SELECT * FROM incidents";
$result = mysqli_query($conn, $query);



?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/jquery.min.js"></script>
		<link rel="stylesheet" href="./css/bootstrap.min.css" />
		<script src="./js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body>
    

	<nav class="navbar navbar-expand-lg" style="background-color: #00008B;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item  active" href="home-page.php" style="color: #ffffff;">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item " href="incidents.php" style="color: #ffffff;">View Incidents</a>
    </div>
  </div>
</nav>   
       
        <div class="search-section">
		<form method="Post"  enctype="multipart/form-data">
             <input type="text" class="search-bar" name="title" placeholder="Incident Title"> </br></br>
			 <textarea class="text-area" placeholder="Type Incident Full Description"  name="content"></textarea>
			 </br></br>
			 <input type="file" class="select" name="pdf_file" accept=".pdf"
                 title="Upload PDF"/></br>
                </br>
             <input type="submit" value="Report Incident" name="submit">
			 </form>

	
        </div>
		<?php
        
		include "./includes/footer.php";
	  
	   ?>
    </body>
   
</html>