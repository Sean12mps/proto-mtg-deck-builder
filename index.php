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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css"
			integrity="sha512-okE4owXD0kfXzgVXBzCDIiSSlpXn3tJbNodngsTnIYPJWjuYhtJ+qMoc0+WUwLHeOwns0wm57Ka903FqQKM1sA==" crossorigin="anonymous" />
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<!-- <body class="debug"> -->
	<body class="">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2>Commander</h2>
						<?php print_card( array( 'size' => 'medium' ) ); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="wrapper-spell-group">
							<div class="spell-group">
								<h2>Mountains</h2>
								<ul class="spell-group-list">
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129659&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129658&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129651&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129656&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129655&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129650&type=card' ) ); ?></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="wrapper-spell-group">
							<div class="spell-group">
								<h2>Others</h2>
								<ul class="spell-group-list">
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129659&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129658&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129651&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129656&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129655&type=card' ) ); ?></li>
									<li><?php print_card( array( 'img_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129650&type=card' ) ); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"
			integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
			integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
			integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
			crossorigin="anonymous"></script>
		<script src="assets/js/scripts.js"></script>
	</body>
</html>