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
                
                echo "";
 $foi_titlesquery = "SELECT * FROM foi_section";
                $foi_titlesresult = mysqli_query($conn, $foi_titlesquery);
                
                while ($row = mysqli_fetch_assoc($foi_titlesresult)){
                    
                        $foi_section_id = $row['foi_section_id'];
                        $foi_section_title = $row['foi_section_title'];
                        
                
                
                
                echo "
                    

              <div class='jumbotron'>
  <div class='container'>
 
    <h1 class='display-4'>$foi_section_title</h1>
    <hr class='my-4'>
      <p class='lead'> Text/Document Links go here </p>


             </div>
</div>    ";
                }
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
echo " 
<div class='row-fluid'>
              
            
                  <div class='col-12'>
                 
                      
                      <h4 class='card-title text-center' data-aos='fade-up'
                   data-aos-anchor-placement='top-bottom'>Data Protection Act and Freedom of Information Act Policy Documents</h4>
                      
                      
                      </div>
                      </div>
                  
                  
    
       <div class='row-fluid'>
  
               
               <div class='col-12'>
            
                       <h6 class='card-title text-center' data-aos='fade-down' data-aos-anchor-placement='top-bottom'>Click on the documents below to open them</h6>
               
               </div>
                  </div>


    
      <div class='row'>
 <table class='table table-bordered'>
  <thead>
    <tr>
    
      <th scope='col'>Document</th>
      <th scope='col'>Format</th>
      <th scope='col'>Download</th>
    </tr>
  </thead>
  <tbody>
      
    


                ";


 $dpafoidocsquery = "SELECT * FROM foi WHERE foi_id BETWEEN 1 AND 2";
                $dpafoidocsresult = mysqli_query($conn, $dpafoidocsquery);
                
                while ($row = mysqli_fetch_assoc($dpafoidocsresult)){
                    
                        $foi_id = $row['foi_id'];
                        $foi_doc_name = $row['foi_document_name'];
                        $foi_doc_format = $row['foi_document_format'];      
                        $foi_doc_hyper = $row['foi_document_hyperlink'];
                       
      
echo "
    <tr>
    <td>$foi_doc_name</td>
      <td>$foi_doc_format</td>
      <td><a href='$foi_doc_hyper'><i class='fas fa-file-alt'></i></a></td>
    </tr>
"; 

                }
echo "
</tbody>
</table>
</div>
</div>";



echo "
                    </div>
                  <div class='row-fluid'>
              
            
                  <div class='col-12'>
                 
                      
                      <h4 class='card-title text-center' data-aos='fade-up'
                   data-aos-anchor-placement='top-bottom'>Some of the Documents Available under the Freedom of Information Act</h4>
                      
                      
                      </div>
                      </div>
                  
                  
             
          
       <div class='row-fluid'>
  
               
               <div class='col-12'>
            
                       <h6 class='card-title text-center' data-aos='fade-down' data-aos-anchor-placement='top-bottom'>Click on the documents below to open them</h6>
               
               </div>
                  </div>
                  


      "; echo "
          <div class='col-12'>
 <table class='table table-bordered'>
  <thead>
    <tr>
    
      <th scope='col'>Document</th>
      
      <th scope='col'>Format</th>
      <th scope='col'>Download</th>
    </tr>
  </thead>
  <tbody>";
               
                for ($foiidpart = 2; $foiidpart <=6 ; $foiidpart++) {

 $dpafoidocsquery = "SELECT * FROM foi INNER JOIN foi_section ON foi.foi_section_id = foi_section.foi_section_id WHERE foi_section.foi_section_id = $foiidpart";
                $dpafoidocsresult = mysqli_query($conn, $dpafoidocsquery);
                
                while ($row = mysqli_fetch_assoc($dpafoidocsresult)){
                    
                        $foi_id = $row['foi_id'];
                        $foi_doc_name = $row['foi_document_name'];
                        $foi_doc_format = $row['foi_document_format'];      
                        $foi_doc_hyper = $row['foi_document_hyperlink'];
                        
    
                        
                        
                        
echo "<tr>
   
    <td>$foi_doc_name</td>
      <td>$foi_doc_format</td>
      <td><a href='$foi_doc_hyper'><i class='fas fa-file-alt'></i></a></td>
    </tr>
   
 


  "; 
    }
                
      
                  
                
                }
                


echo "
 </tbody>
</table>
</div>
</div>


                
                ";
                
          
  ?> 
           
         <?php
  footer();
         
         ?>
      
   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
