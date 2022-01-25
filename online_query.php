<?php
include('admin/connection.php');  
   if(isset($_POST['query_sut'])){
       
       
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
            $page = $_POST['page'];
           $name = $_POST['name'];
           $phone = $_POST['phone'];
           $course = $_POST['course'];
           $message_content = $_POST['message_content'];
    	     $to = "staracademyworkshop@gmail.com,nielltalwar@gmail.com";
    		 //$to = "anand.webmaster83@gmail.com,sudhir@bgsystem.com";
              $subject = "Query Form";
              $message = "Name : ".$name."\n\n";
              $message .= "Phone Number : ".$phone."\n\n";
              $message .= "Course : ".$course."\n\n";
              $message .= "Message : ".$message_content."\n\n";
              //$message .= "your username : <b>".$_SESSION['reg_id']."</b>";
             //$header = "From:esicsports.com \r\n";
             //$header .= "MIME-Version: 1.0\r\n";
             $header .= "Content-type: text/plain\n\n";
             
             $mypage = substr($page,0,-4);
             $sql = mysql_query("insert into tbl_lead set user_id='0',lead_from='$mypage',name='$name',contact='$phone',course='$course',requirement='$message_content',register_date=now(),update_date=now(),status=1");
             
             $response = mail ($to,$subject,$message,$header);
    		  if($response){
    		      header('location:thank-you-3.php');die;
    		  }
        }else{
             print_r("No valid Key"); exit;
        }
    } else {
        print_r("Not Working Captcha"); exit;
    }
	 
       
   }
 
 ?>
<style>
#cboxCurrent, #cboxPrevious, #cboxNext   { display: none !important;}
</style>

<script src='https://www.google.com/recaptcha/api.js?render=6Lcl-IAUAAAAAPJ9cr_UfH7jxjOo6HtamN9lharn'></script>
<h4>Request a Callback</h4>
<div class="form_Set" style="width:300px!important;">
          <form method="post" action="online_query.php">
              <input type="hidden" id="g-recaptcha-response-1" name="g-recaptcha-response">
		  <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
		  <div class=" formBox"> 
            <div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-user"></span></div>
              <input type="text" placeholder="Your Full Name *" class="form-control" name="name" required="required">
            </div>
            </div>
			<div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-earphone"></span></div>
               <input type="text"   placeholder="Phone Number" class="form-control" name="phone" required="required">
            </div>
            </div>
			<div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-edit"></span></div>
               
			   <select placeholder="Courses" name="course" class="form-control" required="required">
			   <option value="">Select Course</option>
			   <option>Absolute Route To Hairdressing</option>
			   <option>Advance Hair-dos</option>
			   <option>Professional Art Of Makeup  </option>
			   <option>Advance Makeup Artistry  </option>
			   <option>Self Grooming</option>
			   </select>
            </div>
            </div>
			
			<div class="form-group">
			<div class="input-group">
			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-earphone"></span></div>
               <textarea type="text" placeholder="Query Message" class="form-control" name="message_content" required="required"></textarea>
            </div>
            </div>
			
		<!--<a class="btn btn-xs btn-default floatright" >Sumbit</a>-->
                                  <?php  if(isset($_GET['msz'])) {  echo $_GET['msz'];  } ?>
		<button class="" type="submit" name="query_sut">Submit</button>
           </div>
		  
          </form>
        </div>
<script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6Lcl-IAUAAAAAPJ9cr_UfH7jxjOo6HtamN9lharn', {action: 'callbackform'})
    .then(function(token) {
        document.getElementById('g-recaptcha-response-1').value = token;
    });
    });
</script>