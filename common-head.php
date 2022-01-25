<?php 
$BASEURL = 'https://www.hairandmakeupacademy.com/';
function webServiceCall($url, $proxy = false, $extra_header_arr = array(), $getinfo = false) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	if ($proxy) {
		//curl_setopt($ch, CURLOPT_PROXY,"localhost:80");
	}
	//curl_setopt($ch, CURLOPT_FAILONERROR, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	if (count($extra_header_arr) > 0) {
		curl_setopt_array($ch, $extra_header_arr);
	}
	//curl_setopt($ch, CURLOPT_MAXREDIRS, 50);
	//curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
	//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: '.strlen($dataToPost)));//Enable it if send json data in post
	//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	//curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate,sdch');//use for if service data in compress
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); //The number of seconds to wait while trying to connect.
	curl_setopt($ch, CURLOPT_TIMEOUT, 30); // max number of seconds the curl function to execute
	//curl_setopt($ch, CURLOPT_SSLVERSION, 3);
	//curl_setopt($ch, CURLOPT_HEADER, true);
	$response = curl_exec($ch);
	$error = curl_error($ch);
	$info = curl_getinfo($ch);
	//writeToLogFile(json_encode(array('info'=>$info)));
	if ($error != '') {
		//echo $error;die;
		$response = $error;
		//$this->writeServiceLogInFile($error);
	}
	if ($getinfo) {
		$info = curl_getinfo($ch);
		$response = array('info' => $info, 'response' => $response);
		//print_r($response);
	}
	return $response;
}
?>
<!doctype html>
<html>
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77212642-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77212642-1');
  gtag('config', 'AW-998417518');
 </script>
 
 
 <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '259696594901234');
  fbq('track', 'PageView');
  fbq('track', 'ViewContent');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=259696594901234&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=bebas-neue:400,300,300italic,500,700,700italic,900' rel='stylesheet' type='text/css'>
<link href="<?php echo $BASEURL;?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $BASEURL;?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $BASEURL;?>css/slick.css" rel="stylesheet" type="text/css">
<link href="<?php echo $BASEURL;?>css/slick-theme-min.css" rel="stylesheet" type="text/css">




<!-- scrolling script start here-->

    <link href="<?php echo $BASEURL;?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo $BASEURL;?>css/owl.theme.css" rel="stylesheet">
	
	<!--lightbox youtude video-->
	<link rel="stylesheet" href="<?php echo $BASEURL;?>css/colorbox.css" />
	<script src="<?php echo $BASEURL;?>js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $BASEURL;?>js/jquery-1.8.2.min.js"></script>	 
	<script src="<?php echo $BASEURL;?>js/jquery.colorbox.js"></script>
	<script src="<?php echo $BASEURL;?>js/custom.js" type="text/javascript"></script> 
	
	<script>
			$(document).ready(function(){
			$(".group1").colorbox({rel:'group1'});
				$(".youtube").colorbox({iframe:true, innerWidth:400, innerHeight:390});
			
			
			
			});
		</script>
