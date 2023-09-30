<?php
   include("Controllers/submit-report-text.php")
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
						 
    
echo   $_SESSION['author_name'] ;
echo $_SESSION['author_position'] ;
echo $_SESSION['author_organization'];
//echo $_SESSION ['std_name'];
?>
        </div>
        <footer>
        Copyright © 2023  
        </footer>
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