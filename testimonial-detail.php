<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Our Center Location-Ashmeen Munjaal Star Academy</title>
<?php include('common-head.php') ?>
<link href="css/event.css" rel="stylesheet" type="text/css">
<link href="css/testimonial.css" rel="stylesheet" type="text/css">

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
<?php 
date_default_timezone_set("Asia/Kolkata");
include('header.php') ?>


<div class="container">
    <div class="row mt100"> <!--banner row start here-->
		<div class="col-lg-12 mt20 mb20">
			<img src="images/student-sepak.png" width="100%" alt="">
		</div><!--banner row end here-->

    </div>
	   <div class="container">
<div class="row"> 
<div id="wrapper">
		<div id="columns">
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
		ORDER BY id desc ";
        $result = dbQuery($sql);
        if(dbNumRows($result) > 0){
            while($fd = dbFetchAssoc($result)){
               		
            
  ?>  
        <div class="pin">
		<span class="testcourse"><?php custom_echo($fd['message'], 150); ?></span>
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
        
<?php }
        }  ?>



</div>
</div>
	   </div>
		</div>
  </div>

<?php include('footer.php')?>