<?php
 include("Controllers/process-topic-acceptance.php");
?>
<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
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

    <?php
     include "./includes/nav.php";
     ?>
      <?php
     include "./includes/side-menu.php";
     
     ?>
        
        <main class="mt-5 pt-3">
  <div class="container-fluid">
  <div class="row">
      <div class="col-md-12 fw-bold fs-3">Update Incident Status</div>
    </div>
      <div class="main-section-create-account">
            <form method ="post">
               
                <input type="hidden" name="id" value="<?php echo trim($_GET["id"]);?>"/>
                <select class="select" name="incidentstatus">
                    <option  id="">Solved</option>
                    <option  id="">In Progress</option>
                </select> </br></br>
                <label>Provide Comments</label> </br>
                <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></br></br>
                <input type="submit" value="Submit" class="btn btn-dark" name ="submit">

            </form>
        </div>
  </div>
</main>
<!-- Main Content End -->

<!-- Scripts Start -->
<script src="./js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="./js/script.js"></script>
<script src="./js/dark-mode-switch.min.js"></script>
<!-- Scripts End -->
    </body>
</html>