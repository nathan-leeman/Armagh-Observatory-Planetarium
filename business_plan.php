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

echo "  <div class='row-fluid'>
              
            
                  <div class='col-12'>
                 
                      
                      <h4 class='card-title text-center' data-aos='fade-up'
                   data-aos-anchor-placement='top-bottom'>Observatory Business Plans/Operational Plans</h4>
                      
                      
                      </div>
                      </div>
                  </div>
                  
                  
                  
                  
             
          
       <div class='row-fluid'>
  
               
               <div class='col-12'>
            
                       <h6 class='card-title text-center' data-aos='fade-down' data-aos-anchor-placement='top-bottom'></h6>
               
               </div>
                  </div>
  <div class='container'>
   <div class='row'>";
                    
                  ?>      
      
      
         
        <?php
        
        $cardsquery = "SELECT * FROM business_plan";
        
        $cardsresult = mysqli_query($conn, $cardsquery);
            
                while ($row = mysqli_fetch_assoc($cardsresult)){
                    
                    $bp_id = $row["bp_id"];
                    $bp_year = $row["bp_year"];
                    $bp_hyper = $row["bp_hyper"];
            
        
     
  echo "
      

<div class='col-6'>
 
    <div class='card'>
 <a href='$bp_hyper'>
     
    
    <h2 class='text-center'>$bp_year</h2>
      
           </a>
      </div>
      

      </div>
      
     
  ";
     
     
}
echo "
</div>
</div>




";
    ?>
          
          
          



  
           

         <?php
  footer();
         
         ?>
      
   
   
     
   

      
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
