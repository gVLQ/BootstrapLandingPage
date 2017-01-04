<?php
	if (isset($_POST['submit'])) {
		$from = $_POST['email'];
		$to = 'vlaicu.gabriel11@yahoo.com';
		$subject = 'Email Signup';
		$body = 'Please sign me';
		
		if (!$_POST['email']) {
			$emailError = '<div class="text-danger">Please enter valid email</div>';
		} 
		if (!emailError) {
			if (mail ($to,$subject,$body,$from)) {
				$result = 'Thank You!';
			} else {
				$result = 'Sorry, please try again';
			}
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>gVLQ || Coming Soon Landing Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatica+SC:400,700|Just+Another+Hand" rel="stylesheet">	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<section id="logo">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<img src="img/my-logo.png" class="img-fluid"/>
				</div>
			</div>
		</div>
	</section>
	<section id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>We're working hard, we'll be online in ... </p>
				</div>
			</div>
		</div>
	</section>
	<section id="counter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="countdown"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="icons">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline">
						<a href="https://www.facebook.com/gabriel.vlaicu" target="blank"><li><i class="facebook fa fa-facebook-square fa-3x" aria-hidden="true"></i></li></a>
						<a href="https://ro.linkedin.com/in/gabriel-vlaicu-921364106" target="blank"><li><i class="linkedin fa fa-linkedin-square fa-3x" aria-hidden="true"></i></li></a>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="signup">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form class="form-inline" role="form" method="post" action="#signup">
						<input type="email" class="form-control form-control-sm" name="email" placeholder="Enter your email"/>
						<button type="submit" class="btn btn-signup btn-sm" name="Submit" value="send">Find out more</button>
 					</form>
					<?php echo $emailError; ?>
					<?php echo $result; ?>
				</div>
			</div>
		</div>
	</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script>
	$(function() {
		$('.countdown').countdown({
			date: "June 7, 2087 15:03:26"
		});
	});
	</script>
  </body>
</html>