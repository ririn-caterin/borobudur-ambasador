<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package freak
 */

get_header(); ?>
	<div class="container-fluid">
		<div id="primary-mono" class="content-area <?php do_action('freak_primary-width') ?> page">
		<main id="main" class="site-main top-konten" role="main">
			<div class="row back-abu">
				<div class="container">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'freak' ); ?></h1>
				</div>
			</div>
			<div class="row container">
				<div class="row">
					<div class="col-md-8 col-xs-12 konten-page">
						<p class="padding20"><?php _e( 'It looks like nothing was found at this location.', 'freak' ); ?></p>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="row side-countdown">
							<div class="row">
								<?php echo do_shortcode('[countdown title="" event="" date="10 November 2016" hour="06" minutes="00" seconds="00" format="DHMS" link="false"]');?>
							</div>
							<div class="row racedate">
								<span class="glyphicon glyphicon-calendar ikon" aria-hidden="true"></span>Race Date : 20.10.2016
							</div>
							<div class="row racedate">
								<span class="glyphicon glyphicon-time ikon" aria-hidden="true"></span>Time : 06.00 AM
							</div>
							<div class="row racedate">
								<span class="glyphicon glyphicon-map-marker ikon" aria-hidden="true"></span>Location : Borobudur Temple
							</div>
						</div>
						<div class="row">
							<center><button type="button" class="btn btn-success font5 button-daftar">Daftar</button></center>
						</div>
						<div class="row padding20">
							<center><button type="button" class="btn btn-warning font5 button-daftar">Status Pembayaran</button></center>
						</div>
						<div class="row">
							<iframe width="100%" height="250" src="https://www.youtube.com/embed/m1dG_EcXVl0?feature=oembed" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				
			</div>

		</main><!-- #main -->

	</div><!-- #primary -->
	</div>
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
