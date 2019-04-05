<!DOCTYPE html>
<html lang="en">
<?php
//declare password

include("functions.php");
include("connection.php");
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AOP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



  </head>

  <body>
      
    <script type="text/javascript">

if (screen.width <= 600) {
document.location = "index-m.php";
}

</script>
      




   <div class="container">

      <!-- Heading Row -->
      <img src="img/AOP logo/AOP_logo.jpg" class="img-fluid" alt="Responsive image">
  <?php



  echo "
  
  
  
  <div class='jumbotron jumbotron-fluid'>
  <div class='container'>
  <a href='https://armaghobservatoryplanetarium.ticketsolve.com/shows'>
    <h1 class='display-4 text-center'>Book Tickets!</h1>
    </a>
  </div>
</div>
  
  
  
  
  
  
  
  
  
  ";














  ?>






      <?php
      echo "
          
      
    <!-- Call to Action Well -->
    
      <div class='card text-white bg-dark my-4 text-center'>
        <div class='card-body'> 
               
               
          <p class='text-white m-0'>Welcome to the Armagh Observatory & Planetarium website!</p>
           
        </div>

      </div>
   



 












</div>
         </div>  
          
      </div>
      
    
      
      
      
       <!-- Content Row -->
      
          
        
          " ; ?>
      </div>



      <div class="container">

          <div class="row">
        <?php

        $cardsquery = "SELECT * FROM index_cards";

        $cardsresult = mysqli_query($conn, $cardsquery);

                while ($row = mysqli_fetch_assoc($cardsresult)){

                    $id = $row["index-card-id"];
                    $cardimg = $row["index-card-img"];
                    $cardhyper = $row["index-card-hyper"];
               $buttonname = $row["index-card-button"];

        $cardesc = $row["index-card-desc"];

  echo "

<div class='col-6'>
 <a href='$cardhyper'>
    <div class='card'>

    


  <div class='hovereffect'>     
    <img class='card-img-top' src='$cardimg' >
      

      <div class='overlay'>
      
      <h2>$buttonname</h2>
         <a class='info' href='$cardhyper'> $cardesc  </a>
      
          </div>
              
      
      </div>
      </div>
     </a>
      </div>
      
     
     
  ";
     
     
}

    ?>
          
          </div></div>
          
      
          
          
         <?php
  footer();
         
         ?>
   
   
     
   

      
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
