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
    

    <!-- Custom styles for this template -->
    <link href="lightbox/ekko-lightbox.css" rel="stylesheet" type="text/css"/>
    <script src="lightbox/ekko-lightbox.js" type="text/javascript"></script>
  
    <link href="css/small-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </head>

  <body>
      
    
          <?php 
                navbar();
                pagetitles();
  
  ?> 
           
      
      
      <?php
      
      echo "
          
<div class='jumbotron'>
  <div class='container'>
    <h1 class='display-4'>Research at Armagh Observatory & Planetarium</h1>
   


";

$research_jumboquery = "SELECT * FROM research_jumbo";
        
        $research_jumbo_result = mysqli_query($conn, $research_jumboquery);
           
                while ($row = mysqli_fetch_assoc($research_jumbo_result)){
                    
                    $research_jumbo_id = $row["research_jumbo_id"];
                    $research_jumbo_title = $row["research_jumbo_title"];
                    $research_jumbo_text = $row["research_jumbo_text"];
                    $research_jumbo_img = $row["research_jumbo_img"];
                    $research_jumbo_img_position = $row["research_jumbo_img_position"];
                    
                    
                    
                    
                    echo "<hr class='my-4'>
   <p>$research_jumbo_text</p>
  

";
                    
      }

echo "</div>
</div>";




      echo "<a href='published/published_index.php'>
          <div class='jumbotron'>

  <div class='container'>
    <h1 class='display-4 text-center'>Staff & Student Pages</h1>


      
</div>
</div>
</a>";
      
      
      
      
      
      
 $cardsquery = "SELECT * FROM research_cards";
        
        $cardsresult = mysqli_query($conn, $cardsquery);
            echo "<div class='row'>";
                while ($row = mysqli_fetch_assoc($cardsresult)){
                    
                    $research_card_id = $row["research_card_img"];
                    $research_card_img = $row["research_card_img"];
                    $research_card_text = $row["research_card_text"];
               $research_card_position = $row["research_card_position"];
        $research_card_button = $row["research_card_button"];
        $research_card_hyperlink = $row["research_card_hyperlink"];
        
        
    echo "
        


<div class='col-12'>

<a href='$research_card_hyperlink'>

<div class='jumbotron'>
  <div class='container'>
    <h1 class='display-4'>$research_card_text</h1>
<hr class='my-4'>
   
      
</div>
</div>

 </a>
</div>
";
        echo " 
";
                }
                
                echo "</div>";
                
                
                
      ?>
      
     

   <?php
      
      
      echo "
<a id='student_applications'>
<div class='jumbotron'>

  <div class='container'>
    <h1 class='display-4'>Student Applications
</h1>
<hr class='my-4'>
   <p>We offer positions for PHD students at Armagh Observatory.  

Application information for 2019 are available <a href='careers&opportunities.php'> here</a></p>
      
</div>
</div>
</a>




      
      
      ";
      
      /*RESEARCH PHOTOS GO HERE
      
       <div class='row'>
            <div class='col-4'>
            <a href='https://unsplash.it/1200/768.jpg?image=250' data-toggle='lightbox' data-title='A random title' data-footer='A custom footer text'>
    <img src='https://unsplash.it/600.jpg?image=250' class='img-fluid'>
</a>
</div>



</div>
      
      */
      
      
      
      
      
      ?>
      
      
         </div>

      
      
      
      
  
         <?php
  footer();
         
         ?>
         
      
      
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
      
      $('#popoverData').popover();
$('#popoverOption').popover({ trigger: "hover" });

</script>

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
