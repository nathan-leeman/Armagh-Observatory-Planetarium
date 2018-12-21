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
                
                ?>
      
      <div class="row-fluid">
              
                  <div class="col-12">
                 
                      <h4 class="card-title text-center" data-aos="fade-up"
                   data-aos-anchor-placement="top-bottom">Famous Figures</h4>
                      
                      </div>
                      </div>
                  </div>
                  
                   <div class="row-fluid">
  
               
               <div class="col-12">
            
                       <h6 class="card-title text-center" data-aos="fade-down" data-aos-anchor-placement="top-bottom">The following people were involved in the runnning, research and engineering of Armagh Observatory </h6>
               
               </div>
                  </div>
           
      <?php
          
$shorthistquery = "SELECT * FROM hist_famous_figures";
          
        $shorthistresult = mysqli_query($conn, $shorthistquery);
            
                while ($row = mysqli_fetch_assoc($shorthistresult)){
                    if (mysqli_num_rows($shorthistresult) >0) {
                    $famous_fig_id = $row["fig_id"];
                    $famous_fig_name = $row["fig_name"];
                    $famous_fig_img = $row["fig_img"];
                    $famous_fig_description = $row["fig_brief_description"];
                    $famous_fig_button = $row["fig_button"];
                    $famous_fig_hyperlink = $row["fig_hyperlink"];
                    $famous_fig_text_align = $row["fig_text_align"];
                    
                    echo "
               
           <div class='jumbotron' data-aos='fade-right'>
  <div class='container'>
  
    <h1 class='display-4 $famous_fig_text_align'>$famous_fig_name</h1>
        
    <p class='lead $famous_fig_text_align'>$famous_fig_description</p>
      <p class='$famous_fig_text_align'>  <img src='$famous_fig_img' alt='...' class='img-thumbnail'> </p>
        <p class='$famous_fig_text_align'>
             
              
<form method='post' action='$famous_fig_hyperlink'>
<input type='hidden' name='fig_id_pass' value='$famous_fig_id'>
    <input type='hidden' name='fig_name_pass' value='$famous_fig_name'>
<input type='submit' class='$famous_fig_text_align btn btn-outline-dark' <a href='$famous_fig_hyperlink' value='$famous_fig_button' >
</form>
                   </a>

              </p>
   
          
  </div>
</div>
                           ";
                               

                        }    
                            
                } 
  
  
  ?> 
           
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
