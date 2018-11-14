
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('comments')->maxLength(6000);




$pp->sendEmailTo('balevre0508@gmail.com'); // ← Your email here

echo $pp->process($_POST);

<!DOCTYPE HTML>
<html>
	<head>
		<title>Ye Old Computer Repair and Shoppe</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel spotlight">
									<div class="inner columns divided">
										<div class="span-2-25">
											<form method="post" action="">
												<div class="fields">
													<div class="field half">
														<label for="name">Name</label>
														<input type="text" name="name" id="name" />
													</div>
													<div class="field half">
														<label for="email">Email</label>
														<input type="email" name="email" id="email" />
													</div>
													<div class="field">
														<label for="message">Message</label>
														<textarea name="message" id="message" rows="4"> Secure Message feature is coming soon! For now, send us messages on our Facebook! </textarea>
													</div>
												</div>
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="button primary" /></li>
												</ul>
											</form>
										</div>
										<div class="span-1-9">
											<ul class="contact-icons">
												<li class="icon fa-facebook"><a href="https://www.facebook.com/YeOldeComputerRepairandShoppe">Facebook</a></li>
												<li class="icon fa-twitter"><a href="https://www.facebook.com/YeOldeComputerRepairandShoppe">Twitter (Coming Soon!)</a></li>
												<li class="icon fa-instagram"><a href="https://www.facebook.com/YeOldeComputerRepairandShoppe">Instagram (Coming Soon!)</a></li>
												<li class="icon fa-envelope"><a href="">YeOldComputerRepair@gmail.com</a></li>
											</ul>
										</div>
									</div>
									<div class="image filtered dark half tinted" data-position="center">
										<img src="images/keys.jpg" alt="" /></div>
							</section>
							</section>
			    <!-- Copyright -->
					  <div class="copyright">&copy; <a href="https://sites.google.com/view/balevre/">Ye Old Computer Repair and Shoppe. All rights reserved.<a></div>
				 </div>
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
