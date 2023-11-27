<?php
include("Controllers/submit-report-text.php");

// Check if the user is logged in (you can modify this part based on your authentication logic)
if (!isset($_SESSION['author_name'])) {
    header("Location: login.php"); // Redirect to the login page if the user is not logged in
    exit();
}

$conn; // Your database connection

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchBank = $_POST['bankName'] ?? '';
    $searchDate = $_POST['selectedDate'] ?? '';

    
    // Construct the query based on the provided search parameters
    $query = "SELECT * FROM incidents WHERE author_organization = '$searchBank' AND  publish_at='$searchDate'";


    // Execute the constructed query
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }
    if (mysqli_num_rows($result) == 0) {
      
      echo '<script>alert("No incidents found based on the provided criteria.");</script>';
       // If form is not submitted, fetch all incidents
    $query = "SELECT * FROM incidents";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }
  }
} else {
    // If form is not submitted, fetch all incidents
    $query = "SELECT * FROM incidents";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html>

    <head>
    <style>
    /* Basic styling for the form */
    .form {
      width: 80%;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }

    .form p {
      margin-bottom: 5px;
    }

    .form .form-group {
      margin-bottom: 15px;
    }

    .form .form-control {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form button {
      padding: 8px 15px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    /* Responsive styling for smaller screens */
    @media (max-width: 768px) {
      .form {
        width: 90%;
      }
    }
  </style>
        <title></title>
        <title></title>
        <meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Bootstrap CSS End -->
<!-- Main CSS -->
<link rel="stylesheet" href="./css/style.css">
<!-- Main CSS End -->
<!-- Bootstrap Icons Start -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<!-- Bootstrap Icons End -->
<link rel="stylesheet" href="./css/dark-mode.css">
    </head>
    <body>
    

    <nav class="navbar navbar-expand-lg" style="background-color: #00008B; a:color: #ffffff;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item  active" href="home-page.php" style="color: #ffffff;">Home</a>
      <a class="nav-item " href="incidents.php" style="color: #ffffff;">View Incidents</a>
    </div>
  </div>
</nav>   

 

		<main class="mt-5 pt-3">

    <!-- Existing HTML code -->

<!-- ... -->
<div class="row mt-4">
  <div class="col-md-6">
    <form action="" method="Post" class="form">
      <div class="form-group">
        <p>Enter Bank Name:</p>
        <input type="text" class="form-control" id="bankName" name="bankName" placeholder="Enter bank name">
      </div>
      <div class="form-group">
        <p>Select Date:</p>
        <input type="date" class="form-control" id="selectedDate" name="selectedDate">
      </div>
      <button type="submit" class="btn btn-primary">Search For  Incidents</button>
    </form>
  </div>
</div>
<!-- ... -->

  <div class="container-fluid">
  <div class="row">
      <div class="col-md-12 fw-bold fs-3">Incident Report</div>
    </div>
          <div class="card-body">
            <div class="table-responsive">
		

<table id="example" class="table data-table" style="width:100%; height:400px;">
        <tr>
		   <th>Author Name</th>
           <th>Bank</th>
		   <th>Incident Title</th>            
            <th>Content</th>
            <th>Status</th>
            <th>Comments</th>
            <th>Publish Date</th>
            <th>Incident pdf file</th>
            <th>Action</th>
            
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
            <td><?php echo $row['author_name']; ?></td>
            <td><?php echo $row['author_organization']; ?></td>
<td><?php echo $row['incident_name']; ?></td>
<td><?php echo $row['inicdent_content']; ?></td>
<td><?php echo $row['Incidentstatus']; ?></td>
<td><?php echo $row['Comments']; ?></td>
<td><?php echo $row['publish_at']; ?></td>

<td><a href="http://localhost/incident-management-system/bank-users-module/pdf/<?php echo $row['document_path']; ?>" target="_blank">Read Report in Pdf</a></td>

<td>
    <a href="update-incident-status.php?id=<?php echo $row['incident_id']; ?>" class="btn btn-dark">Update Incident Status</a><br><br>
</td>

            </tr>
        <?php } ?>
    </table>
	
    </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</main>
<?php
        
        include "./includes/footer.php";
        
         ?>
    </body>
   <!-- Main Content End -->

<!-- Scripts Start -->
<script src="./js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="./js/script.js"></script>
<script src="./js/dark-mode-switch.min.js"></script>
<!-- Scripts End -->
</html>