<?php //session_start();
   if(isset($_POST['side_sut'])){
       
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
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $course = $_POST['course'];
            $to = "staracademyworkshop@gmail.com,nielltalwar@gmail.com";
            //$to = "vivek@bgsystem.com";
            $subject = "Details";
            $message = "Email : ".$email."\n\n";
            $message .= "Phone Number : ".$phone."\n\n";
            $message .= "Course : ".$course."\n\n";
            $header .= "Content-type: text/plain\n\n";
            $response = mail ($to,$subject,$message,$header);
            if($response){ 
              echo "<script type=\"text/javascript\">location.href = 'thank-you-2.php';</script>";
             $_SESSION['msg'] = 'Your request has been submitted. Our counsellor will call you shortly!';
             $_SESSION['timeout'] = time();
            }
        }else{
             print_r("No valid Key"); exit;
        }
    } else {
        print_r("Not Working Captcha"); exit;
    }
       
       
       
   }
 
 ?>
<script src='https://www.google.com/recaptcha/api.js?render=6Lcl-IAUAAAAAPJ9cr_UfH7jxjOo6HtamN9lharn'></script>
<h4>Request a Callback</h4>
        <div class="form_Set">
          <form action="" method="post">
               <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
		  <div class=" formBox"> 
            <div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
              <input type="email" name="email" class="form-control"  placeholder="Your Email" required="required">
            </div>
            </div>
			<div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>
               <input type="text" name="phone" class="form-control"  placeholder="Phone Number" required="required">
            </div>
            </div>
			<div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></div>
               
			   <select class="form-control" name="course" placeholder="Courses" required="required">
			   <option value="">Select Course</option>
			   <option>Absolute Route To Hairdressing</option>
			   <option>Advance Hair-dos</option>
			   <option>Professional Art Of Makeup  </option>
			   <option>Advance Makeup Artistry  </option>
			   <option>Self Grooming</option>
			   </select>
            </div>
            </div>
            

		<!--<a class="btn btn-xs btn-default floatright" >submit</a>-->
                                 <p><?php if(isset($_SESSION['msg'])) { echo $_SESSION['msg'] ;  } 
if(isset($_SESSION['msg'])) {
 
if ($_SESSION['timeout'] + 2 * 2 < time()) {
   // session timed out
//echo "success";
unset($_SESSION['msg']);
} 
}
?></p>
		<button type="submit" class="fbtn cw floatright" name="side_sut">Submit</button>
           </div>
		    <br><br><div class=" formBox tubebox"  >
			<small><a href="testimonial.php">View All >></a></small><h4  style="margin-bottom:9px !important;  margin-top: 0px;">Listen to our Students</h4> 
			<p><a class='youtube' href="https://www.youtube.com/embed/63pVTgfgASM"><img src="images/video_img8.png" alt=""/></a></p>
			</div>

          </form>
        </div>
<script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6Lcl-IAUAAAAAPJ9cr_UfH7jxjOo6HtamN9lharn', {action: 'callbackform'})
    .then(function(token) {
        document.getElementById('g-recaptcha-response').value = token;
    });
    });
</script>