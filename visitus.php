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

echo "  
  <div class='row'>
<div class='col-12'>
  <div class='jumbotron' style='margin-top:20px; margin-bottom:0px;'>

  <div class='container'>
    <h1 class='display-4 text-center'>Visit Us
</h1>
   
      <hr class=\"my-4\">
 
</div>
</div>
</div>
</div>


<div class='row'>
<div class='col-12'>

<div class='jumbotron' style='margin-top: 35px;'>

  <div class='container'>
<a href='https://armaghobservatoryplanetarium.ticketsolve.com/shows'>
<h1 class='display-4 text-center'>Book Tickets
    </a>
    
</h1>
</div>
</div>

</div>
</div>

<div class='row'>
<div class='col-12'>

<div class='jumbotron'>

  <div class='container'>
<a href='flipbooks.php'>
<h1 class='display-4 text-center'>Interactive Flipbooks
    </a>
    
</h1>
</div>
</div>

</div>
</div>


<div class='row'>
<div class='col-12'>

<div class='jumbotron'>

  <div class='container'>
<a href='showtimes.php'>
<h1 class='display-4 text-center'>Show times
    </a>
    
</h1>
</div>
</div>

</div>
</div>




<div class='row'>

<div class='col-12'>






<div class='jumbotron'>

  <div class='container'>
  
  
  
  
  
    
    <a href='visitus.php' data-toggle='modal' data-target='#pricesmodal'> <h1 class='display-4 text-center'>Prices
    
    
</h1></a>
 

<!-- Modal -->
<div class='modal' id='pricesmodal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered modal-lg' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalCenterTitle'>Prices</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <p style='font-size: 1.25rem;'>Exhibition Only</p>
      
      <div class='row'>
      <div class='col-6'>
      
      Exhibition Area Only
      
      
      </div>
      
      <div class='col-6'>
      
      £2
      
      </div>
      
      
      
</div>
      
      <br> <p style='font-size: 1.25rem;'>Show Prices </p> 
 	 	 
 	 	 ";


                    $prices_stmt = $mysqli->prepare("SELECT prices_title, prices_cost FROM prices");

    $prices_stmt->execute();

    $prices_stmtresult = $prices_stmt->get_result();

                    if($prices_stmtresult->num_rows === 0) exit ('No rows');
                    while ($row = $prices_stmtresult->fetch_assoc()){


                    $prices_title = $row["prices_title"];
                        $prices_cost = $row["prices_cost"];



 	 	 echo "
 	 	 
 	 	 <div class='row'>
 	 	 <div class='col-6'>
 	 	 
 	 	 $prices_title
 	 	 
</div>
 	 	 <br><br> 
 	 	 <div class='col-6'>
 	 	 
 	 	 £$prices_cost
 	 	 
</div>
 	 	 
 	 	 
 	 	 </div>
 	 	 
 	 	 
 	 	 
 	 	 
 	 	 
 	 	 
 	 	 
 	 	 
 	 	 
 	 	 ";
 	 	 }


 	 	 echo "

<br>
<p style='font-size: 1.25rem;'>Group Rates (Minimum 20 people)</p>
<div class='row'>
<div class='col-6'>



(Adult groups receive 10% discount with 20 or more people)




</div>


<div class='col-6'>
Adults: 
£7.50 per show <br> <br> 
Senior Citizens:
£5.50 per person <br> <br> 
Summer Schemes:
£5.50 per child <br><br> 

20% Discount with two or more shows



</div>


</div>







</div>


";

 	 	 echo " 
 	 	
 		 
      </div>
      
    </div>
  </div>
</div>
    
    
    
   
      
 
</div>
</div>



</div>


    
    
    
    <!-- Button trigger modal -->



";
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
