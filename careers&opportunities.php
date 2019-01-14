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
   


<div class='jumbotron'>
  <div class='container'>
    <h1 class='display-4'>Current Vacancies</h1>
     <hr class='my-4'>
  </div>
  
</div>

";

$careersquery = "SELECT * FROM careers_opport";
        
        $careersresult = mysqli_query($conn, $careersquery);
        
                while ($row = mysqli_fetch_assoc($careersresult)){
                    
                    $career_id = $row["career_id"];
                    
                    $career_title = $row["career_title"];
               $career_salary = $row["career_salary"];
        $career_brief_description = $row["career_brief_description"];
        $career_closing_date = $row["career_closing_date"];
       // $career_full_description = $row["career_full_description"]; 
        


echo "

<div class='jumbotron'>
  <div class='container'>
    <h1 class='display-4'>$career_title</h1>
     <hr class='my-4'>
     
     <p class='lead'>$career_brief_description</p>
     <p class='lead'>Salary: $career_salary</p>
     <p class='lead'>Closing Date: $career_closing_date</p>     

<a href='careerpost.php?id=$career_id'>
<button type='button' class='btn btn-outline-success btn-lg'>APPLY</button>
</a>
</p>
     
  </div>
  
</div>
"; 

                }
                
                echo "
   <div class='jumbotron'>
  <div class='container'>
    <h1 class='display-4'>Recruitment Policy</h1>
    <p class='lead'>Read our recruitment policy here </p>
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
