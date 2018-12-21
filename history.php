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
    <link href="css/small-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
      <script type="text/javascript">

if (screen.width <= 600) {
document.location = "history-m.php";
}

</script>

  </head>

  <body>
     
          <?php 
     navbar();
     pagetitles();
  ?> 
      
      <div class="row">
          
              
              <?php
              
              $histcardquery = "SELECT * FROM hist_cards";
        
      
        
        $histcardresult = mysqli_query($conn, $histcardquery);
            
                while ($row = mysqli_fetch_assoc($histcardresult)){
                    
                    $hist_card_id = $row["hist_card_id"];
                    $hist_card_frontimg = $row["hist_card_img_f"];
                   $hist_card_backimg = $row["hist_card_img_b"];
                   $hist_card_button = $row["hist_card_img_button"];
              $hist_card_hyper = $row["hist_card_img_hyper"];
              $hist_card_fronttext = $row["hist_card_fronttext"];
              ?>   
       <!--    <div class='col-6'>
 <div class='image-flip'  ontouchstart='this.classList.toggle('hover');'> 
    
    
    
<div class='mainflip'>
<div class='frontside'>
<div class='card' style='width:35rem;'>
<img class='card-img-top img- fluid' src='$hist_card_frontimg' alt='card image'>
<div class='card-body'>
<h4 class='card-title text-center'>$hist_card_fronttext</h4>

</div>
</div>
</div>
<div class='backside'>
<div class='card' style='width:35rem;'>
<img class='card-img-top img- fluid' src='$hist_card_backimg' alt='card image'>
<div class='card-body'>

<a href='$hist_card_hyper' class='btn btn-info btn-md'>$hist_card_button</a>
</div>

</div>
</div>
</div>
</div></div>  


CLOSING DIV FOR CONTAINER -- SEE THE FUNCTION navbar() TO SEE THE PLACEMENT
  OF CONTAINER DIV
  





       
--> 



<?php echo "
   
    <div class='col-6'>
    
    <a href='$hist_card_hyper'> 
        <div class='card'>
            <img class='card-img-top img-responsive' src='$hist_card_frontimg' alt='card image'>
<div class='card-body'>

<h4 class='card-title text-center'>$hist_card_fronttext</h4>

</div>




</div>
</div>




</a>



";
                }
        
      
         
          
   
          
          ?>  
      
      
      
   
     
 </div>
      </div>
      <?php
      
  footer();
         
         ?>   
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
