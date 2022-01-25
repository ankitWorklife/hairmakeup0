<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Our Center Location-Ashmeen Munjaal Star Academy</title>
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
<style>

</style>
<div class="container">
    <div class="row mt100"> <!--banner row start here-->
		<div class="col-lg-12 mt20 mb20">
			<img src="images/bollywood-banner.jpg" width="100%" alt="">
		</div><!--banner row end here-->

    </div><style>.findus .col-md-4 {
    border-right: 1px solid #ccc;
    min-height: 260px;
}"></style>
	
	    <div class="row mt0"> <!--banner row start here-->
		<div class="findus col-lg-12 mt0 mb20 ">
			<?php 
			$result = webServiceCall($BASEURL.'certificate/service/v1/getvideo/0');
			$result = json_decode($result);//print_r($result);
			if($result->error === false){
				foreach($result->data as $row){ 
			?>
            <div class="col-md-4">
                <div class=" formBox testimonial_box"> 
                    <p><a href="https://www.youtube.com/embed/<?php echo $row->code;?>" class="youtube cboxElement"><img alt="" src="https://i.ytimg.com/vi/<?php echo $row->code;?>/mqdefault.jpg"></a></p>
                    <p class="titlestudents"><?php echo $row->title;?> </p> <div class="datestudents"><?php echo $row->createdon;?></div>
                </div>
            </div>
			<?php 
				}
			}
			?>			
		</div><!--banner row end here-->

    </div>
  </div>

<?php include('footer.php')?>