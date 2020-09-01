<?php // phpcs:disable ?>

<?php require_once 'functions.php'; ?>

<?php get_header(); ?>

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
						<li>
							<?php print_card( array( 
							'img_url' => 'http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=409741&type=card',
							'notes'   => 'Good spell',
							'rulings' => array(
								array(
									'date' => '2016-04-08',
									'text' => 'Archangel Avacyn’s delayed triggered ability triggers at the beginning of the next upkeep regardless of whose turn it is.',
								),
								array(
									'date' => '2016-04-08',
									'text' => 'Archangel Avacyn’s delayed triggered ability won’t cause it to transform back into Archangel Avacyn if it has already transformed into Avacyn, the Purifier, perhaps because several creatures died in one turn.',
								),
								array(
									'date' => '2016-04-08',
									'text' => 'For more information on double-faced cards, see the Shadows over Innistrad mechanics article (http://magic.wizards.com/en/articles/archive/feature/shadows-over-innistrad-mechanics).',
								),
							),
							) ); ?>
						</li>
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

<?php get_footer(); ?>
