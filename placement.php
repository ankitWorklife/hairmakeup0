<?php 


   if(isset($_POST['contact_sut'])){
  
       $name = $_POST['name'];
       $phone = $_POST['phone'];
       $email = $_POST['email'];
       $message_content = $_POST['message_content'];
	      $to = "staracademyworkshop@gmail.com,nielltalwar@gmail.com";
		  //$to = 'vivek@bgsystem.com,bgsystem@gmail.com';
          $subject = "Contact Form";
          $message = "Name : ".$name."\n\n";
          $message .= "Email : ".$email."\n\n";
          $message .= "Phone Number : ".$phone."\n\n";
          $message .= "Message : ".$message_content."\n\n";
          //$message .= "your username : <b>".$_SESSION['reg_id']."</b>";
         //$header = "From:esicsports.com \r\n";
         //$header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/plain\n\n";
          $response = mail ($to,$subject,$message,$header);
		  if($response){
		    header('location:contact.php?msz=We have received your query. Our counsellor will contact you shortly. Thank you!');die;
		  }
   } 
   
   if(isset($_POST['employer_sut'])){
  
       $business_name = $_POST['business_name'];
       $owner_name = $_POST['owner_name'];
       $profile = $_POST['profile'];
       $contact_info = $_POST['contact_info'];
       $city = $_POST['city'];
       $location = $_POST['location'];
       $salary_range = $_POST['salary_range'];
       $experience = $_POST['experience'];
       $benefits = $_POST['benefits'];
       
	   
	      $to = "starsalon.star@gmail.com";
	
          $subject = "Employer Form";
          $message = "Name of Business : ".$business_name."\n\n";
          $message .= "Name of Owner : ".$owner_name."\n\n";
          $message .= "Contact Info : ".$contact_info."\n\n";
         
          $message .= "Profile : ".$profile."\n\n";
		   $message .= "City : ".$city."\n\n";
          $message .= "Location : ".$location."\n\n";
          $message .= "Salary Range : ".$salary_range."\n\n";
          $message .= "Experience of Candidate : ".$experience."\n\n";
          $message .= "Extra Benefits Provided : ".$benefits."\n\n";
          //$message .= "your username : <b>".$_SESSION['reg_id']."</b>";
         //$header = "From:esicsports.com \r\n";
         //$header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/plain\n\n";
          $response = mail ($to,$subject,$message,$header);
		  if($response){
		    header('location:placement.php?msz=We have received your query. Our counsellor will contact you shortly. Thank you!');die;
		  }
   } 
   
				   if(isset($_POST['jobseeker_sut'])){
				  
									   $name = $_POST['name'];
									   $profile = $_POST['profile'];
								
									 if(isset($_FILES['files']))
									 {
										$path=$_FILES['files']['tmp_name'];
									 }
								 
									//The form has been submitted, prep a nice thank you message
									$output = '<h1>Thanks for submiting form!</h1>';
									//Set the form flag to no display (cheap way!)
									$flags = 'style="display:none;"';

									//Deal with the email
									$to = 'nielltalwar@gmail.com';
									//$to = 'vivek@bgsystem.com,bgsystem@gmail.com';
									$subject = 'Jobseeker Form';
									$semi_rand = md5(time());
							        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

								    $message = 'Name : '.strip_tags($name)."\n\n";
									$message .= 'Profile : '.strip_tags($profile)."\n\n";
								
									


							if(!empty($_FILES['files']['name'])){
									$errors= array();
										$boundary =md5(date('r', time()));
										 $headers = "From: hairandmakeup\r\nReply-To: nielltalwar@gmail.com,starsalon.star@gmail.com";
										$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
									   
										// multipart boundary
										$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
										$message .= "--{$mime_boundary}\n";
										  
									
									   $filename = $_FILES['files']['name'];
										$file_size =$_FILES['files']['size'];
										$file_tmp =$_FILES['files']['tmp_name'];
										$file_type=$_FILES['files']['type'];;   
											  
												$attachment = chunk_split(base64_encode(file_get_contents($file_tmp)));       
								  
									   
										$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$filename\"\n" .
									"Content-Disposition: attachment;\n" . " filename=\"$filename\"\n" .
									"Content-Transfer-Encoding: base64\n\n" . $attachment . "\n\n";
									$message .= "--{$mime_boundary}\n";

								}
								


								   $response =  mail($to, $subject, $message, $headers);
									if($response){
									header('location:placement.php?msz=Your request has been submitted. Our counsellor will call you shortly!');die;
							   }

				   }
 
 ?>
<title>Placement | Aashmeen Munjaal's Star Hair &amp; Makeup Academy</title>
<?php include('common-head.php') ?>

<style>
/*body{
font:13px/20px Arial, Helvetica, sans-serif
}*/
.media-grid{
padding:15px;
max-width: 980px;
background: #fff;
margin: 30px auto;
box-shadow: 0 0 10px 0 rgba(0,0,0,.3);
}

.media-grid ul{
list-style:none;
padding:0;
margin:0;
}

.media-grid ul li{
display: block;
margin:0 0 15px 0;
background: #ffffff;
background: -moz-linear-gradient(top, #ffffff 25%, #ededed 100%);
background: -webkit-linear-gradient(top, #ffffff 25%,#ededed 100%);
background: linear-gradient(to bottom, #ffffff 25%,#ededed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 );
border: solid 1px #e1e1e1;
position: relative;
}
.media-grid ul li span{
border-right:solid 1px #e1e1e1;
display:inline-block;
padding:10px;
}
.media-grid ul li:last-child{
margin:0;
}
.media-grid ul li a{
display:inline-block;
color:#1f5fbf;
padding:10px;
/*border-left:solid 1px #e1e1e1;
border-right:solid 1px #e1e1e1;*/
}
.media-grid ul li a i{
font-size:21px;
}
/*.media-grid ul li a.social{
position:absolute;
right:0;
}*/
.social{
display:block;
text-align:center;
}
.social i{
font-size:21px;
}

.blue-dark{
background:#CC9966;
color:#FFFFFF;
font-size:13px;
}
.font-13{
font-size:13px;
}

.table td{
margin-bottom:0;
text-align:left;
}
.table td:nth-child(1){
text-align:center;
}
.table tr.format-sty td{
line-height:35px;
}
.table tr.format-sty td:nth-child(4){
line-height:17px;
}
.table tr.format-sty td:nth-child(5){
padding-top:13px;
line-height:35px;
}
.char-height{
line-height:35px;
}
.white-box {
	background:#fff;
	padding:15px;
	box-shadow:0 0 10px 0 rgba(0, 0, 0, .1);
}
.placement-bx {
	margin:0 auto;
	padding:0 0 20px 0;
	max-width:980px;
}
.padding-L {
	padding-left:0;
}
.padding-R {
	padding-right:0;
}
.common-List {
	list-style:none;
	padding:0;
	margin:0;
}
.common-List li {
	display:block;
}
.common-List li label {
	display:block;
	font-weight:normal;
}
.input-t {
	border:solid 1px #e1e1e1;
	padding:8px;
	width:100%;
	box-sizing:border-box;
	outline:none;
}
.submit-but {
	border:0;
	background:#0066CC;
	color:#fff;
	text-transform:uppercase;
	border-radius:4px;
	padding:7px 25px;
	margin-top:10px;
transition:all .3s ease-in-out;
}
.submit-but:hover {
transition:all .3s ease-in-out;
	background:#00CCCC;
}
.modal-body {
	padding:0px 15px 15px 15px;
}
.modal {
	top:5%;
}
.modal-header {
	margin-bottom:10px;
}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<!-- Global site tag (gtag.js) - Google Ads: 992278469 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-992278469"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-992278469');
</script>

</head>
<body>
<?php include('header.php') ?>

 <div class="container">
    <div class="row mt100"> 
      <!--banner start here-->
      
		
		<div style="max-width:980px; margin:20px auto 0 auto">
        	<div class="gallery">
<!-- <div class="customNavigation">
  <a class="btn prev"><img src="images/back-arrow.png" alt=""></a>
  <a class="btn next"><img src="images/next-arrow.png" alt=""></a>
</div> -->
	<div id="demo">
        <div id="owl-demo" class="owl-carousel">          
          <div class="item"><a title=""><img src="images/placement/1.jpg" alt="" class="inside" rel="images/placement/1big.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/placement/2.jpg" alt="" class="inside" rel="images/placement/2big.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/placement/3.jpg" alt="" class="inside" rel="images/placement/3big.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/placement/4.jpg" alt="" class="inside" rel="images/placement/4big.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/placement/5.jpg" alt="" class="inside" rel="images/placement/5big.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/placement/1.jpg" alt="" class="inside" rel="images/placement/1big.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/placement/2.jpg" alt="" class="inside" rel="images/placement/2big.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/placement/3.jpg" alt="" class="inside" rel="images/placement/3big.jpg"/></a></div>         

        </div>
    </div>
	
<div class="modalDialog">
    <div class="itemBox_img">
    	
    </div>
</div>
    <script src="js/owl.carousel.js"></script>
    <style>
    #owl-demo .item{ padding: 0px; margin:1px 0 0 0; color: #FFF;-webkit-border-radius: 3px;-moz-border-radius: 3px; border-radius: 3px;text-align: center;}.owl-buttons{display:none;}
    </style>

    <script>
    $(document).ready(function() {

      var owl = $("#owl-demo");
      owl.owlCarousel({
	loop:true,
	autoplay:true,
	autoplayTimeout:1000,
	autoplayHoverPause:true,
	margin:1,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            
        },
        600:{
            items:4,
            
        },
        1000:{
            items:4,
            
            loop:true
        }
    }
})
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
    });
    </script>
	
<?php if(isset($_GET['msz'])){ ?>
       <script>
		  $(document).ready(function(){
			  //alert('sdf');
			  $( "#open_popup" ).trigger( "click" );
		  });
       </script>
<?php } ?>	
	
	
<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" style="display:none;" class="btn btn-info btn-lg" id="open_popup" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Success</h4>
        </div>
        <div class="modal-body">
          <p><?php if(isset($_GET['msz'])) echo $_GET['msz'];  ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>	
	
	<center class="pghead"><img src="images/placement-head.png" alt="Placements"></center>
  <!-- srcolling end here-->

  
</div>
         <br>
        	<div class="placement-bx row">
        <div class="col-md-6 col-sm-6 col-xs-12 padding-L">
          <div class="white-box"> <a href="javascript:void();" data-toggle="modal" data-target="#myModal-0" title="I am looking for a job"><img src="images/job-opening.png" alt="I am looking for a job" style="width:100%"></a> </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 padding-R">
          <div class="white-box"> <a href="javascript:void();" data-toggle="modal" data-target="#myModal-1" title="I am looking to hire students"><img src="images/hire-student.png" alt="I am looking to hire students" style="width:100%"></a> </div>
        </div>
      </div>
        </div>


    </div>
  </div>
  
    <!-- Modal -->
	<form action="" method="post" enctype="multipart/form-data">
<div id="myModal-0" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">I am looking for a job</h4>
      </div>
      <div class="modal-body">
        <ul class="common-List">
          <li>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>Name</label>
              <input type="text" required="required" name="name" class="input-t" placeholder="Enter your name...">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>Profile</label>
              <select required="required" class="input-t" name="profile">
                <option>Hair Stylist - Male</option>
                <option>Hair Stylist - Female</option>
                <option>Beautician</option>
                <option>Makeup Artist</option>
                <option>Pedicurist</option>
                <option>Floor Manager</option>
                <option>Sales Manager</option>
                <option>Receptionist</option>
                <option>Accountant</option>
                <option>Stock Keeper</option>
              </select>
            </div>
            <p class="clearfix"></p>
          </li>
          <li>
            <div class="col-md-12">
              <label>Upload Resume</label>
              <input required="required" type="file" name="files" class="input-t">
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <input type="submit" name="jobseeker_sut" class="submit-but">
            </div>
          </li>
          <li>
            <div class="col-md-12" style="padding-top:10px;">
              Note: Your resume will be sent to our HR Deptt. If any matching vacancy will be available, you will get a call.
            </div>
          </li>
          <p class="clearfix"></p>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Modal -->
<form action="" method="post" enctype="multipart/form-data">
<div id="myModal-1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">I am looking to hire students</h4>
      </div>
      <div class="modal-body">
        <ul class="common-List">
          <li>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>Name of Business</label>
              <input type="text" required="required" name="business_name" class="input-t" placeholder="Name of Business...">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>Name of Owner</label>
              <input type="text" required="required" name="owner_name" class="input-t" placeholder="Owner Name...">
            </div>
            <p class="clearfix"></p>
          </li>
          <li>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>Contact Info</label>
              <input type="text" required="required" name="contact_info" class="input-t" placeholder="Contact Info...">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>Profile</label>
              <select required="required" class="input-t" name="profile">
                <option>Hair Stylist - Male</option>
                <option>Hair Stylist - Female</option>
                <option>Beautician</option>
                <option>Makeup Artist</option>
                <option>Pedicurist</option>
                <option>Floor Manager</option>
                <option>Sales Manager</option>
                <option>Receptionist</option>
                <option>Accountant</option>
                <option>Stock Keeper</option>
              </select>
            </div>
            <p class="clearfix"></p>
          </li>
          <li>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>City</label>
              <input type="text" required="required" name="city" class="input-t" placeholder="City Name...">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>Location</label>
              <input type="text" required="required" name="location" class="input-t" placeholder="Near Location...">
            </div>
            <p class="clearfix"></p>
          </li>
          <li>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>Salary Range</label>
              <input type="text" required="required" name="salary_range" class="input-t" placeholder="Salary Range...">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label>Experience of Candidate</label>
              <input type="text" required="required" name="experience" class="input-t" placeholder="Total Experience...">
            </div>
            <p class="clearfix"></p>
          </li>
          <li>
            <div class="col-md-12">
              <label>Extra Benefits Provided</label>
              <input type="text" required="required" name="benefits" class="input-t" placeholder="Extra Benefits...">
            </div>
            <p class="clearfix"></p>
          </li>
          <li>
            <div class="col-md-12">
              <input type="submit" name="employer_sut" class="submit-but">
            </div>
          </li>
          
          <li>
            <div class="col-md-12" style="padding-top:10px;">
             Note: Your requirement will be sent to our Placements call. You can send an email directly to 'nielltalwar@gmail.com' as well.
            </div>
          </li>
          <p class="clearfix"></p>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</form>

<?php include('footer.php') ?>
