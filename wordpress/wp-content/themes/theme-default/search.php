<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<div id="search" class="container">

	<div class="background"></div>

	<div class="shield">

		<div class="left">
		
			<section>

				<h2 class="search-title">
					<?php echo $wp_query->found_posts; ?> <?php _e( 'search results found for', 'locale' ); ?>: <?php the_search_query(); ?>
				</h2>

				<div class="search">

					<?php get_search_form(); ?>

				</div>		

			</section>

		</div>

		<div class="right">	

			<section>				

				<div class="posts">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="box">

						<h2>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_title();?>
							</a>
						</h2>
						
						<p class="excerpt"><?php the_excerpt(); ?></p>		

						</div>

					<?php endwhile; else : ?>

						<!-- The very first "if" tested to see if there were any Posts to -->
						<!-- display.  This "else" part tells what do if there weren't any. -->
						<p class="posterror"><?php _e( 'Strange things happen.' ); ?></p>

						<!-- REALLY stop The Loop. -->

					<?php endif; ?>

				</div>	
				
			</section>

		</div>

	</div>

</div><!-- #content -->

<?php get_footer(); ?>