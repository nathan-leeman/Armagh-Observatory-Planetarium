<?php session_start(); ?>
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

$seasonarray = array("Spring - Tuesday ");











echo "  <div class='row'>
              
            
                  <div class='col-12'>
                 
                      <div class=\"jumbotron jumbotron-fluid\" style='margin-top: 10px; margin-bottom: 2px;'>
  <div class=\"container\">
    <h1 class=\"display-4 text-center\">Show Times</h1>
   
  
  </div>
</div>
                     
                      
                      
                      </div>
                      </div>
                  ";
                  foreach( $seasonarray as $seasonvalue ) {




echo"
                  
                  <div class='row'>
                  <div class='col-12'>
                 <h1><span class='badge badge-dark' style='margin-top: 10px; width:46%; margin-left:330px;'>$seasonvalue</span></h1>
                    
             </div></div> ";
       }
echo "
       <div class='row no-gutters'>
  
  
  
       ";


$showtimesstmt =  $mysqli->prepare ("SELECT shows.show_img, shows.show_title, shows.show_date, shows.show_time, shows.show_hyper, showtimes_time, show_season_id, show_season_name
FROM shows INNER JOIN showtimes ON shows.show_time = showtimes_id INNER JOIN shows_season ON shows.show_season = show_season_id WHERE show_season_id = $show_season_id");
$showtimesstmt->execute();

$showtimesresult = $showtimesstmt->get_result();

                    if($showtimesresult->num_rows === 0) exit ('No rows');
                    while ($row = $showtimesresult->fetch_assoc()) {


                        $show_img = $row["show_img"];
                        $show_title = $row["show_title"];
                        $show_date = $row["show_date"];
                        $show_time = $row["showtimes_time"];
                        $show_hyper = $row["show_hyper"];
                        $show_img = $row["show_img"];

                        $show_season_name = $row["show_season_name"];
                        $show_season_id = $row["show_season_id"];
                        echo ";
  
  
  
  
              
               
               
               <div class='col-3' style='margin-left: 50px;'>
            <div class='card'>
    <img src='$show_img' class='card-img-top' alt='...'>
    <div class='card-body'>
      <h3 class='card-title text-center'>$show_title</h3>
     
      <p class='card-text text-center'><small class='text-muted'>$show_date</small></p>
    </div>
  </div>
                      
               </div>
               
               
                
               <div class='col-2'>
            <div class='card'>
     <div class='card-body'>
      <h3 class='card-title text-center'>Times</h3>
     <p class=\"card-text text-center\">$show_time</p>
   <a href='$show_hyper'>  <h3 class='card-title text-center' style='margin-top: 195px;'>Book</h3></a>
    </div>
  </div>
               
               
               
               
                  </div>
                  
               
                   "; }

                   echo "
                  </div>";
                  
                
                  



?>