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
      
           <!--
           <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <li class="nav-item">
          
          
          <?php
        /*
         $navquery = "SELECT * FROM navbar";
        
      
        
        $navbarresult = mysqli_query($conn, $navquery);
            
                while ($row = mysqli_fetch_assoc($navbarresult)){
                    
                    $navbarid = $row["navbar_id"];
                    $navbarname = $row["navbar_name"];
                    $navbarhyper = $row["navbar_hyper"];
               
    
  //Navigation 
   echo "
    
                
                  
                    
                   
   
  
 
        <a class='btn btn-light btn-lg' href='$navbarhyper'>$navbarname</a>
        
         ";
        
        }
     */
        
      ?>
      </li>
    
  </div>
</nav>
           
           
           
           
           
           
           
           
           
           
           
           
</div> -->
      
   <div class="container">
    
      <!-- Heading Row -->
      <img src="img/AOP logo/AOP_logo.jpg" class="img-fluid" alt="Responsive image">
  <?php 
  
  
  
  ?>

      <div class="row">
        <div class="col-12">
          
        <!--
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="https://apod.nasa.gov/apod/astropix.html">    <img class="d-block w-100" src="img/AOP logo/AOP_logo.jpg"></a>
                       
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/michael-inception.jpg" alt="planetarium2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/planetarium.jpg" alt="planetarium3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
  </a>
                
                
            </div> -->
            
            
        </div>
      </div>
               
        
          
      
      <?php
      echo "
          
      
    <!-- Call to Action Well -->
    
      <div class='card text-white bg-dark my-4 text-center'>
        <div class='card-body'> 
               
               
          <p class='text-white m-0'>Welcome to the Armagh Observatory & Planetarium website!</p>
           
        </div>

      </div>
   



  <div class='row'>
           <div class='col-12'>
           


<div class='jumbotron jumbotron-fluid'>
  <div class='container'>
    <h1 class='display-4'>Recent Changes:</h1>
    <p class='lead'>Added documents to About Section<br>
    Created a responsive careers & opportunities section <br>
    Removed redundant tables from the DB <br>
      Fix Dates on Annual Reports + MSFM link opening the wrong modal <br>
      Education Team - New Photos<br>
    Group Researchers together + group students together<br>
    Added Astronotes to navbar + homepage<br>
</p>
    <h1 class='display-4'>Currently Working On:</h1>
    <p class='lead'>
    Prepared Statements
   Fixed navbar while scrolling
    Fix staff.php looking stretched on mobile<br>
   Biography - Staff.php - Create template + create a few<br>
      
  <br>
    </p>
  </div>
</div>








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
    <img class='card-img-top' src='$cardimg' alt='whatever'>
      

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
