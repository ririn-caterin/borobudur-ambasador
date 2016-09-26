<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package freak
 */

get_header(); ?>
	<div class="container-fluid">
		<div id="primary-mono" class="content-area <?php do_action('freak_primary-width') ?> page">
		<main id="main" class="site-main" role="main">
			<div class="row back-abu">
				<div class="container">
					<?php the_title( '<h1 class="entry-title judul">', '</h1>' ); ?>
				</div>
			</div>
			<div class="row container bottom20">
				<div class="row">
					<div class="col-md-8 col-xs-12 konten-page">
						<?php while ( have_posts() ) : the_post(); ?>
				
						<?php get_template_part( 'content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

						<?php endwhile; // end of the loop. ?>
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
