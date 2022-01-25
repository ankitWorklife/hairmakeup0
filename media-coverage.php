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
<title>Media Coverage | Aashmeen Munjaal's Star Hair &amp; Makeup Academy</title>
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
      
		
		<div style="max-width:980px; margin:20px auto 0 auto">
        	<div class="gallery">
<div class="customNavigation" style="display:none;">
  <a class="btn prev"><img src="images/back-arrow.png" alt=""></a>
  <a class="btn next"><img src="images/next-arrow.png" alt=""></a>
</div>
	<div id="demo">
        <div id="owl-demo" class="owl-carousel owl-theme"> 
		    <div class="item"><a title=""><img src="images/media/15.jpg" alt="" class="inside" rel="images/media/15-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/16.jpg" alt="" class="inside" rel="images/media/16-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/17.jpg" alt="" class="inside" rel="images/media/17-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/18.jpg" alt="" class="inside" rel="images/media/18-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/19.jpg" alt="" class="inside" rel="images/media/19-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/20.jpg" alt="" class="inside" rel="images/media/20-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/21.jpg" alt="" class="inside" rel="images/media/21-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/22.jpg" alt="" class="inside" rel="images/media/22-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/23.jpg" alt="" class="inside" rel="images/media/23-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/24.jpg" alt="" class="inside" rel="images/media/24-b.jpg"/></a></div>
			<div class="item"><a title=""><img src="images/media/25.jpg" alt="" class="inside" rel="images/media/25-b.jpg"/></a></div>
		
          <div class="item"><a title=""><img src="images/media/13.jpg" alt="" class="inside" rel="images/media/13-b.jpg"/></a></div>  
          <div class="item"><a title=""><img src="images/media/14.jpg" alt="" class="inside" rel="images/media/14-b.jpg"/></a></div>  
          <div class="item"><a title=""><img src="images/media/11.jpg" alt="" class="inside" rel="images/media/11-b.jpg"/></a></div>       
          <div class="item"><a title=""><img src="images/media/12.jpg" alt="" class="inside" rel="images/media/12-b.jpg"/></a></div>

		  
          <div class="item"><a title=""><img src="images/media/1.jpg" alt="" class="inside" rel="images/media/1-b.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/media/2.jpg" alt="" class="inside" rel="images/media/2-b.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/media/3.jpg" alt="" class="inside" rel="images/media/3-b.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/media/4.jpg" alt="" class="inside" rel="images/media/4-b.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/media/5.jpg" alt="" class="inside" rel="images/media/5-b.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/media/6.jpg" alt="" class="inside" rel="images/media/6-b.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/media/7.jpg" alt="" class="inside" rel="images/media/7-b.jpg"/></a></div>
          <div class="item"><a title=""><img src="images/media/8.jpg" alt="" class="inside" rel="images/media/8-b.jpg"/></a></div>       
          <div class="item"><a title=""><img src="images/media/9.jpg" alt="" class="inside" rel="images/media/9-b.jpg"/></a></div>       
          <div class="item"><a title=""><img src="images/media/10.jpg" alt="" class="inside" rel="images/media/10-b.jpg"/></a></div>       
          <div class="item"><a title=""><img src="images/media/11.jpg" alt="" class="inside" rel="images/media/11-b.jpg"/></a></div>       
          <div class="item"><a title=""><img src="images/media/12.jpg" alt="" class="inside" rel="images/media/12-b.jpg"/></a></div>

 

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
            items:12,
            
        },
        1000:{
            items:4,
            
            loop:true
        }
    }
	
});
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })

 
});
    </script>

	
	<center class="pghead"><img src="images/media-coverage-head.png" alt="Media Coverage"></center>
  <!-- srcolling end here-->

  
</div>
            
        	<div class="media-grid">
            
            <div class="table-responsive">
  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
    <thead class="blue-dark">
      <tr>       
        <th style="width:3%; text-align:center;" class="hidden-phone">S.N.</th>
        <th style="width:10%; text-align:center;" class="hidden-phone">Date</th>
        <th style="width:25%; text-align:center;" class="hidden-phone">Title</th>
        <th style="width:55%; text-align:center;" class="hidden-phone">Link</th>
        <th style="width:7%; text-align:center;" class="hidden-phone">Share</th>
      </tr>
    </thead>
    <tbody class="font-13">
      <tr class="format-sty">       
        <td>20</td>
        <td>15/09/2016</td>
        <td>Beauty News India</td>
        <td><a href="https://www.facebook.com/delhifundos/posts/900936680010220" target="_blank">https://www.facebook.com/delhifundos/posts/900936680010220</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2Fdelhifundos%2Fposts%2F900936680010220&layout=button&size=small&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>


	<tr class="format-sty">       
        <td>19</td>
        <td>14/09/2016</td>
        <td>Beauty News India</td>
        <td><a href="http://delhi-fun-dos.com/face-off-convocation-fashion-show-star-hair-makeup-academy/" target="_blank">http://delhi-fun-dos.com/face-off-convocation-fashion-show-star-hair-makeup-academy/</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fdelhi-fun-dos.com%2Fface-off-convocation-fashion-show-star-hair-makeup-academy%2F&layout=button&size=small&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>

	<tr>       
        <td>18</td>
        <td>23/09/2016</td>
        <td>Zoom Delhi Newspaper</td>
        <td>-- -- --</td>
        
      </tr>      
      <tr class="format-sty">       
        <td>17</td>
        <td>23/09/2016</td>
        <td>Beauty News India</td>
        <td><a href="http://beautynewsindia.com/celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016-%E2%80%8B/" target="_blank">http://beautynewsindia.com/celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016-%E2%80%8B/</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fbeautynewsindia.com%2Fcelebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016-%25E2%2580%258B%2F&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr>       
        <td>16</td>
        <td>23/09/2016</td>
        <td>Beauty News India (Twitter)</td>
        <td><a href="https://twitter.com/beautynewsindia/status/776672200229212160" target="_blank">https://twitter.com/beautynewsindia/status/776672200229212160</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Ftwitter.com%2Fbeautynewsindia%2Fstatus%2F776672200229212160&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr class="format-sty">       
        <td>15</td>
        <td>23/09/2016</td>
        <td>WOW Delhi</td>
        <td><a href="http://wowdelhi.com/star-salon-celebrity-hair-stylist-niell-talwar-workshop-grehlaksmi-awards-2016/" target="_blank">http://wowdelhi.com/star-salon-celebrity-hair-stylist-niell-talwar-workshop-grehlaksmi-awards-2016/</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwowdelhi.com%2Fstar-salon-celebrity-hair-stylist-niell-talwar-workshop-grehlaksmi-awards-2016%2F&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr class="format-sty">       
        <td>14</td>
        <td>23/09/2016</td>
        <td>Pocket News Alert</td>
        <td><a href="http://www.pocketnewsalert.com/2016/09/Star-Salon-Celebrity-Hair-Stylist-Niell-Talwar-at-the-workshop-of-Grehlaksmi-Awards-2016.html" target="_blank">http://www.pocketnewsalert.com/2016/09/Star-Salon-Celebrity-Hair-Stylist-Niell-Talwar-at-the-workshop-of-Grehlaksmi-Awards-2016.html</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.pocketnewsalert.com%2F2016%2F09%2FStar-Salon-Celebrity-Hair-Stylist-Niell-Talwar-at-the-workshop-of-Grehlaksmi-Awards-2016.html&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr>       
        <td>13</td>
        <td>23/09/2016</td>
        <td>Pocket News Alert (Fb)</td>
        <td><a href="https://www.facebook.com/Pocketnewsalert/posts/1582258255413385" target="_blank">https://www.facebook.com/Pocketnewsalert/posts/1582258255413385</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2FPocketnewsalert%2Fposts%2F1582258255413385&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr class="format-sty">       
        <td>12</td>
        <td>23/09/2016</td>
        <td>City Air News</td>
        <td><a href="http://www.cityairnews.com/content/star-salon-celebrity-hair-stylist-niell-talwar-workshop-grehlaksmi-awards-2016" target="_blank">http://www.cityairnews.com/content/star-salon-celebrity-hair-stylist-niell-talwar-workshop-grehlaksmi-awards-2016</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.cityairnews.com%2Fcontent%2Fstar-salon-celebrity-hair-stylist-niell-talwar-workshop-grehlaksmi-awards-2016&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr class="format-sty">       
        <td>11</td>
        <td>23/09/2016</td>
        <td>Scoop.it </td>
        <td><a href="http://www.scoop.it/t/news-attitude/p/4069114113/2016/09/14/star-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016" target="_blank">http://www.scoop.it/t/news-attitude/p/4069114113/2016/09/14/star-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.scoop.it%2Ft%2Fnews-attitude%2Fp%2F4069114113%2F2016%2F09%2F14%2Fstar-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr>       
        <td>10</td>
        <td>23/09/2016</td>
        <td>Scoop.it (Fb)</td>
        <td><a href="https://www.facebook.com/Pocketnewsalert/posts/1582262188746325" target="_blank">https://www.facebook.com/Pocketnewsalert/posts/1582262188746325</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2FPocketnewsalert%2Fposts%2F1582262188746325&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr>       
        <td>09</td>
        <td>23/09/2016</td>
        <td>News Dog</td>
        <td><a href="http://newsdog.today/a/article/57da219b1290710594fb080a/" target="_blank">http://newsdog.today/a/article/57da219b1290710594fb080a/</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fnewsdog.today%2Fa%2Farticle%2F57da219b1290710594fb080a%2F&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr class="format-sty">       
        <td>08</td>
        <td>23/09/2016</td>
        <td>Fashion and Flick Magazine</td>
        <td><a href="http://www.fashionandflick.com/star-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016/" target="_blank">http://www.fashionandflick.com/star-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016/</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.fashionandflick.com%2Fstar-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016%2F&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr>       
        <td>07</td>
        <td>23/09/2016</td>
        <td>Fashion and Flick.com</td>
        <td><a href="https://www.facebook.com/fashionflick/posts/1170623342983343" target="_blank">https://www.facebook.com/fashionflick/posts/1170623342983343</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2Ffashionflick%2Fposts%2F1170623342983343&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr>       
        <td>06</td>
        <td>23/09/2016</td>
        <td>News Attitude</td>
        <td><a href="https://www.facebook.com/Newsattitude/posts/1095478773820955" target="_blank">https://www.facebook.com/Newsattitude/posts/1095478773820955</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2FNewsattitude%2Fposts%2F1095478773820955&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr class="format-sty">       
        <td>05</td>
        <td>23/09/2016</td>
        <td>Country and Politics</td>
        <td><a href="http://www.countryandpolitics.in/2016/09/15/star-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016/" target="_blank">http://www.countryandpolitics.in/2016/09/15/star-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016/</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.countryandpolitics.in%2F2016%2F09%2F15%2Fstar-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016%2F&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr>       
        <td>04</td>
        <td>23/09/2016</td>
        <td>Grehlakshmi Grand Bazaar</td>
        <td><a href="https://www.facebook.com/groups/1556214091340531/permalink/1576711722624101/" target="_blank">https://www.facebook.com/groups/1556214091340531/permalink/1576711722624101/</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F1556214091340531%2F&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr class="format-sty">       
        <td>03</td>
        <td>23/09/2016</td>
        <td>Pocket Press Release</td>
        <td><a href="http://www.pocketpressrelease.com/2016/09/Star-Salon-Celebrity-Hair-Stylist-Niell-Talwar-at-the-workshop-of-Grehlaksmi-Awards-2016.html" target="_blank">http://www.pocketpressrelease.com/2016/09/Star-Salon-Celebrity-Hair-Stylist-Niell-Talwar-at-the-workshop-of-Grehlaksmi-Awards-2016.html</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.pocketpressrelease.com%2F2016%2F09%2FStar-Salon-Celebrity-Hair-Stylist-Niell-Talwar-at-the-workshop-of-Grehlaksmi-Awards-2016.html&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr>       
        <td>02</td>
        <td>23/09/2016</td>
        <td>Pocket Press Release (Twitter)</td>
        <td><a href="https://twitter.com/PocketPressRele/status/775950578421633024" target="_blank">https://twitter.com/PocketPressRele/status/775950578421633024</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Ftwitter.com%2FPocketPressRele%2Fstatus%2F775950578421633024&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>
      <tr class="format-sty">       
        <td>01</td>
        <td>23/09/2016</td>
        <td>News9 Express</td>
        <td><a href="http://www.news9express.com/breaking/star-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016/" target="_blank">http://www.news9express.com/breaking/star-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016/</a></td>
        <td><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.news9express.com%2Fbreaking%2Fstar-salon-celebrity-hair-stylist-niell-talwar-at-the-workshop-of-grehlaksmi-awards-2016%2F&layout=button&mobile_iframe=true&width=60&height=20&appId" width="60" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></td>
      </tr>     
    </tbody>
  </table>
</div>
            
        	
        </div>
        </div>


    </div>
  </div>

<?php include('footer.php') ?>
