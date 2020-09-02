<?php // phpcs:disable ?>

<?php require_once 'functions.php'; ?>

<?php get_header(); ?>

<div class="container-fluid">

	<div class="row">

		<div class="col-md-1">
			<?php get_sidebar_left(); ?>
		</div>
		<div class="col-md-10">
			<?php get_content(); ?>
		</div>
		<div class="col-md-1">
			<?php get_sidebar_right(); ?>
		</div>
	</div>

</div>

<?php get_footer(); ?>
