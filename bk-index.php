<!DOCTYPE html>
<?php require_once 'functions.php'; ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Virtual Table</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
			integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<!-- <body class="debug"> -->
	<body class="">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<h2>Face Up</h2>
								<?php print_card( array( 'face' => 'up' ) ); ?>
								<p>&nbsp;</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Face Down</h2>
								<?php print_card( array( 'face' => 'down' ) ); ?>
								<p>&nbsp;</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Face Up Tapped</h2>
								<?php print_card( array( 'face' => 'up', 'tapped' => 'true' ) ); ?>
								<p>&nbsp;</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Face Down Tapped</h2>
								<?php print_card( array( 'face' => 'down', 'tapped' => 'true' ) ); ?>
								<p>&nbsp;</p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<h2>Test Table</h2>
						<div class="table">
							<div class="spell-wrapper">
								<?php print_card( array( 'face' => 'up' ) ); ?>
							</div>
							<div class="spell-wrapper">
								<?php print_card( array( 'face' => 'up' ) ); ?>
							</div>
							<div class="spell-wrapper">
								<?php print_card( array( 'face' => 'up', 'tapped' => 'true' ) ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
			integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
			crossorigin="anonymous"></script>
		<script src="assets/js/scripts.js"></script>
	</body>
</html>