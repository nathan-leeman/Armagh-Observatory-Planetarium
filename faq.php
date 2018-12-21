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
          
                echo "  <div class='row-fluid'>
              
            
                  <div class='col-12'>
                 
                      
                      <h4 class='card-title text-center' data-aos='fade-up'
                   data-aos-anchor-placement='top-bottom'>Fequently Asked Questions</h4>
                      
                     
                      </div>
                      </div>
                  </div>
                  
                  
                  
                  
             
          
       <div class='row-fluid'>
  
               
               <div class='col-12'>
          
                       <h6 class='card-title text-center' data-aos='fade-down' data-aos-anchor-placement='top-bottom'>Questions about Armagh Observatory</h6>
                 <br>
               </div>
                  </div>";
                
                
                
                $faqquery = "SELECT * FROM faq";
        
      
        
        $faqresult = mysqli_query($conn, $faqquery);
            
                while ($row = mysqli_fetch_assoc($faqresult)){
                    if (mysqli_num_rows($faqresult) >0) {
                    $question_id = $row["faq_id"];
                    $question_title = $row["faq_question_title"];
                    $question_description = $row["faq_question_text"];
                    
                    
                echo "
                
             <!--   <h6 class='text-center'>$question_id. $question_title</h6><br>
                    <div class='faq-description text-center'>$question_description</div>

                -->


 <div class='jumbotron' data-aos='fade-right'>
  <div class='container'>
    <h1 class='display-4'>$question_id.</h1>
    <p class='lead'>$question_title</p>
        </p>
        <p class=''>
           $question_description         
                    

              </p>



</div>
</div>




";
        
                
                
                    }
                    
                    
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
