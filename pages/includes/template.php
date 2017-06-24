<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="Siberian Huskies"/>
		<meta property="og:locale" content="en_US"/>
		<meta property="og:type" content="article"/>
		<meta property="og:url" content=""/>
		<meta property="og:title" content="Siberian Huskies"/>
		<meta property="og:site_name" content="Siberian Huskies"/>
		<meta property="og:description" content="Siberian Huskies"/>
		<title>Siberian Huskies</title>
		<!-- Styles -->
        <link href="<?php echo $base_url; ?>public/bootstrap/3.2.0/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $base_url; ?>public/css/style.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $base_url; ?>public/css/mobile.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<div class="container">
				<div class="col-md-5">
					<h1><a href="<?php echo $base_url; ?>">Siberian Huskies</a></h1>
				</div>
				<div class="col-md-7" id="navigation">
					<ul class="float-right">
						<?php
							$active=array(
								''				=> '',
								'about'			=> '',
								'dogs'			=> '',
								'puppies'		=> '',
								'information'	=> '',
								'contact'		=> '',
							);
							if(isset($_GET['page']) and array_key_exists($_GET['page'],$active)){
								$active[$_GET['page']]='active';
							}
						?>
						<li><a href="<?php echo $base_url; ?>about" class="<?php echo $active['about']; ?>">About</a></li>
						<li><a href="<?php echo $base_url; ?>dogs" class="<?php echo $active['dogs']; ?>">Dogs</a></li>
						<li><a href="<?php echo $base_url; ?>puppies" class="<?php echo $active['puppies']; ?>">Puppies</a></li>
						<li><a href="<?php echo $base_url; ?>information" class="<?php echo $active['information']; ?>">Information</a></li>
						<li><a href="<?php echo $base_url; ?>contact" class="<?php echo $active['contact']; ?>">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="content">
			<div class="container">
				<?php require($page_path); ?>
			</div>
		</div>
		<div class="clear"></div>
		<div id="footer">
			<div class="container">
				<div id="sitemap" class="col-md-4">
					<h4>Site Map</h4>
					<div class="clear"></div>
					<ul>
						<li><a href="<?php echo $base_url; ?>">Home</a></li>
						<li><a href="<?php echo $base_url; ?>about">About Us</a></li>
						<li><a href="<?php echo $base_url; ?>dogs">Our Dogs</a></li>
						<li><a href="<?php echo $base_url; ?>puppies">Our Puppies</a></li>
						<li><a href="<?php echo $base_url; ?>information">Information</a></li>
						<li><a href="<?php echo $base_url; ?>contact">Contact Us</a></li>
					</ul>
					<br/>
					&copy; Chase Terry 2014 - <?php echo date('Y'); ?>
				</div>
				<div class="col-md-4">
					<h4>Resources</h4>
					<div class="clear"></div>
					<ul>
						<li><a href="#faqs">Husky FAQs</a></li>
						<li><a href="#grooming">Husky Grooming</a></li>
						<li><a href="#resources">Husky Resources</a></li>
						<li><a href="#breed">Breed Information</a></li>
						<li><a href="#protection">Protecting Your Husky</a></li>
						<li><a href="#more">More Information</a></li>
					</ul>
				</div>
				<div id="contact" class="col-md-4">
					<h4>Contact Us</h4>
					<div class="clear"></div>
					<ul>
						<li>1234 Main Street</li>
						<li>Cityville, ST 12345</li>
						<li><Br/></li>
						<li>Phone: (111) 222-3333</li>
						<li>Email: chase.terry87@gmail.com</li>
					</ul>
					<br/>
					<div id="social">
						<ul>
							<li><a href="#"><img src="<?php echo $base_url; ?>public/images/icons/facebook3.png" /></a></li>
							<li><a href="#"><img src="<?php echo $base_url; ?>public/images/icons/twitter3.png" /></a></li>
							<li><a href="#"><img src="<?php echo $base_url; ?>public/images/icons/mail4.png" /></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<script src="<?php echo $base_url; ?>public/jquery/1.11.1/jquery.min.js"></script>
		<script src="<?php echo $base_url; ?>public/bootstrap/3.2.0/bootstrap.min.js"></script>
	</body>
</html>