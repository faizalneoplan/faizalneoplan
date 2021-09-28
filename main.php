<?php require_once('Connections/postgre_konek.php');?>
<?php
$query_vh = "select * from web_webid where no_id=1";
$vh = pg_query($postgre_konek, $query_vh) or die('Query failed: ' . pg_last_error());
$row_vh = pg_fetch_array($vh, null, PGSQL_ASSOC);
$totalRows_vh = pg_num_rows($vh);

$query_mmenu = "SELECT nama_menu menu,url FROM web_m_menu WHERE kode='MENU' and status='1' ORDER BY no_id";
$mmenu = pg_query($postgre_konek, $query_mmenu) or die('Query failed: ' . pg_last_error());
$row_mmenu = pg_fetch_array($mmenu, null, PGSQL_ASSOC);
$totalRows_mmenu = pg_num_rows($mmenu);

///$def = $_POST['def'];

///$query_getvar = "SELECT '$def' var WHERE '$def'='Ganti Password Sukses'";
///$getvar = pg_query($postgre_konek, $query_getvar) or die('Query failed: ' . pg_last_error());
///$row_getvar = pg_fetch_array($getvar, null, PGSQL_ASSOC);
///$totalRows_getvar = pg_num_rows($getvar);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<meta name="keywords" content="<?php echo $row_vh['titlehtml']; ?>" />
<title><?php echo $row_vh['titlehtml']; ?></title>
<link rel="icon"  type="image/ico" href="http://retribusi.purwakartakab.go.id/admin\dist\img\Lambang_Kabupaten_Purwakarta.png" sizes="any"/>
<!-- For-Mobile-Apps -->
	
	<script type="application/x-javascript">
<!--
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
<!-- //For-Mobile-Apps -->
<!-- Custom-Stylesheet-Links -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="css/background.css" rel="stylesheet" type="text/css">

<!-- //Custom-Stylesheet-Links -->
<script type="text/javascript">
 function encrypt() {
        var sResult = "";
		var str = document.getElementById("vkey1").value;
		
		for (var i = 0; i<str.length; i++)
		{
			sResult += String.fromCharCode(str[i].charCodeAt(0) + 31);
			
		}
		document.getElementById("txt").value= sResult;
		
       
    }
</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--gallery-->
<!--JS for animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="css/customstyle.css" rel="stylesheet" type="text/css">
	
</head>

<body>
<img alt="full screen background image" src="admin/images/bgmain.jpg" id="full-screen-background-image" /> 
<!-- Banner -->
<div class="banner-1x">
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
					<div>
						<img src="images/logopub.png" class="imglogo1">
						<span class="txth1" style="color:<?php echo $row_vh['c3']; ?>"><?php echo $row_vh['tag1']; ?></span>&nbsp;
						<span class="txth2" style="color:<?php echo $row_vh['c4']; ?>"><?php echo $row_vh['tag2']; ?></span>
				  </div>
				</div>

				<div class="navbar-collapse collapse hover-effect wow fadeInRight animated" data-wow-delay=".5s" id="navbar">
					<ul>
						<?php do { ?>
						<li><a href="<?php echo $row_mmenu['url']; ?>"><span data-hover="<?php echo $row_mmenu['menu']; ?>"><?php echo $row_mmenu['menu']; ?></span></a></li>						
						<?php } while ($row_mmenu = pg_fetch_array($mmenu)); ?>
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->
		
	</div>
	</div>
</div>		
		
<!-- contact -->
	<div class="contact">
		<div class="container">			
			<div class="contact-form">
				<div class="col-md-8 contact-form-left agile-3"><br>
				<h1x align="left"><?php echo $row_vh['tag6']; ?> </h1x><br>
				  <h1 align="left"><?php echo $row_vh['tag8']; ?> </h1>
				  <h1a align="left"><?php echo $row_vh['tag7']; ?> </h1a><br>
				  
			  </div>
				<div class="col-md-4 col-sm-12 contact-form-right agileits-3" id="div1">
				<div class="formlogin">
					<h4>Form Login CRM</h4>
					<form action="admin/crm-session-pg.php" method="post">
					<br>
						<div class="form-group">
						<label class="controllabel2 " >USER ID</label>
							<div class="input-group">							
								<div class="input-group-addon">
									<span class="fa fa-user"></span>
								</div>
								<input name="vkey2" type="text" id="vkey2" tabindex="1" placeholder="User ID">								
							</div>
				        </div>
						
						<div class="form-group">
						<label class="controllabel2" >PASSWORD</label>						
						 <div class="input-group">							
								<div class="input-group-addon">
									<span class="fa fa-lock"></span>
								</div>								
								<input name="vkey1" type="password" id="vkey1" tabindex="2" onKeyUp="encrypt()" placeholder="Masukan Password">
								<input name="txt" type="hidden" id="txt" readonly="true">								
						  </div>							
				        </div>
						
						<div class="form-group">
						<label class="controllabel2 " >Captcha</label>
						
							<div class="input-group">							
								<div class="input-group-addon">
									<span class="fa fa-expeditedssl"></span>
								</div>
								<input name="nCaptcha" type="text" id="nCaptcha" tabindex="3" placeholder="Masukan Kode Capctha">								
							</div>
							<label><img src="gambar.php" alt="gambar" /></label>
				        </div>
						
						
											
						 							
								
								<input name="Submit" type="submit" tabindex="3" value="  L o g i n  "><br>
								<input name="Button" type="button" class="tblsubmit" tabindex="3" onClick="MM_goToURL('self','daftar.php');return document.MM_returnValue" value="  Registrasi  ">
					</form>
				    
				  </div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //contact -->	

<!-- Footer -->
	<div class="footerx">
		<div class="container">

			<div class="footer-info">
				
				<div class="col-md-3 col-sm-12 footer-info-grid address" data-wow-duration="1200ms" data-wow-delay="500ms">
					<span class="txtkt">Kontak Kami :</span>
					<address>
						<ul>
							<li><span class="fa fa-caret-right"></span>&nbsp;&nbsp;&nbsp;<?php echo $row_vh['alamat_pemilik']; ?></li>							
							<li><span class="fa fa-caret-right"></span>&nbsp;&nbsp;<?php echo $row_vh['nomor_tlp']; ?></li>
							<li><span class="fa fa-caret-right"></span>&nbsp;&nbsp;<?php echo $row_vh['email']; ?></li>
						</ul>
					</address>
				</div>
				<div class="col-md-8 col-sm-8 footer-info-grid links animated wow fadeInRight animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
					
					<ul>
						<li><a href="#"></a></li>						
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
pg_free_result($vh);

pg_free_result($mmenu);

pg_close($postgre_konek);
?>