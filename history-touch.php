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


    </script>

</head>

<body>

<?php
navbar();
?>

<div class="row">


    <?php

    $historycardstmt2 = $mysqli->prepare("SELECT hist_card_img_f, hist_card_img_hyper, hist_card_fronttext FROM hist_cards");

    $historycardstmt2->execute();

    $historycardresult2 = $historycardstmt2->get_result();

    if($historycardresult2->num_rows === 0) exit ('No rows');
    while ($row = $historycardresult2->fetch_assoc()){





        $hist_card_frontimg2 = $row["hist_card_img_f"];


        $hist_card_hyper2 = $row["hist_card_img_hyper"];
        $hist_card_fronttext2 = $row["hist_card_fronttext"];

        echo "
   
    <div class='col-12'>
    
    <a href='$hist_card_hyper2'> 
        <div class='card'>
            <img class='card-img-top img-responsive' src='$hist_card_frontimg2' alt='card image'>
<div class='card-body'>

<h4 class='card-title text-center'>$hist_card_fronttext2</h4>

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
