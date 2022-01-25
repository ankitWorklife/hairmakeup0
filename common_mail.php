<?php  
   if(isset($_POST['query_sut'])){
	   echo $_SERVER['REQUEST_URI']; die;
  
       $name = $_POST['name'];
       $phone = $_POST['phone'];
       $course = $_POST['course'];
       $message_content = $_POST['message_content'];
	      $to = "staracademyworkshop@gmail.com,nielltalwar@gmail.com";
		// $to = 'yashtalwar@gmail.com';
          $subject = "Query Form";
          $message = "Name : ".$name."\n\n";
          $message .= "Phone Number : ".$phone."\n\n";
          $message .= "Course : ".$course."\n\n";
          $message .= "Message : ".$message_content."\n\n";
          //$message .= "your username : <b>".$_SESSION['reg_id']."</b>";
         //$header = "From:esicsports.com \r\n";
         //$header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/plain\n\n";
          $response = mail ($to,$subject,$message,$header);
		  if($response){
		    //header('location:contact.php?msz=Thanks');die;
		  }
   }
 
 ?>