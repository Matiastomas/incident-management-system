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

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

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
       
        <div class="search-section">
		<form method="Post">
             <input type="text" class="search-bar" name="title" placeholder="Incident Title"> </br></br>
			 <textarea class="text-area" placeholder="Type Incident Full Description"  name="content"></textarea>
			 </br></br>
             <input type="submit" value="Report Incident" name="submit">
			 </form>
			 <?php
						 
    

//echo $_SESSION ['std_name'];
?>

<table id="example" class="table data-table" style="width:100%; height:400px;">
        <tr>
		   <th>Author Name</th>
            <th>Title</th>
            <th>Content</th>
            <th>Publish Date</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
			<td><?php echo $row['author_name']; ?></td>
                <td><?php echo $row['incident_name']; ?></td>
                <td><?php echo $row['inicdent_content']; ?></td>
                <td><?php echo $row['publish_at']; ?></td>
            </tr>
        <?php } ?>
    </table>
	
        </div>
       
    </body>
    <script type = "text/javascript">
$(document).ready(function(){
	
	function load_unseen_notification(view = '')
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			data:{view:view},
			dataType:"json",
			success:function(data)
			{
			$('.dropdown-men').html(data.notification);
			if(data.unseen_notification > 0){
			$('.count').html(data.unseen_notification);
			}
			}
		});
	}
 
	load_unseen_notification();
 
 
	$(document).on('click', '.dropdown-toggle', function(){
	$('.count').html('');
	load_unseen_notification('yes');
	});
 
	setInterval(function(){ 
		load_unseen_notification();; 
	}, 5000);
 
});
</script>
</html>