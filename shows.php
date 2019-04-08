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

//Query for show seasons







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



    echo"
                  
                  <div class='row'>
                  <div class='col-12'>
                 <h1><span class='badge badge-dark' style='margin-top: 10px; width:46%; margin-left:330px;'>Term Time - Tuesday - Friday</span></h1>
                    
             </div></div> 
             
             
             
             <div class='row no-gutters'>
             
             
             
             ";

$springshowsstmt =  $mysqli->prepare("SELECT shows_summer_title, shows_summer_img, shows_summer_times, shows_summer_date, shows_summer_hyper FROM shows_spring");
$springshowsstmt->execute();

$springshowsresult = $springshowsstmt->get_result();




if($springshowsresult->num_rows === 0) exit('No rows');
while ($row = $springshowsresult->fetch_assoc()){


    $shows_summer_title = $row['shows_summer_title'];
    $shows_summer_img = $row['shows_summer_img'];
    $shows_summer_times = $row['shows_summer_times'];
    $shows_summer_date = $row['shows_summer_date'];
    $shows_summer_hyper = $row['shows_summer_hyper'];

    echo "


    
  
  
  
  
  
  
  
              
               
               
               <div class='col-3' style='margin-left: 50px;'>
            <div class='card'>
   <a href='$shows_summer_hyper'>  <img src='$shows_summer_img' class='card-img-top' alt='...'></a>
    <div class='card-body'>
      <h3 class='card-title text-center'>$shows_summer_title</h3>
     
      <p class='card-text text-center'><small class='text-muted'>$shows_summer_date</small></p>
    </div>
  </div>
                      
               </div>
               
               
                
               <div class='col-2'>
            <div class='card'>
     <div class='card-body'>
      <h3 class='card-title text-center'>Times</h3>
     <p class=\"card-text text-center\">$shows_summer_times</p>
    <h3 class='card-title text-center' style='height: 215px;'></h3>
    </div>
  </div>
               
               
               
               
                
               
               
               
               
                  </div>
                 
                 
                  
                  
                  
                  ";


}

echo " </div></div>";


footer();
?>