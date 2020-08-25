<?php 
include 'connect/baglan.php'; 

$settingsor=$db->prepare("SELECT * from setting where setting_id=?");
$settingsor->execute(array(0));
$settingcek=$settingsor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?php echo $settingcek['setting_title']; ?></title>

<!-- STYLES -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/plugins.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /STYLES -->

</head>

<body>

<!-- WRAPPER ALL -->
<div class="edina_tm_wrapper_all">

	<div id="edina_tm_popup_blog">
		<div class="container">
			<div class="inner_popup scrollable"></div>
		</div>
		<span class="close"><a href="#"></a></span>
	</div>
	
    <!-- HEADER -->
    <header class="edina_tm_header">
		<div class="edina_tm_navigation_wrap">
			<div class="container">
				<div class="navigation_inner">
					<div class="logo">
						<a class="dark_logo" href="#"><img src="img/logo/logo.png" alt="" /></a>
					</div>
					<div class="nav_list_wrap">
						<div class="menu">
							<ul class="anchor_nav">
								<li><a href="#home">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#services">Services</a></li>
								<li><a href="#portfolio">Portfolio</a></li>
								<li><a href="#testimonials">Testimonials</a></li>
								<li><a href="#news">News</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>
						<div class="social_icons_wrap">
							<ul>
								<li><a href="<?php echo $settingcek['setting_facebook'] ?>"><i class="xcon-facebook"></i></a></li>
								<li><a href="<?php echo $settingcek['setting_twitter'] ?>"><i class="xcon-twitter"></i></a></li>
								<li><a href="<?php echo $settingcek['setting_facebook'] ?>"><i class="xcon-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="edina_tm_trigger">
						<div class="hamburger hamburger--collapse-r">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   		<div class="edina_tm_mobile_menu_wrap">
   			<div class="mob_menu">
				<ul class="anchor_nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#testimonials">Testimonials</a></li>
					<li><a href="#news">News</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
    </header>
    <!-- /HEADER -->