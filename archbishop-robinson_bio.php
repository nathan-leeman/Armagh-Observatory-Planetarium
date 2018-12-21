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
                
?> <div class='row-fluid'>
              
            
                  <div class='col-12'>
                 
                      
                      <h4 class='card-title text-center' 
                   data-aos-anchor-placement='top-bottom'>Archbishop Robinson</h4>
                      
                      
                      </div>
                      </div> <?php
                      
  $archbishopquery = "SELECT * FROM archbishop_robinson";
        
      
        
        $archbishopresult = mysqli_query($conn, $archbishopquery);
            
                while ($row = mysqli_fetch_assoc($archbishopresult)){
                    
               
                    $arch_img = $row["arch_image"];
                  
                    $arch_desc = $row["arch_desc"];
               
                    
                    
                    
                    echo "
                        

                     



<div class='jumbotron jumbotron-fluid jumbotron-img text-center'>
  <div class='container'>
   <img src='$arch_img' alt='...' class='img-thumbnail-bios'>
    <p class='lead text-center'>$arch_desc</p>
  </div>
</div>       
                    
                    
                    
                    
                    
                    
                    
                    
                    ";
  
   }
                    
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
