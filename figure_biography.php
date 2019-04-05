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
          
       
       $var_value = $_POST['fig_id_pass'];
        $var_value2 = $_POST['fig_name_pass'];
      
                navbar();
echo "
    
  <p></p>
<div class='jumbotron'>
  <h1 class='display-4'>$var_value2</h1>

  <hr class='my-4'>
  
";
                                
$specificbioquery = "SELECT fig_name, fig_img, fig_DOB, fig_death, fig_family, fig_married, fig_children, fig_distinctions, fig_biography
        FROM hist_famous_figures WHERE fig_id = $var_value";
        $specificbioresult = mysqli_query($conn, $specificbioquery);
            
                while ($row = mysqli_fetch_assoc($specificbioresult)){
                    if (mysqli_num_rows($specificbioresult) >0) {
                    
                        
                        
                        
                    $fig_name = $row["fig_name"];
                    $fig_img = $row["fig_img"];
                    $fig_DOB = $row["fig_DOB"];
                    $fig_death = $row["fig_death"];
                    $fig_family = $row["fig_family"];
                    $fig_married = $row["fig_married"];
                    $fig_children = $row["fig_children"];
                    $fig_distinctions = $row["fig_distinctions"];
                    $fig_biography = $row["fig_biography"];
                    




echo "

 
                <p class='lead'> Born: $fig_DOB </p>
                    
                    <p class='lead'> Death: $fig_death </p>
                        <p class='lead'> Family: $fig_family </p>
                            <p class='lead'> Married: $fig_married </p>
                                <p class='lead'> Children: $fig_children </p>
                                    <p class='lead'> Distintions: $fig_distinctions </p>
                                        <p> Biogrpahy: $fig_biography </p>
                                            
";
/*
 echo "<div class='row'>";
$bioimgquery = "SELECT bio_img.bio_img_id, bio_img.bio_img_url, bio_img.bio_img_description
FROM bio_img INNER JOIN hist_famous_figures ON bio_img.bio_img_figure_id = hist_famous_figures.fig_id WHERE hist_famous_figures.fig_id = $var_value";
 $bioimgresult = mysqli_query($conn, $bioimgquery);
            
                while ($row = mysqli_fetch_assoc($bioimgresult)){
                    if (mysqli_num_rows($bioimgresult) >0) {
                    
                        
                        
                        
                    $bio_url = $row["bio_img_url"];

                    
                    echo "
                    
                    <div class='col-3'>
           
                <img src='$bio_url' alt='...' style='width:500px;' > 
    
                    
                    </div>
                    
                    
 

                  ";
                    
                    
                    
                    }
                }
                
                echo "</div>";
                
                
                
                */
                
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
