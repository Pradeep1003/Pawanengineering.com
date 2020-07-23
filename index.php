<?php
if(isset($_POST['submit'])) {

    $firstname = $_POST['firstname']; // required
    $lastname = $_POST['lastname']; // required
    $number = $_POST['number']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // not required 
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "First Name: ".clean_string($lastname)."\n";
    $email_message .= "First Name: ".clean_string($number)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Comments: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.'dugajenikhil@gmail.com'."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail("dugajenikhil@gmail.com", "00000", $email_message, $headers);  
@mail("pradeepchauhan246@gmail.com", "00000", $email_message, $headers);  
 
}
?>

<!DOCTYPE html>
<?php
// Create the function, so you can use it
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
} ?>

<html lang="zxx">

<head>
	<title>Manufacturer of Batten Clamp, MCB etc | Pawan Engineering</title>
		<!--/metadata -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content="We are the Manufacturer & Supplier of Electrical Components such as Batten Clamp T5, B-22 Contact Eyelet, Brass Electrical Parts, MCB Components. Even we do Job work for our client." />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/lsb.css" rel="stylesheet" type="text/css"><!-- gallery -->

	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	
	<style>
.heading {
  font-size: 36px !important;
}

@media only screen and (max-width: 600px) {
  .heading {
    font-size: 20px !important;
	margin-top: 5px;
  }
}
</style>

<!-- Global site tag (gtag.js) - Google Ads: 724705494 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-724705494"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-724705494');
</script>

<!-- Event snippet for clicks on a number on your mobile website conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-724705494/-m7LCMCi6qUBENbByNkC',
      'event_callback': callback
  });
  return false;
}
</script>

</head>

<body>
	<!-- header -->
	<div class="header" id="home">
	<div class="agileits_top_menu">
		<div class="w3l_header_left">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:9714988301" onclick="gtag_report_conversion()">+91 97149 88301</a></li>
				</ul>
			</div>
			<div class="w3l_header_right">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="tel:09714988301" onclick="gtag_report_conversion()"><i class="fa fa-phone"></i></a>
					<a class="twitter" href="https://api.whatsapp.com/send?text=Name:&phone=919714988301" onclick="gtag_report_conversion()"><i class="fa fa-whatsapp"></i></a>
					<a class="pinterest" href="mailto:birendrachauhan796@gmail.com" onclick="gtag_report_conversion()"><i class="fa fa-envelope"></i></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.php">
							<h1 class="heading">Pawan Engineering</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="index.php" class="effect-3 scroll">Home</a></li>
								<li><a href="#about" class="effect-3 scroll">About</a></li>
								<li><a href="#services" class="effect-3 scroll">Services</a></li>
								<li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>
								<li><a href="#contact" class="effect-3 scroll">Contact</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Electical Component</h3>
						<p><b>Pawan Engineering offered Job Work on Electrical Components is, a leading supplier & Manufacturer in Daman.</b></p>
						<div class="agileits-button top_ban_agile">
							
						<?php
							if(isMobile()){
								echo '<a class="btn btn-primary btn-lg" href="tel:09714988301" data-toggle="" data-target="#myModal" onclick="gtag_report_conversion()">Call Now »</a>';
							}else{
								echo '<a class="btn btn-primary btn-lg" href="#contact" data-toggle="" data-target="#myModal">Contact Now »</a>';
							}
						?>
						
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Sheet Metal Job Work</h3>
						<p>We are well reckoned entity offering high performing Sheet Metal Pressing Work. We have gained rich expertise in rendering most viable solution for pressing as well as deep drawing job work.</p>
						<div class="agileits-button top_ban_agile">
							<?php
							if(isMobile()){
								echo '<a class="btn btn-primary btn-lg" href="tel:09714988301" data-toggle="" data-target="#myModal" onclick="gtag_report_conversion()">Call Now »</a>';
							}else{
								echo '<a class="btn btn-primary btn-lg" href="#contact" data-toggle="" data-target="#myModal">Contact Now »</a>';
							}
						?>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Progressive Die</h3>
						<p><b>We have the expertise and technology to design, test and manufacture progressive tools that meet a broad range of manufacturing challenges.</b></p>
						<div class="agileits-button top_ban_agile">
							<?php
							if(isMobile()){
								echo '<a class="btn btn-primary btn-lg" href="tel:09714988301" data-toggle="" data-target="#myModal" onclick="gtag_report_conversion()">Call Now »</a>';
							}else{
								echo '<a class="btn btn-primary btn-lg" href="#contact" data-toggle="" data-target="#myModal">Contact Now »</a>';
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->

	<!-- welcome section -->
	<div class="w3layouts-welcome" id="about">
		<div class="container">
				<div class="wls_head_all">
					<h3>About us</h3>
				</div>
				<div class="w3ls-welcome_sec_about-grids">
				 <div class="col-md-6 w3l-welcome_info">
					  <!--<h3>Welcome</h3>-->
					  
					  <h4>Established in the year 2016</h4>
					  <p>Pawan Engineering is a specialist Manufacturer of B-22 Contact Eyelid,
Batten Clamp T5(9mm,8mm), Heat Sink, MCB Parts Such as Main Frame, AGP etc. <br>Our products are
manufactured using high grade and safe raw products, which is durable in nature as well as has premium finish. 
<br>These are highly demanded and admired amongst the customers for their exquisite
designing and high durability. <br>We make use of the finest quality raw material that is well tested and
verified on several quality parameters as per international standards. <br>We work with a customer’s
approach and focus on satisfying our clients by providing them with effective solutions. <br>Our superior
quality products with captivating designs ensure to give a perfect look.</p>
					 
					 <?php
							if(isMobile()){
								echo '<a class="btn btn-primary btn-lg" href="PawanEngineering.pdf" data-toggle="" data-target="#myModal">Download PDF »</a>';
							}else{
								echo '<a class="btn btn-primary btn-lg" href="PawanEngineering.pdf" data-toggle="" data-target="#myModal">Download PDF »</a>';
							}
						?>
				 </div>
				 <div class="col-md-6 w3l-welcome_pic">
					 <!--<h2>Suspendisse massa pellentesque</h2>-->
					 <img src="images/ab1.jpg" class="img-responsive" alt=""/>
				<!--<h3>Vestibulum efficitur lacus nulla porttitor lorem luctus.</h3>-->
					 <p>Under the guidance of our mentor, Birendra Chauhan, Our organization has achieved tremendous growth in the field of manufacturing. His business acumen and ethics have motivated all
the employees to work hard and achieve the organizational goals and objectives.</p>
					 <p></p>
				 </div>
				 <div class="clearfix"></div>
			  </div>
		</div>
	</div>
	<!-- //welcome section -->	

	<!-- /services -->
	<div class="w3-services" id="services">
			<div class="w3-services-grids">
				<div class="col-md-4 w3-services-left-grid wls_head_all">
					<h3>our services</h3>
					<!--<h4>Cras lacinia, nisl id dignissim ultrices</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod faucibus quam, a sodales eros placerat vitae. Sed pretium fermentum luctus. Nunc at lectus ut ex blandit egestas. Pellentesque sed erat at diam lacinia accumsan. </p>-->
				</div>
				<div class="col-md-8 w3-services-right-grid">
					<div class="w3-icon-grid-gap1">
						<div class="col-md-3 w3-icon-grid1">
						<i class="fa fa-bolt" aria-hidden="true"></i>
							<h3>Electrical Items</h3>
						</div>
						<div class="col-md-3 w3-icon-grid1">
						<i class="fa fa-bolt" aria-hidden="true"></i>
							<h3>Job Work</h3>
						</div>
						<div class="col-md-3 w3-icon-grid1">
						<i class="fa fa-bolt" aria-hidden="true"></i>
							<h3>Progressive Die</h3>
						</div>
						<div class="col-md-3 w3-icon-grid1">
						<i class="fa fa-bolt" aria-hidden="true"></i>
							<h3>Suppliers</h3>
						</div>
						
						<div class="clearfix"></div>
					</div>
					<div class="w3-icon-grid-gap2">
						<div class="col-md-3 w3-icon-grid1">
						<i class="fa fa-bolt" aria-hidden="true"></i>
							<h3>Tool Room</h3>
						</div>
						<div class="col-md-3 w3-icon-grid1">
						<i class="fa fa-bolt" aria-hidden="true"></i>
							<h3>Assemblies</h3>
						</div>
						<div class="col-md-3 w3-icon-grid1">
						<i class="fa fa-bolt" aria-hidden="true"></i>
							<h3>Maintenance</h3>
						</div>
						<div class="col-md-3 w3-icon-grid1">
						<i class="fa fa-bolt" aria-hidden="true"></i>
							<h3>Manufacturing</h3>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
		</div>
	</div>

	<!-- //services -->
	
		<!-- team s
	<div id="team" class="team agileits-w3layouts">
		<div class="container"> 
			<div class="wls_head_all">
					<h3>Our Team</h3>
				</div>
			<div class="team-info wthree">
				<div class="col-md-6 team-w3lsgrids">
					<div class="team-left">
						<img class="img-responsive" src="images/t2.jpg" alt="">
					</div>
					<div class="team-right">
						<h4>Vivamus lias</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias </p>
						<div class="social-icon">
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
							<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-w3lsgrids">
					<div class="team-left">
						<img class="img-responsive" src="images/t1.jpg" alt="">
					</div>
					<div class="team-right">
						<h4>Aliquam fauc </h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias </p>
						<div class="social-icon">
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
							<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="team-info team-row2">
				<div class="col-md-6 team-w3lsgrids">
					<div class="team-left">
						<img class="img-responsive" src="images/t3.jpg" alt="">
					</div>
					<div class="team-right">
						<h4>Donec nibh </h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias </p>
						<div class="social-icon">
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
							<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-w3lsgrids">
					<div class="team-left">
						<img class="img-responsive" src="images/t4.jpg" alt="">
					</div>
					<div class="team-right">
						<h4>Sed augue </h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias </p>
						<div class="social-icon">
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
							<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team --> 
	<!-- Gallery -->
	<div class="inner-paddings-w3ls" id="gallery">
	   <div class="container">	
	 <div class="w3ls-welcome_sec">
				<div class="wls_head_all">
					<h3>Products</h3>
				</div>
		<ul class="portfolio_agile_info_w3ls">	
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/1.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/1.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>MCB</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/2.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/2.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Moving Contact MCB</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/3.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/3.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>B-22 Contact eyelets</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/4.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/4.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Chamber plate M.C.B</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/5.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>BATTEN CLAMP-T5 (9mm, 10mm)</h3>
					</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/6.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/6.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>2w Sport Light heat sink</h3> 
					</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/7.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/7.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Batten Clamp T-8</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/8.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/8.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>MCB Main Frame</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/9.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/9.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>MCB Main Frame</h3>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</div>
<!-- //Gallery -->

<!-- Gallery -->
	<div class="inner-paddings-w3ls" id="gallery">
	   <div class="container">	
	 <div class="w3ls-welcome_sec">
				<div class="wls_head_all">
					<h3>Machines</h3>
				</div>
		<ul class="portfolio_agile_info_w3ls">	
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/11.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/11.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>D - Coiler</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/12.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/12.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Power press 20 Ton</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/13.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/13.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Power press 63 Ton</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/14.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/14.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Power press 10 Ton</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/15.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/15.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Air Compressor</h3>
					</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/16.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/16.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Drill</h3> 
					</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/17.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/17.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Drill</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/18.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/18.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Power press 16 Ton</h3>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">	
					<div class="w3_agileits_evets_text_img">
						<a href="images/19.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/19.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</div>
						
						</a>
					</div>
					<div class="agileits_w3layouts_events_text port_info_agile">
						<h3>Power press 16 Ton</h3>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
</div>
<!-- //Gallery -->
<!-- Stats-->
	<!-- our stats -->
	<div class="agile-stats" id="agile-stats">
		<h3 class="center">Our Stats</h3>
		<div class="container">
			<div class="stats1">
				<div class="w3-stats">
					<span class="fa fa-book" aria-hidden="true"></span>
					<h4><span class='numscroller' data-min='1' data-max='5486' data-delay='3' data-increment='3'>5486</span></h4>
					<p>Clients</p>
				</div>
				<div class="w3-stats">
					<span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
					<h4><span class='numscroller' data-min='1' data-max='2451' data-delay='5' data-increment='3'>2451</span></h4>
					<p>Reviews</p>
				</div>
			</div>
			<div class="stats2">
				<div class="w3-stats">
					<span class="fa fa-comment-o" aria-hidden="true"></span>
					<h4><span class='numscroller' data-min='1' data-max='200' data-delay='5' data-increment='1'>200</span></h4>
					<p>Tweets</p>
				</div>
				<div class="w3-stats">
					<span class="fa fa-bookmark-o" aria-hidden="true"></span>
					<h4><span class='numscroller' data-min='1' data-max='2589' data-delay='5' data-increment='3'>2589</span></h4>
					<p>Records</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //our stats -->
<!--
<div class="footer-top" id="clients">
		<div class="container">
			<div class="wls_head_all">
					<h3>Testimonials</h3>
				</div>
			<div class="wthree_footer_top_grid">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<p>Suspendisse sollicitudin erat in metus varius, maximus rutrum purus condimentum. 
									Phasellus quam libero, volutpat in sodales at, dignissim vel ipsum.</p>
								<img src="images/test1.jpg" alt=" " class="img-responsive" />
								<h5>Laura Chris</h5>
								<p>Business man</p>
							</li>
							<li>
								<p>Suspendisse sollicitudin erat in metus varius, maximus rutrum purus condimentum. 
									Phasellus quam libero, volutpat in sodales at, dignissim vel ipsum.</p>
								<img src="images/test2.jpg" alt=" " class="img-responsive" />
								<h5>Michael Paul</h5>
								<p>engineer</p>
							</li>
							<li>
								<p>Suspendisse sollicitudin erat in metus varius, maximus rutrum purus condimentum. 
									Phasellus quam libero, volutpat in sodales at, dignissim vel ipsum.</p>
								<img src="images/test3.jpg" alt=" " class="img-responsive" />
								<h5>Willium Parker</h5>
								<p>Designer</p>
							</li>
						</ul>
					</div>
				</section>	
				
			</div>
		</div>
	</div>
<!-- //footer-top -->
<!-- contact -->

	<div class="contact" id="contact">
        <div class="container">
			<div class="w3l-services-heading">
				<div class="wls_head_all">
					<h3>Contact</h3>
				</div>
			</div>
			<div class="agile-contact-grids">
				<div class="col-md-5 address">
					<h4>Contact Info</h4>
					<div class="address-row">
						<div class="col-md-2 w3-agile-address-left">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 w3-agile-address-right">
							<h5>Visit Us</h5>
							<p>Gala No. 10, Ground Floor, Chirag industrial complex, Golden Industrial Estate, Somnath Road,Dabhel, Daman- 396210</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-md-2 w3-agile-address-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 w3-agile-address-right">
							<h5>Mail Us</h5>
							<p><a href="mailto:birendrachauhan796@gmail.com" onclick="gtag_report_conversion()"> birendrachauhan796@gmail.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-md-2 w3-agile-address-left">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 w3-agile-address-right">
							<h5>Call Us</h5>
							<p><a href="tel:09714988301" onclick="gtag_report_conversion()">+91 97149 88301</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-7 contact-form">
					<form action="" method="post">
						<input type="text" name="firstname" placeholder="First Name" required="">
						<input class="email" name="lastname" type="text" placeholder="Last Name" required="">
						<input type="text" name="number" placeholder="Mobile Number" required="">
						<input class="email" name="email" type="text" placeholder="Email" >
						<textarea name="message" placeholder="Message" required=""></textarea>
						<input type="submit" name="submit" value="SUBMIT" onclick="gtag_report_conversion()">
					</form>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- map -->
	<div class="agileits-w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.4282907892734!2d72.8770573149223!3d20.40644908633874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x60f626b591092aff!2sGolden+industrial+estate!5e0!3m2!1sen!2sin!4v1560940094559!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></iframe>
	</div>
	<!-- //map -->
<!-- footer -->

<div class="footer-bot wow fadeInRight animated" data-wow-delay=".5s">
	<div class="container">
			<div class="logo2">
				<h3><a href="index.php">Pawan Engineering</a></h3>
			</div>
			<div class="ftr-menu">
				 <ul>
					<li><a class="scroll" href="#home">Home </a></li>
					<li><a class="scroll" href="#about">About</a></li>
					<li><a class="scroll" href="#services">Services</a></li>
					<li><a class="scroll" href="#gallery">Gallery</a></li>
					<li><a class="scroll" href="#team">Team</a></li>
					<li><a class="scroll" href="#contact">Contact</a></li>
				 </ul>
			</div>
			<div class="clearfix"></div>
	</div>
</div>
<div class="copy-right wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
			<p> &copy; 2019 Pawan Engineering. All Rights Reserved</p>
	</div>
</div>
<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Pawan Engineering
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/modal2.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up  --> 
<!-- bootstrap-modal-pop-up two-->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Pawan Engineering
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/modal1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up two--> 

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
				<!-- //flexSlider -->
	<!-- gallery-pop-up -->
	<script src="js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->

<!-- Number Scroler-->
	<script src="js/numscroller-1.0.js"></script>
<!-- /Number Scroler-->
<!-- start-smoth-scrolling -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->
		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="js/SmoothScroll.min.js"></script>



<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 



</body>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
(function () {  
gtag_report_conversion();
var options = {
whatsapp: "9714988301", // WhatsApp number
call: "+91 9714988301", // Call phone number
call_to_action: "Message us", // Call to action
button_color: "#FF6550", // Color of button
position: "left", // Position may be 'right' or 'left'
order: "whatsapp,call", // Order of buttons
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /WhatsHelp.io widget --> 

</html>