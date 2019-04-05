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
                pagetitles();
                
echo "
    <a href='staff.php'>
                <div class='jumbotron'>
  <div class='container'>
    <h1 class='display-4'>Staff & Students</h1>
    
  </div>
</div>
</a>

";

echo "
<div class='jumbotron'>
  <div class='container'>
    <h1 class='display-4'>AOP Vision</h1>
    ";
    vision_documents();

echo "
    


  </div>
</div>


";


echo "

     <div class='jumbotron'>
  <div class='container'>
    <h1 class='display-4'>Governance Structure</h1>
    <hr class='my-4'>
    ";

          annualreports();







echo "

<hr class='my-4'>

";
annualvisitation();

echo "

<hr class='my-4'>

";
businessplan();

echo "<hr class='my-4'>";

corporateplan();

echo "

<hr class='my-4'>


";

management_committee_minutes();

echo "<hr class='my-4'>
";
managementstatement_financialmem();

echo "



  </div>
</div>


<div class='jumbotron'>
  <div class='container'>
    <h1 class='display-4'>Publication Scheme & Privacy Notices</h1>
    <hr class='my-4'>

";

pubscheme_privacynotice();

echo " 



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
