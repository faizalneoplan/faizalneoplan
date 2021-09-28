<?php require_once('Connections/dbweb.php'); ?>
<?php
mysql_select_db($database_dbweb, $dbweb);
$query_vh = "select * from webid where no_id=1";
$vh = mysql_query($query_vh, $dbweb) or die(mysql_error());
$row_vh = mysql_fetch_assoc($vh);
$totalRows_vh = mysql_num_rows($vh);

mysql_select_db($database_dbweb, $dbweb);
$query_mmenu = "SELECT menu,url FROM dmenu WHERE kode='MENU' and status='1' ORDER BY no_id";
$mmenu = mysql_query($query_mmenu, $dbweb) or die(mysql_error());
$row_mmenu = mysql_fetch_assoc($mmenu);
$totalRows_mmenu = mysql_num_rows($mmenu);

mysql_select_db($database_dbweb, $dbweb);
$query_flexslider = "SELECT * FROM flexslider_txt ORDER BY pid";
$flexslider = mysql_query($query_flexslider, $dbweb) or die(mysql_error());
$row_flexslider = mysql_fetch_assoc($flexslider);
$totalRows_flexslider = mysql_num_rows($flexslider);

mysql_select_db($database_dbweb, $dbweb);
$query_dservice = "SELECT * FROM services ORDER BY pid";
$dservice = mysql_query($query_dservice, $dbweb) or die(mysql_error());
$row_dservice = mysql_fetch_assoc($dservice);
$totalRows_dservice = mysql_num_rows($dservice);

mysql_select_db($database_dbweb, $dbweb);
$query_dprojek = "SELECT * FROM pub_project";
$dprojek = mysql_query($query_dprojek, $dbweb) or die(mysql_error());
$row_dprojek = mysql_fetch_assoc($dprojek);
$totalRows_dprojek = mysql_num_rows($dprojek);
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $row_vh['titlehtml']; ?></title>
<!-- For-Mobile-Apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon"  type="image/png" href="favicon.png" />
	<meta name="keywords" content="<?php echo $row_vh['titlehtml']; ?>" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Custom-Stylesheet-Links -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- //Custom-Stylesheet-Links -->

 <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--gallery-->
<!--JS for animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	<!--//end-animate-->
</head>
<body>
<!-- Banner -->
	<div class="banner">
		<!-- Header -->
	<div class="header">
		<div class="container">
		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand wow fadeInLeft animated" data-wow-delay=".5s" href="index.php"><?php echo $row_vh['tag5']; ?></a>
				</div>

				<div class="navbar-collapse collapse hover-effect wow fadeInRight animated" data-wow-delay=".5s" id="navbar">
					<ul>
						<?php do { ?>
						<li><a href="<?php echo $row_mmenu['url']; ?>"><span data-hover="<?php echo $row_mmenu['menu']; ?>"><?php echo $row_mmenu['menu']; ?></span></a></li>						
						<?php } while ($row_mmenu = mysql_fetch_assoc($mmenu)); ?>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->
		
	</div>
	</div>
	<div class="container">
			<div class="banner-info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
						<?php do { ?>
							<li>
								<div class="banner-info1">
									<h1><?php echo $row_flexslider['judul']; ?></h1>
									<p><?php echo $row_flexslider['ket']; ?></p>									
								</div>
							</li>
						<?php } while ($row_flexslider = mysql_fetch_assoc($flexslider)); ?>	
							</li>
						</ul>
					</div>
				</section>
			
							<!-- FlexSlider -->
									  <script defer="" src="js/jquery.flexslider.js"></script>
									  <script type="text/javascript">
										$(function(){
										 
										});
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									  </script>
								<!-- FlexSlider -->
			</div>
	  </div>


</div>
	<!-- //Header -->
		<!-- //Banner -->
		
		
<!-- wthree -->
<div class="wthree">
		<div class="container">
			<h3>Layanan</h3>
			<div class="services-grids">
				<?php do { ?>
				<div class="col-md-6 services-grid-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a"><span class="<?php echo $row_dservice['ic1']; ?>" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
						<h4><?php echo $row_dservice['h1']; ?></h4>
						<p align="justify"><?php echo $row_dservice['deskripsi']; ?></p>
					</div>
					<div class="clearfix"> </div>
					
				</div>	
							
				<?php } while ($row_dservice = mysql_fetch_assoc($dservice)); ?>
				
			</div>	
		</div>
</div>
	<!-- //wthree -->
	

<!-- project -->
	<div class="agileits">
		<div class="container">
			<h3><?php echo $row_dprojek['grupheader']; ?></h3>
			
				<?php do { ?>
				<div class="col-md-4 agileits-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="history-grid-image">
						<img src="<?php echo $row_dprojek['images']; ?>" class="img-responsive zoom-img" alt="">
					</div>
					<h4><?php echo $row_dprojek['header']; ?></h4>
					<p><?php echo $row_dprojek['desk']; ?> </p>
				</div>
				<?php } while ($row_dprojek = mysql_fetch_assoc($dprojek)); ?>
				<div class="clearfix"></div>
			</div>
		</div>
<!-- /project -->	
	

	<!-- Footer -->
	<div class="footer">
		<div class="container">

			<div class="footer-info">
				
				<div class="col-md-3 col-sm-3 footer-info-grid address animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
					<h4>Kontak Kami :</h4>
					<address>
						<ul>
							<li><?php echo $row_vh['alamat_pemilik']; ?></li>							
							<li><?php echo $row_vh['nomor_tlp']; ?></li>
							<li>Email : <a class="mail" href="<?php echo $row_vh['email']; ?>"><?php echo $row_vh['email']; ?></a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-8 col-sm-8 footer-info-grid links animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
					<h4>Download App</h4>
					<ul>
						<li><a href="http://202.158.32.114:78/transec/transec.apk"><img src="images/qrdownload.jpg" alt=" " border="0" class="img-responsive"></a></li>						
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="copyright animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<p><?php echo $row_vh['tag4']; ?></p>
			</div>

		</div>
	</div>
	<!-- //Footer -->
</body>
</html>
<?php
mysql_free_result($vh);

mysql_free_result($mmenu);

mysql_free_result($flexslider);

mysql_free_result($dservice);

mysql_free_result($dprojek);
?>