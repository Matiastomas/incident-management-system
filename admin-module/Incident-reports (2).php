<?php

   include("Controllers/submit-report-text.php");

?>
<?php



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
    

      <?php
        
        //include "./includes/nav.php";
     
      ?>
       
        <div class="search-secton">
		

<table id="example" class="table data-table" style="width:100%; height:400px;">
        <tr>
		   <th>Author Name</th>
		   <th>Title</th>
		   <th>Bank</th>
            
            <th>Content</th>
			<th>Incident pdf file</th>
            <th>Publish Date</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
			<td><?php echo $row['author_name']; ?></td>
<td><?php echo $row['incident_name']; ?></td>
<td><?php echo $row['author_organization']; ?></td>
<td><?php echo $row['inicdent_content']; ?></td>
<td><a href="http://localhost/incident-management-system/bank-users-module/pdf/<?php echo $row['document_path']; ?>" target="_blank">Read Report in Pdf </a></td>
<td><?php echo $row['publish_at']; ?></td>

            </tr>
        <?php } ?>
    </table>
	
        </div>
       
    </body>
</html>