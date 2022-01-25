<?php 
    if(isset($_POST['career_sut'])){
        
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
         
        $secretKey="6Lcl-IAUAAAAADycuMZ-gi_9-Y7wZpNJdS7ZXgKn";
        $responseKey=$_POST['g-recaptcha-response'];
        $userIP=$_SERVER['REMOTE_ADDR'];
        $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        // This is what solved the issue (Accepting gzip encoding)
        curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
        $response = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response);
        
        if($response->success){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $job_title = $_POST['job_title'];
            $message_content = $_POST['message_content'];
            
            if(isset($_FILES['files']))
            {
                $path=$_FILES['files']['tmp_name'];
            }
            
            //The form has been submitted, prep a nice thank you message
            $output = '<h1>Thanks for submiting form!</h1>';
            //Set the form flag to no display (cheap way!)
            $flags = 'style="display:none;"';
            
            //Deal with the email
            $to = 'staracademyworkshop@gmail.com,nielltalwar@gmail.com';
            //$to = "anand.webmaster83@gmail.com,sudhir@bgsystem.com";
            $subject = 'Career Form';
            $semi_rand = md5(time());
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
            
            $message = 'Name : '.strip_tags($name)."\n\n";
            $message .= 'Email : '.strip_tags($email)."\n\n";
            $message .= 'Phone No. : '.strip_tags($phone)."\n\n";
            $message .= 'Job Title:  '.strip_tags($job_title)."\n\n";
            $message .= 'Message:  '.strip_tags($message_content)."\n\n";
            
            
            
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
                header('location:thank-you-4.php');die;
                //header('location:career.php?msz=Your request has been submitted. Our counsellor will call you shortly!');die;
            }
        }else{
             print_r("No valid Key"); exit;
        }
    } else {
        print_r("Not Working Captcha"); exit;
    }
    
        
    
    }
 
 ?>
<title>Career</title>

<?php include('common-head.php') ?>

<script src='https://www.google.com/recaptcha/api.js?render=6Lcl-IAUAAAAAPJ9cr_UfH7jxjOo6HtamN9lharn'></script>
<!-- Global site tag (gtag.js) - Google Ads: 992278469 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-992278469"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-992278469');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R5V9M7VPTH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R5V9M7VPTH');
</script>
</head>
<body>
<?php include('header.php') ?>

 <div class="container">
    <div class="row mt100"> 
      <!--banner start here-->
<div class="col-lg-12 mt20 mb20">
<img src="images/career-banner.jpg" width="100%" alt="">
</div>

<!--banner end here-->
      
	  <div class="col-md-6">
	  <h4>Boost Your Career with Unlimited Options</h4>
	  <p>If this is your calling, then give us a chance to polish and hone your skills, a career in Hair and Makeup profession is certainly rewarding. There are many options with a good pay scale. You can become an entrepreneur, top hairstylist to beauty therapists, make-up artists, cosmetologist, and aesthetician to salon manager. </p>
	 
	 <hr>
	  <em>“Think not of yourself as the architect of your career but as the sculptor. Expect to have to do a lot of hard hammering and chiseling and scraping and polishing”</em>
	  <hr>
	  <p>Give your career the perfect start with our academy as we promise to be by your side throughout the course and afterwards.</p>
      </div>
	  
	  <!-- Blog Post Content Column -->
      <div class="col-lg-6">
	  <h4> Get On The Best Journey Of Your Life <br>If You Have A Flair For Creating Beautiful Personalities!!!!</h4>
      
	
	<div class="form_Set">
          <form action="" method="post" enctype="multipart/form-data">
               <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
		  <div class=" formBox">
            <div class="form-group">
				
            </div>
            <div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-user"></span></div>
              <input type="text" name="job_title" placeholder="Enter Job Title" class="form-control" required="required">
            </div>
            </div>
			<div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-user"></span></div>
              <input type="text" name="name" placeholder="Your Full Name *" class="form-control" required="required">
            </div>
            </div>
			<div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-earphone"></span></div>
               <input type="text" name="phone" placeholder="Phone Number" class="form-control" required="required">
            </div>
            </div>
            <div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-envelope"></span></div>
              <input type="email" name="email" placeholder="Email Address" class="form-control" required="required">
            </div>
            </div>
			
			 
			<div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-edit"></span></div>
               
			   <textarea class="form-control" col='45' row='5' placeholder="message" name="message_content" required="required"></textarea>
            </div>
            </div>
			<div class="form-group">
			<div class="input-group">
			
            
                <input type="file" name="files" required="required" id="uploadFile" placeholder="Choose File"  class="filestyle" data-buttonName="btn-primary" />
               
<!-- 
			   <input type="file" name="files" required="required" id="uploadFile" placeholder="Choose File"  />
				
				
                		<div class="fileUpload fbtn setupload">
               					 <span>Upload</span><input id="uploadBtn" type="file" class="upload" />
               			 </div>
             
             
             
             
             
             
             
             
             
             <input type="file" name="files" placeholder="upload your CV" class="form-control" required="required">-->
            </div>
            </div>
			<div style="border-top:none">
           
            <button class="btn fbtn" type="submit" name="career_sut">Submit</button>
			<button class="btn fbtn" type="submit">Reset</button>
<?php if(isset($_GET['msz'])) {  echo '<p>'.$_GET['msz'].'</p>';  } ?>
			</div>
			
           </div>
		   
          </form>
        </div><!-- form_Set -->
	</div> <!-- col-lg-8 --- Main Content -->
		
     
      <!-- Blog Sidebar Widgets Column -->
      
    </div>
  </div>
  <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
<script>
$(document).ready(function(){
$(":file").filestyle({buttonName: "btn-primary"});

})
</script>

<script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6Lcl-IAUAAAAAPJ9cr_UfH7jxjOo6HtamN9lharn', {action: 'callbackform'})
    .then(function(token) {
        document.getElementById('g-recaptcha-response').value = token;
    });
    });
</script>
<?php include('footer.php') ?>
