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

  $seniormanagementquery = "SELECT staff.staff_id, staff.staff_img, staff.staff_name, staff.staff_job_title, staff.staff_department_id, dept.department_id, dept.department, staff.staff_hyperlink 
FROM staff INNER JOIN dept ON staff.staff_department_id = dept.department_id WHERE dept.department_id = 1 OR 2 OR 3 OR 4 ORDER BY `dept`.`department_id` ASC";

  $seniormanagementresult = mysqli_query($conn, $seniormanagementquery);
  
  echo "       <div class='card' style='width: 18rem;'>      ";
                
    while ($row = mysqli_fetch_assoc($seniormanagementresult)){
        if (mysqli_num_rows($seniormanagementresult) > 0 ) {
        $staff_id = $row["staff_id"];
        $staff_img = $row["staff_img"];
        $staff_name = $row["staff_name"];
        $staff_job_title = $row["staff_job_title"];
        $staff_department = $row["department"];
        $staff_hyperlink = $row["staff_hyperlink"];
        
        echo "
  <img class='card-img-top' src='$staff_img' alt='Card image cap'>
  <div class='card-body'>
    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>";
  
    }}
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
