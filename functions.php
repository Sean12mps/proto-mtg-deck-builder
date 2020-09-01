<?php // phpcs:disable

function get_header() {
	include 'partials/header.php';
}

function get_footer() {
	include 'partials/footer.php';
}

function get_header_scripts() {
	include 'partials/header-scripts.php';
}

function get_footer_scripts() {
	include 'partials/footer-scripts.php';
}

function print_card( $args ) {

	// Options.
	$face   = ( isset( $args['face'] ) ? $args['face'] : 'face-up' );
	$tapped = ( isset( $args['tapped'] ) && $args['tapped'] === 'true' ? 'true' : 'false' );
	$size   = ( isset( $args['size'] ) ? $args['size'] : 'small' );
	$notes  = ( isset( $args['notes'] ) ? $args['notes'] : false );

	// Contents.
	$img_url = ( isset( $args['img_url'] ) ? $args['img_url'] : 'assets/img/card-backside.jpg' );

	$tooltip_content = '<img src=\'' . $img_url . '\'>';

	if ( $notes ) {

		$tooltip_content = '<p>' . $notes . '</p>' . $tooltip_content;
	}
	?>
	<div
		class="spell" 
		face="<?php echo $face; ?>"
		tapped="<?php echo $tapped; ?>"
		size="<?php echo $size; ?>"
		tabindex=0
		data-toggle="tooltip"
		data-trigger="focus"
		data-html="true"
		title="<?php echo $tooltip_content; ?>"
		>
		<img class="spell-front"
		src="<?php echo $img_url; ?>"
		draggable="true">
	</div>
	<?php
}

