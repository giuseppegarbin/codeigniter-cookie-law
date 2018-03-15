<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Codeigniter Cookie Law</title>

  <!-- Viewoport -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Style -->
	<link rel="stylesheet" href="assets/css/style.css">

  <!-- Facebook Pixel -->
	<?php if ($this->global['cookie_consent_value'] === 'Accepted') { ?>
		<!-- PASTE HERE THE SCRIPT -->
	<?php } ?>

</head>
<body>

	<div class="container">

	<?php if ( ! $this->global['cookie_consent_given']) { ?>
	<?php $this->load->helper('string'); ?>
		<div id="cookie__consent">
			<div id="cookie__consent--box">
				<h4 class="cookie__consent--heading">Cookie Settings</h4>
				<p class="cookie__consent--body">Social media cookies offer the possibility to connect you to your social networks and share content from our website through social media. Advertising cookies (of third parties) collect information to help better tailor advertising to your interests, both within and beyond the website. Not-accepting these cookies may result in seeing advertising that is not as relevant to you or you not being able to link effectively with Facebook, Twitter, or other social networks and/or not allowing you to share content on social media.</p>
				<a id="cookie__accept" href="<?php echo site_url('cookies')."/accept/".random_string('alnum', 16);; ?>" class="btn">Yes, Accept</a>
				<a id="cookie__decline" href="<?php echo site_url('cookies')."/decline/".random_string('alnum', 16);; ?>" class="btn btn__decline">No</a>
			</div>
		</div>
	<?php } ?>

	<h1>Hi there!</h1>
	<h4>Welcome to the homepage</h4>

	<?php if ($this->global['cookie_consent_value'] === 'Accepted') { ?>
		<p class="text__success">You have accepted the cookies... you're a great person!</p>
	<?php } ?>

	<?php if ($this->global['cookie_consent_given'] AND $this->global['cookie_consent_value'] === 'Declined') { ?>
		<p class="text__alert">You didn't accept the cookies... you're a bad person.</p>
	<?php } ?>
		
	</div>

</body>
</html>