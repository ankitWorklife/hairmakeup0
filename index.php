<?php 
include('admin/connection.php');
session_start();
if(isset($_POST['SUT'])){
    
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
            $subject = "Details";
            $message = "Email : ".$email."\n\n";
            $message .= "Phone Number : ".$phone."\n\n";
            $message .= "Course : ".$course."\n\n";
            $header .= "Content-type: text/plain\n\n";
            $sql = mysql_query("insert into tbl_lead set user_id='0',lead_from='Web Home',email='$email',contact='$phone',course='$course',register_date=now(),update_date=now(),status=1");
            $response = mail ($to,$subject,$message,$header);
            if($response){
                header('location:thank-you-1.php');die;
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
 
<title>Beauty Make Up Academy In Delhi, Beautician Course In Delhi | Aashmeen Munjaal's Star Hair & Makeup Academy</title>



<meta name="description" content="Aashmeen Munjaal a Best Hair & Beauty Make up Courses Academy School for Beautician course in Delhi provide the best courses Beauty Parlor, Professional make-up & hair stylists in New Delhi." />



<meta name="keywords" content="Hair And Makeup Academy In Delhi, Beautician course in Delhi, Best Beauty Make up Academy in Delhi, Beauty Academy In Delhi, beauty parlor course in Delhi, Professional Makeup Courses In Delhi, Best Makeup Institute In Delhi, Hair Academy In Delhi, Hair Styling Course In Delhi,Ashmeen Munjaal Star Academy. hair and beauty courses in Delhi, makeup courses, Delhi Beauty and make Up School, beauty courses in Delhi " />



<?php include('common-head.php') ?>



<meta name="google-site-verification" content="ReDRxF0Cio0g6Qx_he7JIJQOmQiVd3eoGSlvCjES6Bs" />

<script src='https://www.google.com/recaptcha/api.js?render=6Lcl-IAUAAAAAPJ9cr_UfH7jxjOo6HtamN9lharn'></script>


<script>


$(document).ready(function(){



//	http://www.hairandmakeupacademy.com/blog/wp-json/posts?filter[posts_per_page]=1



	$.ajax({



		url: 'https://www.hairandmakeupacademy.com/blog/wp-json/posts?filter[posts_per_page]=1',



		type: "GET",



		mimeType:"multipart/form-data",



		//dataType: 'json',



		contentType: false,



		cache: false,



		processData:false,



		beforeSend: function(){



			//console.log('Call Before send');



			//$('.successMsg').html('<img src="'+baseUrl+'images/loader.gif" /><br />Processing...Please wait...');



		},



		success: function (data, textStatus, jqXHR)



		{



			//console.log(data);



			var parsed = JSON.parse(data);



			//console.log(parsed[0].title);



			//console.log(parsed[0].featured_image);



			//console.log(parsed[0].guid);



			$('.blogtitle').html(parsed[0].title);



			var dataimg = parsed[0].featured_image;



			if(dataimg === null){



				dataimg = 'images/video_img8.png';



			} else {



				dataimg = parsed[0].featured_image.guid;



			}



			$('.blogimg').attr('src',dataimg);



		},



		error: function(jqXHR, textStatus, errorThrown) 



		{



		} 



	});



});



</script>







<style>
.youT-POP{
	position: fixed;
    width: 100%;
    height: 100%;
    z-index: 9999999;
    top: 0;
    left: 0;
    background: #0000001f;
	overflow-y:auto;
	overflow-x:hidden;
	-webkit-transition:5s ease-in-out display-none-transition;
	
}
@-webkit-keyframes display-none-transition
                {
                0% {
                    display: none; 
                    opacity: 0;
                    }

                25% 
                    {
                    display: block; 
                    opacity: .25;
                    }
					
				 50% 
                    {
                    display: block; 
                    opacity: .5;
                    }
					
				50% 
                    {
                    display: block; 
                    opacity: .75;
                    }

                100% 
                    {
                    display: block; 
                    opacity: 100;
                    }
}

.youT-POP ._iFBx{
	width:700px;
	height:400px;
	margin:100px auto;
	background:#fff;	
}

._dPad{
	padding:5px 10px;
	position:relative;
}
._closePP, ._closePP:hover, ._closePP:active{
	position: absolute;
    right: 10px;
    top: 8px;
    color: #fff;
    background: red;
    /* padding: 3px 0; */
    border-radius: 3px;
    font-size: 25px;
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
	text-decoration: none;
}
@media only screen and (max-width:960px){
.youT-POP{
	display:none !important;
}
}
.service_img1{



    background: #ccc;



    width: 100%;



    height: 199px !important;



    display: block;



     margin-bottom:0px !important; 



     border: 0 !important; 



    border-radius: 10px;



    overflow: hidden;



}



.padding-0{



padding:0;



}



.hd-Tx{

    position: relative;

    z-index: 1;

    text-align: center;

	margin: 35px 0 20px 0;

}

.w-Color{

	color:#fff;

}



.courseItem{



padding:20px;



margin:0 auto 30px;



}



.about .container{



background:none;



}



.back-img{



background:url(images/welcome-BG1.jpg) no-repeat bottom;



margin-bottom:15px;



}







.formBox{



padding:26px 15px;



}



.about{



padding:8px 0px;



}



.aboutInfo{



margin:0 0px 0 2%;



}



.formBox0{



	padding:0px;



	margin:0px;



}



/*._imgH{



	height:195px !important;



}*/



.blogtitle0{



	text-align:center !important;



}



.mid-logo img{



	width: 40% !important;



	margin-bottom: -15px;



}



.parallax{



    min-height:350px;



    background-image: url(faceoff-ban.jpg);



    position: relative;



   /* background-attachment: fixed;*/



    background-position: center;



    background-repeat: no-repeat;



    background-size: cover;



	margin-bottom:10px;



}



.parallax:after{



	background:rgba(0,0,0,.7);



	position:absolute;



	left:0;



	top:0;



	width:100%;



	height:100%;



	content:'';



}







/*._custom .formBox{



	padding:10px !important;



}



._custom .formBox .form-group{



	margin-bottom:10px !important;



}



._custom ._miH{



	height:185px !important;



}*/



</style>



<style>



.service_img1{



    background: #ccc;



    width: 100%;



    height: 199px !important;



    display: block;



     margin-bottom:0px !important; 



     border: 0 !important; 



    border-radius: 10px;



    overflow: hidden;



}



.padding-0{



padding:0;



}







.courseItem{



padding:20px;



margin:0 auto 30px;



}



.about .container{



background:none;



}



.back-img{



background:url(images/welcome-BG1.jpg) no-repeat bottom;



margin-bottom:15px;



}







.formBox{



padding:15px 15px;



}



.about{



padding:8px 0px;



}



.aboutInfo{



margin:0 0px 0 2%;



}











.toggle-show{



/*background:rgba(255,255,255,.98); float:left; width:10px; height:4000px; z-index:111;*/



width:320px; overflow:hidden; background:rgba(0,0,0,.9); padding:15px; height:150px; display:none; float:left; color:#fff;



}



.toggle-show h3{



padding:0 0 15px 0;



margin:0;



}



.toggle-show input[type="email"]{



border:0;



outline:0;



padding:10px;



color:#000;



}



.toggle-show input[type="submit"]{



border:0;



outline:0;



padding:10px 17px;



background:#FF6600;



color:#fff;



}



._video li a{

	border: 1px solid #ccc;

    padding: 10px;

    -wbkit-border-radius: 7px;

	border-radius: 7px;

	min-height:250px;

}

._faceList li .insBx a{

	position:relative;

}

._faceList li .insBx a span{

	display:block;

	position:absolute;

	width:100%;

	background:rgba(0,0,0,.5);

	left:0;

	bottom:0;

	padding:7px;

	text-align:center;

	color:#fff;

	font-size:17px;

}





@media only screen and (max-width: 560px){

._video li a{

	min-height:275px;

}

}



</style>



<link rel="stylesheet" href="faceoff-sty.css" type="text/css">


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






<div class="hair_makeup">



<?php include('header.php') ?>



<!--banner start here-->







<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">



        <ol class="carousel-indicators">



          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>



          <li data-target="#carousel-example-generic" data-slide-to="1"></li>



          <li data-target="#carousel-example-generic" data-slide-to="2"></li>



          <li data-target="#carousel-example-generic" data-slide-to="3"></li>



          <li data-target="#carousel-example-generic" data-slide-to="4"></li>



          <li data-target="#carousel-example-generic" data-slide-to="5"></li>



          <li data-target="#carousel-example-generic" data-slide-to="6"></li>



          <li data-target="#carousel-example-generic" data-slide-to="7"></li>



        </ol>



        <div class="carousel-inner" role="listbox">



          <!--<div class="item active">



            <img src="images/slide-1.png" />



          </div>



          <div class="item">



            <img src="images/slide-2.png" />



          </div>



          <div class="item">



           <img src="images/slide-3.png" />



          </div>-->



          



          <div class="item active">



            <img src="images/slide-new9.jpg" />



          </div>



          <div class="item">



            <img src="images/slide-new8.jpg" />



          </div>



          <div class="item">



            <img src="images/slide-new1.jpg" />



          </div>



          <div class="item">



            <img src="images/slide-new2.jpg" />



          </div>



          <div class="item">



            <img src="images/slide-new3.jpg" />



          </div>



          <div class="item">



            <img src="images/slide-new4.jpg" />



          </div>



          <div class="item">



            <img src="images/slide-new5.jpg" />



          </div>



          <div class="item">



            <img src="images/slide-new6.jpg" />



          </div>



          <div class="item">



            <img src="images/slide-new7.jpg" />



          </div>



          



        </div>



        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">



          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>



          <span class="sr-only">Previous</span>



        </a>



        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">



          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>



          <span class="sr-only">Next</span>



        </a>



      </div>







<!--banner end here-->



</div>



<div class="about">



  <div class="container">



    <div class="row "> 



      



      <!-- Blog Post Content Column -->



      <div class="col-lg-8"> 



		<br>



        <div class="back-img">



        <div class="aboutInfo" style="padding-bottom:20px;">



        



        <div class="_overTx">



        	<h4>AASHMEEN  MUNJAAL's Star Hair & Makeup Academy</h4>



      



		 <h5 class="mb10"><em>What is one thing that will never go out of business? Make-up and Hair styles!!</em></h5>



         



		<p><b>After all, who doesn't like to look beautiful?</b></p>



        <p class="mb10">It is a definite boost to an individual's self confidence level. And with our exceptional make-up artists and hair stylists, we aim to build confident and beautiful people.</p>



        <p class="mb10">We, at Star Hair and Makeup Academy have pioneered in guiding those with talent and interest in this profession. </p>



		



		<p><b>Experience Helps Make A Perfectionist, Not Just Practice!!</b></p>



		<p>Born 23 years ago as the brainchild of Aashmeen Munjaal, Star Hair and Makeup Academy has been curating brilliant students; since 1989. Our courses have been designed based on the prevailing industry trends; and thus we provide the best courses for carving out the best make-up artists and hair stylists in New Delhi.    </p>



        



		<p class="mb10">Since our inception, we have come a long way from just a single outlet to multiple outlets in the city. We are fully committed to training and educating you about the nuances of make-up and hair styling. Just like any other profession, this also requires determination, hard work and a lot of practice. After all, creating beautiful faces and stylish hair is an art.</p>



		



        <p><b>We Respect Individuality</b></p>



		<p>Every clients needs are different and this is what Aashmeen Munjaal believes in. Respecting and following her firm belief, we endeavor to meet the distinct requirements of every customer. Our commitment to the students is to give them hands-on experience, with an in-depth consultation and knowledge about personalized hair-styles that suit the clients facial features. <br><br><br></p>



        </div>



		



	  </div>



        </div>



      <br>



      



	   </div>



      



      <!-- Blog Sidebar Widgets Column -->



      <div class="col-md-4">



      <div class="mid-logo"><img src="images/Logo-IAO.png"/></div>



	  <h4>Request a Callback</h4>



        <div class="form_Set">



           <form action="" method="post" class="_custom">

            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

		  <div class=" formBox" style="margin-bottom:5px;"> 



            <div class="form-group">



			<div class="input-group">



			   <div class="input-group-addon">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>



              <input type="email"  name="email" class="form-control"  placeholder="Your Email" required>



            </div>



            </div>



			<div class="form-group">



			<div class="input-group">



			   <div class="input-group-addon">  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>



               <input type="text"  name ="phone" class="form-control"  placeholder="Phone Number" required>



            </div>



            </div>



			<div class="form-group">



			<div class="input-group">



			   <div class="input-group-addon">  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></div>



               



			   <select class="form-control"  name="course" placeholder="Courses" required>



			   <option value="">Select Course</option>



			   <option value="Star Mastery Course - 7 Months">Star Mastery Course - 7 Months</option>



			   <option value="Absolute Route to Hairdressing - 4 Months">Absolute Route to Hairdressing - 4 Months</option>



			   <option value="Advance Makeup Artistry - 3 Months">Advance Makeup Artistry - 3 Months</option>



			   <option value="Professional Art Of Makeup - 2 Months">Professional Art Of Makeup - 2 Months</option>



			   <option value"Basic Chemicals - 3 Weeks">Basic Chemicals - 3 Weeks</option>



			   <option value"Advance Hair-dos - 2 Weeks">Advance Hair-dos - 2 Weeks</option>



			   <option value"Basic Cuts + Styling - 2 Weeks">Basic Cuts + Styling - 2 Weeks</option>



			   <option value"Basic Updos - 2 Weeks">Basic Updos - 2 Weeks</option>



			   <option value"Self Grooming - 2 Weeks">Self Grooming - 2 Weeks</option>



			   <option value"Advance Chemicals - 1.5 Weeks">Advance Chemicals - 1.5 Weeks</option>



			   <option value"Advance Cut & Signature Styling - 1 Week">Advance Cut & Signature Styling - 1 Week</option>



			   </select>



            </div>



            </div>



		<!--<a class="btn btn-xs btn-default floatright" >Sumbit</a>-->



                               <p><?php if(isset($_SESSION['msg'])) { echo $_SESSION['msg'] ;  } 



if(isset($_SESSION['msg'])) {



 



if ($_SESSION['timeout'] + 2 * 2 < time()) {



   // session timed out



//echo "success";



unset($_SESSION['msg']);



} 



}



?></p>



                                 <button type="submit" class="fbtn cw floatright" name="SUT">Submit</button>



           </div>







            



            



            



          </form>



        </div>



      </div>



      



     



      



    </div>



  </div>



  



  <div class="parallax">



  		<div class="container">



        	<h4 class="hd-Tx w-Color">FaceOff</h4>



            <ul class="row _faceList">



            	<li class="col-sm-4">

                    <div class="insBx">

                        <a href="faceoff-2018.php">

                        	<img src="../images/faceoff-01.jpg" alt="FaceOff 2018">

                            <span>2018</span>

                        </a>

                    </div>

                </li>



                <li class="col-sm-4">

                    <div class="insBx">

                        <a href="faceoff-2017.php">

                        	<img src="../images/faceoff-02.jpg" alt="FaceOff 2017">

                            <span>2017</span>

                        </a>

                    </div>

                </li>



                <li class="col-sm-4">

                    <div class="insBx">

                        <a href="faceoff-2016.php">

                        	<img src="../images/faceoff-03.jpg" alt="FaceOff 2016">

                            <span>2016</span>

                        </a>

                    </div>

                </li>



            </ul>



            <p class="_viewA"><a href="faceoff.php">View All</a></p>



        </div>



  </div>



  



  <div class="container grayColor">  	 



      <div class="text-center" style="padding-top:12px;">        



        	<div class="col-md-4 col-sm-4 padding-0">



		<div class="portfolio-item courseItem">



		<h4>Hair Courses</h4>



		<img src="images/hr_img.png" class="hr_img" alt="">



          



                <a href="courses.php#Hair" class="service_img"> <img src="images/course_03.png"></a>



                



                <p>If there is one thing that is satisfying, it is pursuing your dream career. And if your calling is styling hair.</p>



				<a href="courses.php#Hair" class="read_more">View All</a>



          </div>



        </div>



        	<div class="col-md-4 col-sm-4 padding-0">



	<div class="portfolio-item courseItem">



	 <h4>Makeup Courses</h4>



	 <img src="images/hr_img.png" class="hr_img" alt="">



          



                <a href="courses.php#makeup" class="service_img"><img src="images/course_05.png"> </a>



               



                <p>Right from the teenage years, girls start applying eyeliners and that is how they get obsessed with make-up.</p>



				<a href="courses.php#makeup" class="read_more">View All</a>



          </div>



		  



        </div>



        	<div class="col-md-4 col-sm-4 padding-0">



				<div class="portfolio-item courseItem">



					<!--Start Display Blog Post-->            



            <div class="bolgbox formBox0 tubebox text-center">



			



			<h4 style="margin:0 auto;">Latest Blog</h4> 



			<img src="images/hr_img.png" class="hr_img" alt="">



			<p><img src="images/video_img8.png" alt="" class="blogimg _imgH" /></p>



            <p class="blogtitle0">How A Beauty Parlour Course Can Help One Build A Career?</p>



			<a href="blog" class="read_more" style="bottom:-18px;">View All</a>



			</div>



            <!--End Display Blog Post-->



          		</div>



		  



        </div>



        	<p class="clearfix"></p>



        </div>



  </div>



  



</div>







<!-- Latest Event Float Box 



<div class="eventfloat" >



<a href="latest-events.php">Latest Events</a>



</div>-->







<div class="container _borR">





	<h4 class="hd-Tx">Listen to Our Students</h4>







	<ul class="_video">

			<?php

			$result = webServiceCall($BASEURL.'certificate/service/v1/getvideo/5');

			$result = json_decode($result);

			if($result->error === false){

				foreach($result->data as $row){

			?>

    	<li>

        	<a class="_miH youtube _vPOP" href="https://www.youtube.com/embed/<?php echo $row->code;?>">

            	<span><img src="https://i.ytimg.com/vi/<?php echo $row->code;?>/mqdefault.jpg" alt=""/></span>

                <div class="_capT">

                	<p><?php echo $row->title;?></p>

                    <p>Date: <?php echo $row->createdon;?></p>

                </div>

            </a>

        </li>

		<?php } }?>

        

    </ul>



    



    <p class="_view-video"><a href="testimonial.php">View All</a></p>







</div>











<div class="gallery mb20">



  <div class="container">



  <div class="row">



  <div class="grayColor" style="padding:5px 10px">



<h4 class="text-center mt10" >Inside Our Academy</h4>  







	<div id="demo">



        <div id="owl-demo" class="owl-carousel">    



		<div class="item"><a title=""><img src="images/scroll/32.jpg" alt="" class="inside" rel="images/scroll/big_img/32.jpg"/></a></div>



		<div class="item"><a title=""><img src="images/scroll/33.jpg" alt="" class="inside" rel="images/scroll/big_img/33.jpg"/></a></div>



		<div class="item"><a title=""><img src="images/scroll/34.jpg" alt="" class="inside" rel="images/scroll/big_img/34.jpg"/></a></div>



		<div class="item"><a title=""><img src="images/scroll/35.jpg" alt="" class="inside" rel="images/scroll/big_img/35.jpg"/></a></div>



		<div class="item"><a title=""><img src="images/scroll/36.jpg" alt="" class="inside" rel="images/scroll/big_img/36.jpg"/></a></div>



		



          <div class="item"><a title=""><img src="images/scroll/1.jpg" alt="" class="inside" rel="images/scroll/big_img/1.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/2.jpg" alt="" class="inside" rel="images/scroll/big_img/2.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/3.jpg" alt="" class="inside" rel="images/scroll/big_img/3.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/4.jpg" alt="" class="inside" rel="images/scroll/big_img/4.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/5.jpg" alt="" class="inside" rel="images/scroll/big_img/5.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/6.jpg" alt="" class="inside" rel="images/scroll/big_img/6.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/7.jpg" alt="" class="inside" rel="images/scroll/big_img/7.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/8.jpg" alt="" class="inside" rel="images/scroll/big_img/8.jpg"/></a></div>



		  <div class="item"><a title=""><img src="images/scroll/9.jpg" alt="" class="inside" rel="images/scroll/big_img/9.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/10.jpg" alt="" class="inside" rel="images/scroll/big_img/10.jpg"/></a></div>



		  <div class="item"><a title=""><img src="images/scroll/11.jpg" alt="" class="inside" rel="images/scroll/big_img/11.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/12.jpg" alt="" class="inside" rel="images/scroll/big_img/12.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/13.jpg" alt="" class="inside" rel="images/scroll/big_img/13.jpg"/></a></div>



		  



          <div class="item"><a title=""><img src="images/scroll/14.jpg" alt="" class="inside" rel="images/scroll/big_img/14.jpg"/></a></div>



		  



          <div class="item"><a title=""><img src="images/scroll/15.jpg" alt="" class="inside" rel="images/scroll/big_img/15.jpg"/></a></div>



		  



          <div class="item"><a title=""><img src="images/scroll/16.jpg" alt="" class="inside" rel="images/scroll/big_img/16.jpg"/></a></div>



		  



          <div class="item"><a title=""><img src="images/scroll/17.jpg" alt="" class="inside" rel="images/scroll/big_img/17.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/18.jpg" alt="" class="inside" rel="images/scroll/big_img/18.jpg"/></a></div>



          <!--<div class="item"><a title=""><img src="images/scroll/19.jpg" alt="" class="inside" rel="images/scroll/big_img/19.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/20.jpg" alt="" class="inside" rel="images/scroll/big_img/20.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/21.jpg" alt="" class="inside" rel="images/scroll/big_img/21.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/22.jpg" alt="" class="inside" rel="images/scroll/big_img/22.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/23.jpg" alt="" class="inside" rel="images/scroll/big_img/23.jpg"/></a></div>-->



          <div class="item"><a title=""><img src="images/scroll/24.jpg" alt="" class="inside" rel="images/scroll/big_img/24.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/25.jpg" alt="" class="inside" rel="images/scroll/big_img/25.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/26.jpg" alt="" class="inside" rel="images/scroll/big_img/26.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/27.jpg" alt="" class="inside" rel="images/scroll/big_img/27.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/28.jpg" alt="" class="inside" rel="images/scroll/big_img/28.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/29.jpg" alt="" class="inside" rel="images/scroll/big_img/29.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/30.jpg" alt="" class="inside" rel="images/scroll/big_img/30.jpg"/></a></div>



          <div class="item"><a title=""><img src="images/scroll/31.jpg" alt="" class="inside" rel="images/scroll/big_img/31.jpg"/></a></div>







 







        </div>



    </div>



    







<div class="modalDialog">



    <div class="itemBox_img">



    	



    </div>



</div>



    <script src="js/owl.carousel.js"></script>



    <style>



    #owl-demo .item{ padding: 0px; margin: 5px; color: #FFF;-webkit-border-radius: 3px;-moz-border-radius: 3px; border-radius: 3px;text-align: center;}.owl-buttons{display:none;}



    </style>







    <script>



    $(document).ready(function() {







      var owl = $("#owl-demo");



      owl.owlCarousel({



	loop:true,



	autoplay:true,



	autoplayTimeout:500,



	autoplayHoverPause:true,



	margin:10,



    responsiveClass:true,



    responsive:{



        0:{



            items:1,



            



        },



        600:{



            items:3,



            



        },



        1000:{



            items:5,



            



            loop:true



        }



    }



})







    });



    </script>



  <!-- srcolling end here-->



  </div>



  



  </div>



  </div>



</div>



<div class="testimonial mb20">



<div class="container">



<h4 class="text-center" style="position:relative;">Students Speak <small style="position:absolute; right :0; font-size:11px; top:10px"><a href="testimonial-detail.php">View All &gt;&gt;</a></small></h4>



<div class="row">



<?php    







			function custom_echo($x, $length)



			{



			  if(strlen($x)<=$length)



			  {



				echo $x;



			  }



			  else



			  {



				$y=substr($x,0,$length) . '...';



				echo $y;



			  }



			}







include 'certificate/library/config.php';



        $sql = "SELECT t.id,t.date,t.name,t.phone,t.course,t.center,t.message,t.status,c.name as course_name,ce.name as center_name



        FROM tbl_testimonial t



        INNER JOIN tbl_testimonial_course c on t.course = c.id



        INNER JOIN tbl_branch ce on t.center = ce.id



        where t.status = 1



		ORDER BY id desc LIMIT 3";



        $result = dbQuery($sql);



        if(dbNumRows($result) > 0){



            while($fd = dbFetchAssoc($result)){



               		



            



  ?>  



		<div class="col-lg-4">



		<div class="bolgbox testimonialBox tubebox text-center">



		<span class="testcourse"><?php custom_echo($fd['message'], 200); ?></span>



		<span class="testname">Name : <strong><?php echo $fd['name']; ?></strong></span>



		<span class="testname">Course : <?php echo $fd['course_name']; ?></span>



		<span class="testname">Center : <?php echo $fd['center_name']; ?></span>



		<div class="datetime">



 <?php 



     $yrdata= strtotime($fd['date']);



     echo date('d M y h:ia', $yrdata);



 ?>



</div>



		</div>



		</div>



<?php }



        } ?>







<!--<div class="col-lg-4">



<div class="bolgbox testimonialBox tubebox text-center">



<span class="testcourse">Time is like a river....... U cant step on the same water twice bcoz the flow that has passed will never pass u again... So, cherish every moment of ur life!!!...</span>



<span class="testname">Seema Verma</span>



<span class="testname">Makeup</span>



<span class="testname">North Campus</span>



</div>



</div>



<div class="col-lg-4">



<div class="bolgbox testimonialBox tubebox text-center">



<span class="testcourse">"People Love To Say Good To The Good Things, But Don't Love To Love The Good Things."</span>



<span class="testname">Seema Verma</span>



<span class="testname">Makeup</span>



<span class="testname">North Campus</span>



</div>



</div>-->







</div>



</div>



</div>	



<?php include('footer.php')?>


<div class="youT-POP">
	<div class="_iFBx">
			<div class="_dPad"><a href="#" target="_blank"><img src="https://www.hairandmakeupacademy.com/yt-logo.jpg" width="82px" height="36px"/></a> <a href="javascript:void(0);" class="_closePP">&times;</a></div>
			<iframe id="player" width="700" height="400" src="https://www.youtube.com/embed/XA50WkcVZas?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
	</div>
</div>



<script>
$(document).ready(function(){	
	$('._closePP').click(function() {
	$('.youT-POP').hide();
	$("#player").attr('src','https://www.youtube.com/embed/XA50WkcVZas');   
});
	
});
</script>

<script>


	//var j = jQuery.noConflict( true );



	/*(function($) {



                //Examples of how to assign the Colorbox event to elements



    



                $(".youtube").colorbox({open: true,iframe:true, innerWidth:640, innerHeight:390});



                



                                



         })(jQuery);*/



        </script>  



<script>



$(document).ready(function() {



$(".subs-tab").click(function(){



    $(".toggle-show").animate({width: 'toggle'});



});



});



</script>



<div class="subscription-btn">	



	<a href="javascript:void();" style="display: inline-block;" class="subs-tab"><img src="images/newsletter-btn.png" alt="subscribe" /></a>



   <div class="toggle-show">



        <h3>Subscribe Newsletter</h3>



        <p>



        <form action="https://www.hairandmakeupacademy.com/certificate/newsletter_subscribe_process.php" method="POST">



        <input type="email" name="emailid" placeholder="Enter email id" required />



        <input type="submit" value="Subscribe"/>



        </form>



        </p>



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





<script>







$(document).ready(function(){



	$('._vPOP').click(function(){



		$('._popup').fadeIn(500);



		});



		



	$('._close').click(function(){



		$('._popup').fadeOut(500);



		});



	});







</script>