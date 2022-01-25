<?php 
   if(isset($_POST['contact_sut'])){
  
       $name = $_POST['name'];
       $phone = $_POST['phone'];
       $email = $_POST['email'];
       $message_content = $_POST['message_content'];
	      $to = "nielltalwar@gmail.com,staracademyworkshop@gmail.com";
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
 
 ?>
<title>Contact Us | Aashmeen Munjaal's Star Hair & Makeup Academy</title>
<?php include('common-head.php') ?>

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
	 <li class="list-group-item">
	 <div class="list_loc">
	 <div class="mapFind link">
	 <a aria-hidden="true" class=" trans cboxMap" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1750.1190576395243!2d77.20484245823496!3d28.682522898682745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0cb9f8a1fd27365d!2sStar+Salon!5e0!3m2!1sen!2sin!4v1462537666470" >
    	 <span aria-hidden="true" class="glyphicon glyphicon-map-marker iconsize findus_icon"></span>
	 <span>North Campus</span></a>
	 </div>
	 <div class="mapFind">
	 <span aria-hidden="true" class="glyphicon glyphicon-earphone iconsize findus_icon"></span>
	 <span>	+91-11-47047670</span> 
	 </div>
	 </div>
	 </li>
	 
	 
	   <li class="list-group-item" style="background:#f7f7f7;"> <div class="list_loc">
	   <div class="mapFind link">
	   <a aria-hidden="true" class="trans cboxMap" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.0609443090307!2d77.21812541549427!3d28.56793259375168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce25d1f798f35%3A0x62a7a89ce7925e1d!2sAashmeen+Munjaal&#39;s+Star+Salon+n+Academy!5e0!3m2!1sen!2sin!4v1462538808806">
        <span class="glyphicon glyphicon-map-marker iconsize findus_icon "></span>
	   <span>South Ex</span></a>
	 </div>
	 <div class="mapFind">
	 <span aria-hidden="true" class="glyphicon glyphicon-earphone iconsize findus_icon"></span>
	 <span>		+91-11-40541866</span> 
	 </div> 
	 </div>
	 </li>
	  <li class="list-group-item">  <div class="list_loc">
	  <div class="mapFind link">
	  <a aria-hidden="true" class="trans cboxMap" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.5560989573473!2d77.18061021549539!3d28.643063390354143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0297fe3a0b23%3A0xcfcb21c3b5d73ab!2sAashmeen+Munjaal&#39;s+Star+Salons!5e0!3m2!1sen!2sin!4v1462538862763">
      <span class="glyphicon glyphicon-map-marker iconsize findus_icon "></span>
      <span>Pusa Road</span>
      </a>
	  
	  </div>
	  <div class="mapFind">
	 <span aria-hidden="true" class="glyphicon glyphicon-earphone iconsize findus_icon"></span>
	 <span>+91-9599057670</span>
	
	 </div>  </div> </li>
     
     
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
			<!-- Map Box start-->
			<ul class="list-group">
			 <li class="list-group-item active">North Campus</li>	 
			 <li class="list-group-item">
			 			<div class="center_info">
			<p><span aria-hidden="true" class="glyphicon glyphicon-map-marker iconsize"></span><span>  UB-14, Bunglow Road, Kamla Nagar Above Blackberry Showroom</span></p>
			<p><span aria-hidden="true" class="glyphicon glyphicon-earphone iconsize"></span><span>  +91-11-47047670</span></p>
			<p><span aria-hidden="true" class="glyphicon glyphicon-envelope iconsize"></span><span>  <a mailto="info@hairandmakeupacademy.com">info@hairandmakeupacademy.com</a></span></p>
			</div>
			 </li>
			  <li class="list-group-item" style="background:#f7f7f7; height:212px;">
			<a aria-hidden="true" class="trans cboxMap cboxElement" href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28002.088045450084!2d77.207134!3d28.681838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcb9f8a1fd27365d!2sStar+Salon!5e0!3m2!1sen!2sus!4v1452331973148"><img src="images/north-campus.jpg" width="349" height="186"> </a>
			 </li>
			 </ul>
			<!-- Map Box ends-->

			</div>
			</article>
			</section></div>
			<div class="col-md-4">
			<section>
			<article>
			
			<div class="col-md-12">
						<!-- Map Box start-->
			<ul class="list-group">
			 <li class="list-group-item active">South Ex </li>	 
			 <li class="list-group-item">
			 			<div class="center_info"><p><span aria-hidden="true" class="glyphicon glyphicon-map-marker iconsize"></span> <span> E-15, South Ex - 2, Main Market, Above Bata Showroom, Delhi</span></p>
			<p><span aria-hidden="true" class="glyphicon glyphicon-earphone iconsize"></span><span>   +91-11-40541866</span></p>
			<p><span aria-hidden="true" class="glyphicon glyphicon-envelope iconsize"></span><span>  <a mailto="info@hairandmakeupacademy.com">info@hairandmakeupacademy.com</a></span></p></div>
			 </li>
			  <li class="list-group-item" style="background:#f7f7f7; height:212px;">
			  <a aria-hidden="true" class="trans cboxMap cboxElement" href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28032.536196877703!2d77.220196!3d28.56775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62a7a89ce7925e1d!2sAashmeen+Munjaal's+Empire+of+Makeovers!5e0!3m2!1sen!2sus!4v1452332018028"><img src="images/southex.jpg" width="349" height="186"> </a>
			 </li>
			 </ul>
			<!-- Map Box ends-->

			

			</div>
			<div class="col-md-12">

			</div>
			</article>
			</section></div>
			
			<div class="col-md-4">
			<section>
			<article>
			
			<div class="col-md-12">
			<!-- Map Box start-->
<ul class="list-group">
 <li class="list-group-item active">Pusa Road</li>	 
 <li class="list-group-item">
 			<div class="center_info">
			<p><span aria-hidden="true" class="glyphicon glyphicon-map-marker iconsize"></span><span> 11B/1, Pusa Road, Opp. Metro Pillar 127, Delhi</span></p>
			<p><span aria-hidden="true" class="glyphicon glyphicon-earphone iconsize"></span><span>   +91-9599057670</span></p>
			<p><span aria-hidden="true" class="glyphicon glyphicon-envelope iconsize"></span><span>  <a mailto="info@hairandmakeupacademy.com">info@hairandmakeupacademy.com</a></span></p>
			</div>
		
 </li>
  <li class="list-group-item" style="background:#f7f7f7; height:212px;">
 <a aria-hidden="true" class="trans cboxMap cboxElement" href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28012.44996405441!2d77.182799!3d28.643059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcfcb21c3b5d73ab!2sAashmeen+Munjaal's+Star+Salons!5e0!3m2!1sen!2sus!4v1452332060168"><img src="images/pusa-road.jpg" width="349" height="186"></a>
 </li>
 </ul>
<!-- Map Box ends-->


			</div>
</article>
			</section></div>
			
            
            
		
            
            
            
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
                                    <p><span aria-hidden="true" class="glyphicon glyphicon-earphone iconsize"></span><span>+91-11-43036670</span></p>
                                    <p><span aria-hidden="true" class="glyphicon glyphicon-envelope iconsize"></span><span>  <a mailto="info@hairandmakeupacademy.com">info@hairandmakeupacademy.com</a></span></p>
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
            
            
        </div>
    </div>
    
  </div>

<?php include('footer.php') ?>
