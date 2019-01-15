



<?php

function connection(){

    include("connection.php");




}

function connectcheck(){
    include("connection.php");
    if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);

    }


}


function navbar() {
    include("connection.php");
    connectcheck();
    echo"
    
    

    <div class='container'>
   
      <!-- Heading Row -->
      <div class='row'>
      <div class='col-12'>
      <img src='/armaghobservatoryplanetarium/img/AOP logo/AOP_logo.jpg' class='img-fluid' alt='Responsive image'>
     </div>
     </div>

      

          ";
    $navbarstmt =  $mysqli->prepare("SELECT navbar_name, navbar_hyper FROM navbar");
    $navbarstmt->execute();

    $navbarresult = $navbarstmt->get_result();

   echo "      <div class='row'>  <div class='col-12 text-center'>";


                if($navbarresult->num_rows === 0) exit('No rows');
                while ($row = $navbarresult->fetch_assoc()){


                    $navbarname = $row['navbar_name'];
                    $navbarhyper = $row['navbar_hyper'];


  //Navigation
                    echo "
                     
  <div class='btn-group  btn-group-lg' role='group' data-spy='affix'>
  
    <a class='btn btn-outline-dark' href='$navbarhyper' role='button'>$navbarname</a>
                  </div>
             
   
   ";
                }
                echo "  </div></div>";
}


function management_committee_minutes(){
    include("connection.php");

    echo "
        <a href='#'>
    <p class='lead' data-toggle='modal' data-target='#exampleModal12'>Management Committee Minutes<p>
</a>
    <div class='modal fade' id='exampleModal12' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-lg' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Management Committee Meeting Minutes</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <div class='container-fluid'>
       <div class='row'>
        ";


$mcmstmt = $mysqli->prepare("SELECT management_com_year, management_com_month, management_com_day, management_com_hyper FROM management_committee_minutes");

$mcmstmt->execute();

$mcmresult = $mcmstmt->get_result();

if($mcmresult->num_rows === 0) exit ('No rows');
while ($row = $mcmresult->fetch_assoc()){


            

                    $mmc_year = $row["management_com_year"];
                    $mmc_month = $row["management_com_month"];
                    $mmc_day = $row["management_com_day"];
                    $mmc_hyper = $row["management_com_hyper"];
            
    echo "    

<div class='col-6'>
<a href='$mmc_hyper'>
 <button type='button' class='btn btn-outline-primary btn-lg btn-block'>$mmc_day - $mmc_month - $mmc_year </button>
   
 
     
    

      
           </a>
      
      

      </div>
            
            

";
}

echo "</div>
</div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        
      </div>
    </div>
  </div>
</div>
    
    
    ";
    
    
    
    

}

function corporateplan(){
    include("connection.php");

$corporateplanstmt = $mysqli->prepare("SELECT corporate_plan_timeline, corporate_plan_hyper FROM corporate_plan");

$corporateplanstmt->execute();

$corporateplanresult = $corporateplanstmt->get_result();

if($corporateplanresult->num_rows === 0) exit ('No rows');
while ($row = $corporateplanresult->fetch_assoc()){




                    $corporate_plan_timeline = $row["corporate_plan_timeline"];
                    $corporate_plan_hyper = $row["corporate_plan_hyper"];
    
                    echo " <p class='lead'> <a href='$corporate_plan_hyper'> Corporate Plan - $corporate_plan_timeline </a></p>";
                }

}

function managementstatement_financialmem(){
      include("connection.php");
            
    echo "
        <a href='#'>
    <p class='lead' data-toggle='modal' data-target='#msfmmodal'>Management Statement & Financial Memorandum</p>
</a>
    <div class='modal fade' id='msfmmodal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Management Statement & Financial Memorandum</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <div class='container-fluid'>
       <div class='row'>
        ";


$msfmstmt = $mysqli->prepare("SELECT msfm_year, msfm_month, msfm_hyper FROM msfm");

    $msfmstmt->execute();

$msfmresult = $msfmstmt->get_result();

if($msfmresult->num_rows === 0) exit ('No rows');
while ($row = $msfmresult->fetch_assoc()){


                    $msfm_year = $row["msfm_year"];
                    $msfm_month = $row["msfm_month"];
                    $msfm_hyper = $row["msfm_hyper"];
    echo "    

<div class='col-6'>
<a href='$msfm_hyper'>
 <button type='button' class='btn btn-outline-primary btn-lg btn-block'>$msfm_year - $msfm_month</button>
   
 
     
    

      
           </a>
      
      

      </div>
            
            

";
}

echo "</div>
</div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        
      </div>
    </div>
  </div>
</div>
    
    
    ";
    
    
}

function annualvisitation(){
    
     include("connection.php");
            
    echo "
        <a href='#'>
    <p class='lead' data-toggle='modal' data-target='#exampleModal15'>Annual Visitation of the Board of Governors</p>
</a>
    <div class='modal fade' id='exampleModal15' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Annual Visitation of the Board of Governors</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <div class='container-fluid'>
       <div class='row'>
        ";

$govvisitationstmt = $mysqli->prepare("SELECT annual_visitation_governers_year, annual_visitation_governers_month, annual_visitation_governers_hyper, annual_visitation_governers_day FROM annual_visitation_governers");

    $govvisitationstmt->execute();

$govvisitationresult = $govvisitationstmt->get_result();

if($govvisitationresult->num_rows === 0) exit ('No rows');
while ($row = $govvisitationresult->fetch_assoc()){

                    

                    $gov_visitation_year = $row["annual_visitation_governers_year"];
                    $gov_visitation_month = $row["annual_visitation_governers_month"];
                    $gov_visitation_hyper = $row["annual_visitation_governers_hyper"];
                    $gov_visitation_day = $row["annual_visitation_governers_day"];
    echo "    

<div class='col-6'>
<a href='$gov_visitation_hyper'>
 <button type='button' class='btn btn-outline-primary btn-lg btn-block'>$gov_visitation_day - $gov_visitation_month - $gov_visitation_year</button>
   
 
     
    

      
           </a>
      
      

      </div>
            
            

";
}

echo "</div>
</div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        
      </div>
    </div>
  </div>
</div> ";
    
    
    
    
    
}

function annualreports(){
    include("connection.php");
    
    echo "
        <a href='#'>
    <p class='lead' data-toggle='modal' data-target='#exampleModal11'>Annual Reports<p>
</a>
    <div class='modal fade' id='exampleModal11' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Annual Reports</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <div class='container-fluid'>
       <div class='row'>
        ";

        $annualreportstmt = $mysqli->prepare("SELECT annual_report_year, annual_report_hyper FROM annual_reports");

        $annualreportstmt->execute();

        $annualreportresult = $annualreportstmt->get_result();

        if($annualreportresult->num_rows === 0) exit ('No rows');
        while ($row = $annualreportresult->fetch_assoc()){


                    $report_card_year = $row["annual_report_year"];
                    $report_card_hyper = $row["annual_report_hyper"];
            
    echo "    

<div class='col-6'>
<a href='$report_card_hyper'>
 <button type='button' class='btn btn-outline-primary btn-lg btn-block'>$report_card_year</button>
   
 
     
    

      
           </a>
      
      

      </div>
            
            

";
}

echo "</div>
</div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        
      </div>
    </div>
  </div>
</div>
    
    
    ";
    
    
}

function businessplan(){
    
     include("connection.php");
    
    echo "
        <a href='#'>
    <p class='lead' data-toggle='modal' data-target='#exampleModal11234'>Annual Business Plans<p>
</a>
    <div class='modal fade' id='exampleModal11234' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Annual Business Plans</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <div class='container-fluid'>
       <div class='row'>
        ";

$businessplanstmt = $mysqli->prepare("SELECT bp_year, bp_hyper FROM business_plan");

$businessplanstmt->execute();

$businessplanresult = $businessplanstmt->get_result();

if($businessplanresult->num_rows === 0) exit ('No rows');
while ($row = $businessplanresult->fetch_assoc()){



                    
                    $bp_year = $row["bp_year"];
                    $bp_hyper = $row["bp_hyper"];
              
            
    echo "    

<div class='col-6'>
<a href='$bp_hyper'>
 <button type='button' class='btn btn-outline-primary btn-lg btn-block'>$bp_year</button>
   
 
     
    

      
           </a>
      
      

      </div>
            
            

";
}

echo "</div>
</div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        
      </div>
    </div>
  </div>
</div>
    
    
    ";
    
    
    
    
    
    
}

function pubscheme_privacynotice(){
    include("connection.php");


                    $pubscheme_privacynoticestmt = $mysqli->prepare("SELECT pubscheme_privacynotice_title, pubscheme_privacynotice_hyper FROM pubscheme_privacynotice");

    $pubscheme_privacynoticestmt->execute();

    $pubscheme_privacynoticeresult = $pubscheme_privacynoticestmt->get_result();

                    if($pubscheme_privacynoticeresult->num_rows === 0) exit ('No rows');
                    while ($row = $pubscheme_privacynoticeresult->fetch_assoc()){


                    $pubscheme_privacynotice_title = $row["pubscheme_privacynotice_title"];
                    $pubscheme_privacynotice_hyper = $row["pubscheme_privacynotice_hyper"];
                    
                    echo "<a href='$pubscheme_privacynotice_hyper'><p class='lead'>$pubscheme_privacynotice_title</p></a>                <hr class='my-4'>        ";
 
                }
}

function footer(){
    
    echo "
      
         <footer id='myFooter'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-3 myCols'>
                    <h5>Get started</h5>
                    <ul>
                        <li><a href='index.php'>Home</a></li>
                        <li><a href='sitemap.php'>Sitemap</a></li>
                      <li><a href='research.php#student_applications'>Student Applications</a></li>
                          <li><a href='research.php'>Prices</a></li>
                  <!--      <li><a href='downloads.php'>Downloads</a></li> -->
                    </ul>
                </div>
                <div class='col-sm-3 myCols'>
                    <h5>About us</h5>
                    <ul>
                        <li><a href='companyinfo.php' data-toggle='modal' data-target='#infomodal_footer'>Address</a></li>
                        


<div class='modal fade' id='infomodal_footer' tabindex='-1' role='dialog' aria-labelledby='infomodal_footertitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered text-center' role='document'>
    <div class='modal-content'>
      <div class='modal-header '>
        <h4 class='modal-title' id='infomodal_footer'>Address</h4>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
    <p> College Hill <br>
        Armagh <br>
        BT61 9DG <br>
        Co.Armagh <br>
        Northern Ireland </p>
      </div>
      <div class='modal-footer text-center' style='justify-content: center;'>
        <div class='mapouter'>
        <div class='gmap_canvas'>
    <iframe width='490' height='300' id='gmap_canvas' src='https://maps.google.com/maps?q=armagh%20observatory%20and%20planetarium&t=&z=17&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>
    </iframe>
    <a href='https://www.crocothemes.net'></a></div>
    <style>.mapouter{text-align:right;height:100%;width:100%;}.gmap_canvas
    {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
    </div>
   
      </div>
    </div>
  </div>
</div>

<!-- ENTER CONTACT US MODAL HERE -->
";
    contactdetails();
    
    echo "




                        <!-- ENTER OPENING TIMES MODAL HERE -->
                        

";    openingtimes();


echo "

                        <li><a href='https://en-gb.facebook.com/pg/armaghplanet/reviews/?ref=page_internal'>Reviews</a></li>
                    </ul>
                </div>
                <div class='col-sm-3 myCols'>
                    <h5>Support</h5>
                    <ul>
                        <li><a href='faq.php'>FAQ</a></li>
                        <li><a href='support.php' data-toggle='modal' data-target='#infomodal_footer_helpdesk'>Helpdesk</a></li>
                        
<div class='modal fade' id='infomodal_footer_helpdesk' tabindex='-1' role='dialog' aria-labelledby='infomodal_footertitle_helpdesk' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered text-center' role='document'>
    <div class='modal-content text-center'>
      <div class='modal-header text-center'>
        <h4 class='modal-title text-center'>Helpdesk</h4>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body text-center'>
    Have you spotted a problem with our website? Is a page not loading correctly or you don't have access to different links?
    Social Media Problems?
    <a href='https://outlook.office.com/?path=/mail/action/compose&to=armaghhelpdesk@gmail.com&subject=Online Helpdesk Request&body=Add+Your+Request+here' target='_top'><h5 class='card title text-center' style='color:black;'>EMAIL US!</h5></a>
                   

 
      </div>
      <div class='modal-footer text-center'>
        
  
      </div>
    </div>
  </div>
</div>


                    


            









               <!--         <li><a href='forums.php'>Forums</a></li> -->
                    </ul>
                </div>
                <div class='col-sm-3 myCols'>
                    <h5>Legal</h5>
                    <ul>
             <li><a href='#'>Publication Scheme & Privacy Notices</a></li>
                <!--          <li><a href='foi.php'>Terms of Service</a></li>
                        <li><a href='toi.php'>Policy 2</a></li>
                   <li><a href='privacy.php'>Privacy Policy</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
         <div class='social-networks' style='padding-bottom: 0px;'>
       
        <a class='text-center' href='https://armaghobservatoryplanetarium.ticketsolve.com/shows?fbclid=IwAR0skRSdBi60Ef_0UbGMG5LFR2hcKZb3ERr11vpQ2juEz-ytW5Ip305a0NM'><img src='img/ticketsolve.png' style='width: 200px; 
            border-top-left-radius: calc(0.25rem - 1px); border-top-right-radius: calc(0.25rem - 1px);
             border-bottom-right-radius: calc(0.25rem - 1px);  border-bottom-left-radius: calc(0.25rem - 1px);'></a>
             </div>
        <div class='social-networks'>
           </a>
            
            
            <!-- Button trigger modal -->
 <a href='' class='facebook' data-toggle='modal' data-target='#snapchatmodalcenter'> <i class='fab fa-snapchat-ghost'></i> </a>
  

<!-- Modal -->
<div class='modal fade' id='snapchatmodalcenter' tabindex='-1' role='dialog' aria-labelledby='snapchatmodalcenterTitle' aria-hidden='true'> 
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h4 class='modal-title' id='snapchatmodalcenterTitle'>Add us on Snapchat!</h4>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <img src='img/snapcode.jpg' style='width: 450px; height: 400px;'>
      </div>
      
    </div>
  </div>
</div>
            
            
            
            
            
            
            
            
            <a href='https://twitter.com/ArmaghPlanet' class='twitter'><i class='fab fa-twitter' style='margin-top:30px;'></i></a>
            <a href='https://en-gb.facebook.com/armaghplanet/' class='facebook'><i class='fab fa-facebook-f'></i></a>
            <a href='https://armaghplanet.com/blog' class='facebook'><i class='fas fa-space-shuttle'></i><p style='font-size: 20px; font-family: Trattatello; margin-bottom:10px;'>Astronotes</p></a>
           
            
        </div>
        <div class='footer-copyright'>
            <p>Armagh Observatory & Planetarium </p>
        </div>
    </footer>
      
    ";


    
    
    
    
}
    
    
    



function openingtimes(){
     include("connection.php");
   
     
     echo "
  <li><a href='opentimes.php' data-toggle='modal' data-target='#opentimesmodal'>Opening Times</a></li>
     
       
     <div class='modal fade' id='opentimesmodal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h4 class='modal-title' id='exampleModalCenterTitle'>Planetarium Opening Times</h4>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        Monday: 10am-2pm <br>
        Tuesday: 10am-5pm <br>
        Wednesday: 10am-5pm <br>
        Thursday: 10am-5pm <br>
        Friday: 10am-5pm <br>
        Saturday: 10am-5pm <br>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
   
      </div>
    </div>
  </div>
</div>
     
     
     ";
     
     
     

}

function vision_documents(){
    include("connection.php");

    $visiondocumentstmt = $mysqli->prepare("SELECT vision_docs_title, vision_docs_description, vision_docs_hyper FROM vision_docs");

    $visiondocumentstmt->execute();

    $visiondocumentresult = $visiondocumentstmt->get_result();



if($visiondocumentresult->num_rows === 0) exit ('No rows');
while ($row = $visiondocumentresult->fetch_assoc()) {


    $vision_docs_title = $row['vision_docs_title'];
    $vision_docs_description = $row['vision_docs_description'];
    $vision_docs_hyper = $row['vision_docs_hyper'];

    echo "<hr class='my-4'>
<a href='$vision_docs_hyper'>
            $vision_docs_title</a> $vision_docs_description
          

        




";
}
}




function contactdetails(){
    include ("connection.php");


$contactdetailsstmt = $mysqli->prepare("SELECT contact_title, contact_telephone, contact_email, contact_info FROM contact");

    $contactdetailsstmt->execute();

$contactdetailsresult = $contactdetailsstmt->get_result();

if($contactdetailsresult->num_rows === 0) exit ('No rows');
while ($row = $contactdetailsresult->fetch_assoc()){


                        $contact_title = $row['contact_title'];
                        $contact_number = $row['contact_telephone'];      
                        $contact_email = $row['contact_email'];
                        $contact_info = $row['contact_info'];
                    
                        
                        echo "
    
    <li><a id='contactusbutton' href='companyinfo.php' data-toggle='modal' data-target='#contactusmodal'>Contact Us</a></li>
                        


<div class='modal fade' id='contactusmodal' tabindex='-1' role='dialog' aria-labelledby='infomodal_footertitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header '>
      
        <h4 class='modal-title' id='contactusmodal'>$contact_title</h4>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
<p>   Telephone: $contact_number </p>
  <p class='text-primary'>     $contact_info </p>


      </div>
       
      <div class='modal-footer'>
        <a href='https://outlook.office.com/?path=/mail/action/compose&to=$contact_email&subject=Enter your subject here&body=Add+Your+Request+here' target='_top'>
  <h9 class='text-primary'>$contact_email</h9></a>
          <br>        
  
      </div>
    </div>
  </div>
</div>
    
    ";
}
}



function pagetitles(){
    include("connection.php");



    $current_file_name = basename($_SERVER['PHP_SELF']);

//echo $current_file_name."\n";
//
$pagetitlesstmt = $mysqli->prepare("SELECT page_title FROM page_titles WHERE page_title_link = ?");
$pagetitlesstmt->bind_param("s", $current_file_name);
    $pagetitlesstmt->execute();

$pagetitlesresult = $pagetitlesstmt->get_result();

if($pagetitlesresult->num_rows === 0) exit ('No rows');
    $pagetitlesstmt->bind_result($current_file_name);

while ($row = $pagetitlesresult->fetch_assoc()){


                    $page_title = $row["page_title"];



echo "    <div class='card text-white bg-dark my-4 text-center'>
      <div class='card-body'> 
            
           
       <p class='text-white m-0'>$page_title</p>
      </div>
    </div> ";
     }
    
    


}









?> 







