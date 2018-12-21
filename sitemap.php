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
                                
                                $sitemapquery = "SELECT * FROM sitemap";
       
        $sitemapresult = mysqli_query($conn, $sitemapquery);
            
                while ($row = mysqli_fetch_assoc($sitemapresult)){
                    if (mysqli_num_rows($sitemapresult) >0) {
                        $sitemapname = $row["sitemap_section"];
                        $sitemap_hyperlink = $row["sitemap_url"];
                        
                        
               
                echo "
                        
     

                       <a href='$sitemap_hyperlink'>
                        <button type='button' class='btn btn-secondary btn-lg btn-block btn-outline-dark' style='margin-bottom: 5px;'> $sitemapname</button>
                
</a>
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
