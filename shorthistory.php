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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="lightbox/ekko-lightbox.css" rel="stylesheet" type="text/css"/>
<script src="lightbox/ekko-lightbox.js" type="text/javascript"></script>
  <a href="lightbox/ekko-lightbox.js.map"></a>
    <link href="css/small-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    

  </head>

  <body>
      
    

      

      <!-- Heading Row -->
      
      
 
          
          <?php 
          navbar();

  
  
  ?>
      
      
          <div class="row-fluid">
              
            
                  <div class="col-12">
                 
                      
                      <h4 class="card-title text-center" data-aos="fade-up"
                   data-aos-anchor-placement="top-bottom">Armagh Observatory - History</h4>
                      
                      
                      </div>
                      </div>
                  </div>
                  
                  
                  
                  
             
          
       <div class="row-fluid">
  
               
               <div class="col-12">
            
                       <h6 class="card-title text-center" data-aos="fade-down" data-aos-anchor-placement="top-bottom">C.J. Butler</h6>
               
               </div>
                  </div>
           
              
              <?php 
              
              
               $shorthistquery = "SELECT * FROM short_hist_jumbo";
        
      
        
        $shorthistresult = mysqli_query($conn, $shorthistquery);
            
                while ($row = mysqli_fetch_assoc($shorthistresult)){
                    if (mysqli_num_rows($shorthistresult) >0) {
                    $short_hist_id = $row["hist_jumbo_id"];
                    $short_hist_title = $row["short_hist_title"];
                    $short_hist_text_align = $row["short_hist_text_align"];
                    $short_hist_content = $row["short_hist_content"];
                    
                    echo "
               
              
              
              
              
           <div class='jumbotron' data-aos='fade-right'>
  <div class='container'>
    <h1 class='display-4 $short_hist_text_align'>$short_hist_id.</h1>
    <p class='lead $short_hist_text_align'>$short_hist_title</p>
        </p>
        <p class='$short_hist_text_align'>
           $short_hist_content         
                    

              </p>
   
              

              


 
 



  </div>
</div>
                           ";
                               

                        }    
                            
                } 
                            ?>
          
                  <!--<div class="jumbotron jumbotron-fluid"  data-aos="fade-left">
                   
  <div class="container">
      <h1 class="display-4  text-right">2.</h1> 
    <p class="lead  text-right">The Rise of Astronomy in the 18th Century</p>
  </div>
                   </a>
</div> -->
           
</div>
</div>
           
           <script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });


</script>
       
         <?php
  footer();
         
         ?>
      
   
   
     
   

      
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll

  // Settings that can be overriden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});

</script>




  </body>

</html>
