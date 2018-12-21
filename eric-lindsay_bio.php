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
    

  </head>

  <body>
      
    
          <?php 
                navbar();
echo "
    
  <p></p>
<div class='jumbotron'>
  <h1 class='display-4'>Eric Lindsay</h1>

  <hr class='my-4'>
  
";
                                
$ericlindsayquery = "SELECT * FROM eric_lindsay";
          
        $ericlindsayresult = mysqli_query($conn, $ericlindsayquery);
            
                while ($row = mysqli_fetch_assoc($ericlindsayresult)){
                    if (mysqli_num_rows($ericlindsayresult) >0) {
                    
                    $lindsay_DOB = $row["lindsay_DOB"];
                    $lindsay_death = $row["lindsay_death"];
                    $lindsay_family = $row["lindsay_family"];
                    $lindsay_married = $row["lindsay_married"];
                    $lindsay_children = $row["lindsay_children"];
                    $lindsay_distinctions = $row["lindsay_distinctions"];
                    $lindsay_biography = $row["lindsay_biography"];
                    




echo "


                <p class='lead'> Born: $lindsay_DOB </p>
                    <p class='lead'> Death: $lindsay_death </p>
                        <p class='lead'> Family: $lindsay_family </p>
                            <p class='lead'> Married: $lindsay_married </p>
                                <p class='lead'> Children: $lindsay_children </p>
                                    <p class='lead'> Distintions: $lindsay_distinctions </p>
                                        <p> $lindsay_biography </p>
                                            
";

 



                    }
                    
                }
                    
                   
                    
            echo "</div>"        
  
  
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
