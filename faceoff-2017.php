<?php 

include('admin/connection.php');

session_start();

 if(isset($_POST['SUT'])){

       $email = $_POST['email'];

       $phone = $_POST['phone'];

       $course = $_POST['course'];

	      $to = "staracademyworkshop@gmail.com,nielltalwar@gmail.com";

	      //$to = "vivek@bgsystem.com,bgsystem@gmail.com";

          $subject = "Details";

          $message = "Email : ".$email."\n\n";

          $message .= "Phone Number : ".$phone."\n\n";

          $message .= "Course : ".$course."\n\n";

          //$message .= "your username : <b>".$_SESSION['reg_id']."</b>";

         //$header = "From:esicsports.com \r\n";

         //$header .= "MIME-Version: 1.0\r\n";

         $header .= "Content-type: text/plain\n\n";

         

         $sql = mysql_query("insert into tbl_lead set user_id='0',lead_from='Web Home',email='$email',contact='$phone',course='$course',register_date=now(),update_date=now(),status=1");

         

          $response = mail ($to,$subject,$message,$header);

		  if($response){

		   // header('location:index.php?msz=Thanks for submiting form');die;

                                     $_SESSION['msg'] = 'Your request has been submitted. Our counsellor will call you shortly!';

                                      $_SESSION['timeout'] = time();

		  }

	

   }

 

 

 

 ?>



<title>Faceoff 2017 | Aashmeen Munjaal's Star Hair & Makeup Academy</title>

<meta name="description" content="Aashmeen Munjaal a Best Hair & Beauty Make up Courses Academy School for Beautician course in Delhi provide the best courses Beauty Parlor, Professional make-up & hair stylists in New Delhi." />

<meta name="keywords" content="Hair And Makeup Academy In Delhi, Beautician course in Delhi, Best Beauty Make up Academy in Delhi, Beauty Academy In Delhi, beauty parlor course in Delhi, Professional Makeup Courses In Delhi, Best Makeup Institute In Delhi, Hair Academy In Delhi, Hair Styling Course In Delhi,Ashmeen Munjaal Star Academy. hair and beauty courses in Delhi, makeup courses, Delhi Beauty and make Up School, beauty courses in Delhi " />

<?php include('common-head.php') ?>

<meta name="google-site-verification" content="ReDRxF0Cio0g6Qx_he7JIJQOmQiVd3eoGSlvCjES6Bs" />

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-74695357-1', 'auto');

  ga('send', 'pageview');





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

			console.log(data);

			var parsed = JSON.parse(data);

			console.log(parsed[0].title);

			console.log(parsed[0].featured_image);

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

._imgH{

	height:195px !important;

}

.blogtitle0{

	text-align:center !important;

}

.mid-logo img{

	width: 45% !important;

}

.parallax{

    min-height: 400px;

    background-image: url(faceoff-ban.jpg);

    position: relative;

   /* background-attachment: fixed;*/

    background-position: center;

    background-repeat: no-repeat;

    background-size: cover;

	margin-bottom:20px;

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



</style>

<script type='text/javascript' src='faceoff-img/js/jquery-11.0.min.js'></script>	

<script type='text/javascript' src='faceoff-img/js/unitegallery.min.js'></script> 

<script type='text/javascript' src='faceoff-img/js/ug-theme-tiles.js'></script>

<link rel='stylesheet' href='faceoff-img/css/unite-gallery.css' type='text/css' /> 

     

<link rel="stylesheet" href="faceoff-sty.css" type="text/css">
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 998417518;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998417518/?guid=ON&amp;script=0"/>
</div>
</noscript>

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

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-74703607-1', 'auto');

  ga('send', 'pageview');



</script>

<div class="hair_makeup">

<?php include('header.php') ?>



</div>

<div class="about _midPnl">

	<div class="container">

    <h4 class="hd-Tx">FaceOff - 2017</h4>

	<div id="gallery" style="display">

		<a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/1.jpg" data-image="faceoff-img/2017/1b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/2.jpg" data-image="faceoff-img/2017/2b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/3.jpg" data-image="faceoff-img/2017/3b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/4.jpg" data-image="faceoff-img/2017/4b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        

        

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/5.jpg" data-image="faceoff-img/2017/5b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/6.jpg" data-image="faceoff-img/2017/6b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/7.jpg" data-image="faceoff-img/2017/7b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/8.jpg" data-image="faceoff-img/2017/8b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        

        

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/9.jpg" data-image="faceoff-img/2017/9b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/10.jpg" data-image="faceoff-img/2017/10b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/11.jpg" data-image="faceoff-img/2017/11b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/12.jpg" data-image="faceoff-img/2017/12b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        

        

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/13.jpg" data-image="faceoff-img/2017/13b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/14.jpg" data-image="faceoff-img/2017/14b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/15.jpg" data-image="faceoff-img/2017/15b.jpg" data-description="Faceoff 2017" style="display">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/16.jpg" data-image="faceoff-img/2017/16b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        

        

         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/17.jpg" data-image="faceoff-img/2017/17b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/18.jpg" data-image="faceoff-img/2017/18b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/19.jpg" data-image="faceoff-img/2017/19b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/20.jpg" data-image="faceoff-img/2017/20b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        

        

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/21.jpg" data-image="faceoff-img/2017/21b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/22.jpg" data-image="faceoff-img/2017/22b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/23.jpg" data-image="faceoff-img/2017/23b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/24.jpg" data-image="faceoff-img/2017/24b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>	

        

        

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/25.jpg" data-image="faceoff-img/2017/25b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/26.jpg" data-image="faceoff-img/2017/26b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/27.jpg" data-image="faceoff-img/2017/27b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/28.jpg" data-image="faceoff-img/2017/28b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        

        

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/29.jpg" data-image="faceoff-img/2017/29b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/30.jpg" data-image="faceoff-img/2017/30b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/31.jpg" data-image="faceoff-img/2017/31b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/32.jpg" data-image="faceoff-img/2017/32b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
        <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/33.jpg" data-image="faceoff-img/2017/33b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
        
        
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/34.jpg" data-image="faceoff-img/2017/34b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/35.jpg" data-image="faceoff-img/2017/35b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/36.jpg" data-image="faceoff-img/2017/36b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/37.jpg" data-image="faceoff-img/2017/37b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/38.jpg" data-image="faceoff-img/2017/38b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/39.jpg" data-image="faceoff-img/2017/39b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/40.jpg" data-image="faceoff-img/2017/40b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/41.jpg" data-image="faceoff-img/2017/41b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/42.jpg" data-image="faceoff-img/2017/42b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/43.jpg" data-image="faceoff-img/2017/43b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/44.jpg" data-image="faceoff-img/2017/44b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/45.jpg" data-image="faceoff-img/2017/45b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/46.jpg" data-image="faceoff-img/2017/46b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/47.jpg" data-image="faceoff-img/2017/47b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/48.jpg" data-image="faceoff-img/2017/48b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/49.jpg" data-image="faceoff-img/2017/49b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/50.jpg" data-image="faceoff-img/2017/50b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/51.jpg" data-image="faceoff-img/2017/51b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/52.jpg" data-image="faceoff-img/2017/52b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/53.jpg" data-image="faceoff-img/2017/53b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/54.jpg" data-image="faceoff-img/2017/54b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/55.jpg" data-image="faceoff-img/2017/55b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/56.jpg" data-image="faceoff-img/2017/56b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/57.jpg" data-image="faceoff-img/2017/57b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/58.jpg" data-image="faceoff-img/2017/58b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/59.jpg" data-image="faceoff-img/2017/59b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/60.jpg" data-image="faceoff-img/2017/60b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/61.jpg" data-image="faceoff-img/2017/61b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/62.jpg" data-image="faceoff-img/2017/62b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/63.jpg" data-image="faceoff-img/2017/63b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/64.jpg" data-image="faceoff-img/2017/64b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/65.jpg" data-image="faceoff-img/2017/65b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/66.jpg" data-image="faceoff-img/2017/66b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/67.jpg" data-image="faceoff-img/2017/67b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/68.jpg" data-image="faceoff-img/2017/68b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/69.jpg" data-image="faceoff-img/2017/69b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>
         <a href="javascript:void(0);">

			<img alt="Faceoff 2017" src="faceoff-img/2017/70.jpg" data-image="faceoff-img/2017/70b.jpg" data-description="Faceoff 2017" style="display:none">

		</a>

        

        	 

	</div>

</div>

</div>



<?php include('footer.php')?>

<script type="text/javascript">

    //window.open("https://youtu.be/cerSB_2YRhY", "Google", "width=500,height=320,top=150,left=500");

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



<script type="text/javascript">



jQuery(document).ready(function(){

	

	jQuery("#gallery").unitegallery();



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