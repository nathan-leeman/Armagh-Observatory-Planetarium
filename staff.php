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
document.location = "staff-m.php";
}

</script>

  </head>

  <body>
      
    
          <?php 
             
      navbar();
      pagetitles();
              
 
 $departmentloop_id = array("Senior Managment"=>"1", "Research"=>"2", "Education"=>"3", "Corporate"=>"4");
    
foreach($departmentloop_id as $x => $x_value) {
       ?>  
        <div class="row"> <?php
               
               echo "
    <div class='col-12'>
                       <h4 class='card-title text-center' data-aos='fade-down' data-aos-anchor-placement='top-bottom'>$x</h4>
               </div>
               ";
               
               
               
               
               ?> </div>
            
            <?php
  $seniormanagementquery = "SELECT staff.staff_id, staff.staff_img, staff.staff_name, staff.staff_job_title, staff.staff_department_id, dept.department_id, dept.department, staff.staff_hyperlink 
FROM staff INNER JOIN dept ON staff.staff_department_id = dept.department_id WHERE dept.department_id = $x_value ORDER BY `staff`.`staff_id` ASC";

  $seniormanagementresult = mysqli_query($conn, $seniormanagementquery);
  
  echo "     <div class='row'>       ";
                 
    while ($row = mysqli_fetch_assoc($seniormanagementresult)){
        if (mysqli_num_rows($seniormanagementresult) > 0 ) {
        $staff_id = $row["staff_id"];
        $staff_img = $row["staff_img"];
        $staff_name = $row["staff_name"];
        $staff_job_title = $row["staff_job_title"];
        $staff_department = $row["department"];
        $staff_hyperlink = $row["staff_hyperlink"];
        
         echo "          
              
                        <div class='col-3'>
                   
                      

                 <div class='card text-center'  >
                     <img class='card-img-top' src='$staff_img' alt='Card image cap'>
  <div class='card-body'>
    <div class='card-title staff-names'>$staff_name</div>
    <p class='card-text'>$staff_job_title</p>
                 
                  </div> </div> </div>  ";
 
    }}
    
    echo "   </div>    ";
}
    

                ?>
          
        </div></div>
   <?php
   
             footer();
   
   ?>
  <script>
      
      
      
      
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });


      $(this).ekkoLightbox({
                alwaysShowClose: true,
                onShown: function() {
                    console.log('Checking our the events huh?');
                },
                onNavigate: function(direction, itemIndex)
                    console.log('Navigating '+direction+'. Current item: '+itemIndex);
                }
                ...
            });
      
      </script>
  
      
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   
    
    
    
    
    
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
