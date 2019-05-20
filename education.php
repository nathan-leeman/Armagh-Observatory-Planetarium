<!DOCTYPE html>
<html lang="en">
<?php
//declare password

include("functions.php");
include("connection.php")
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AOP</title>

    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>


</head>

<body>


<?php
navbar();

echo "
<div class='jumbotron' style='margin-top: 10px;'>

  <div class='container'>
    <h1 class='display-4'>Education/Outreach
</h1>
<hr class='my-4'>

 


  

</div>
</div>


<div class='jumbotron' style='margin-top: 10px;'>

  <div class='container'>
  <a href='https://armaghop.sharepoint.com/:f:/s/A-LevelPhysics/EjBx8OQmRbBOlVinxA0ClSABPIzsDvekpdqeTzc03AhyVg?e=ZO7MfH'>
  <h1 class='display-4'>A Level - Physics Astronomy Course
</h1>
    


 </a>


  

</div>
</div>


<div class='jumbotron' style='margin-top: 10px;'>

  <div class='container'>
  <a href='humanorrery.php'>
  <h1 class='display-4'>Human Orrery
</h1>
    


 </a>


  

</div>
</div>


<div class='jumbotron' style='margin-top: 10px;'>

  <div class='container'>
  <a href='' data-toggle='modal' data-target='#exampleModalCenter'>
  <h1 class='display-4'>Crescent Moon Competition
</h1>
    


 </a>
<!-- Modal -->
<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalCenterTitle'>Crescent Moon Competition</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <p class='lead text-center'>Please download the poster below and read the information</p>
      <a href='education/AOP-school-competition-poster.pdf'>
      <p class='lead text-center'>Download Poster </p></a>
      <a href='education/AOP-moon-competition-templates.pdf'>
        <p class='lead text-center'>Download Templates </p>  </a>
     
        
      </div>
      <div class='modal-footer text-center'>
        
         <a href='education/AOP-school-competition-poster.pdf'>
        <img src='education/AOP-school-competition-poster.jpg' style='width: 470px;'></a>
        
      </div>
    </div>
  </div>
</div>







  <a href='education/AOP-moon-competition-templates.pdf'></a>

</div>
</div>


";

?>

</div>
<?php
footer();

?>







<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
