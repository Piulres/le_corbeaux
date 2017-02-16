<?php
/**

 * Single Page Template

 **/
?>

<?php get_header(); ?>

<div id="single" class="container">

	<div class="background"></div>

	<div class="shield">

		<div class="left">
			
			<section>
				
				<div class="row">
					
					<div class="col-md-12 col-xs-12">

						<!-- Start the Loop. -->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<!-- Display the Title as a link to the Post's permalink. -->
							<div class="title">

								<h2>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<?php the_title();?>
									</a>
								</h2>

							</div>

							<div class="infos">
								
								<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
								<p class="postdate">
									<?php the_date('Y, F j'); ?> at <?php the_time('g:i');?> by <?php the_author(); ?>
								</p>
								
								<!-- Display a comma separated list of the Post's Categories. -->
								<p class="postmetadata">
									<?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?>
								</p>

							</div>

						<?php endwhile; else : ?>

							<!-- The very first "if" tested to see if there were any Posts to -->
							<!-- display.  This "else" part tells what do if there weren't any. -->
							<p class="posterror"><?php _e( 'Strange things happen.' ); ?></p>

							<!-- REALLY stop The Loop. -->

						<?php endif; ?>

					</div>

				</div>

			</section>

		</div>

		<div class="right">		

			<section>

				<div class="row">

					<div class="col-md-12 col-xs-12">

						<!-- Start the Loop. -->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
							<div class="content">	

								<!-- Display the Post's content in a div box. -->
								<div class="entry">
									<?php the_content(); ?>
								</div>	

							</div> <!-- closes the first div box -->

							<!-- Stop The Loop (but note the "else:" - see next line). -->

						<?php endwhile; else : ?>

							<!-- The very first "if" tested to see if there were any Posts to -->
							<!-- display.  This "else" part tells what do if there weren't any. -->
							<p class="posterror"><?php _e( 'Strange things happen.' ); ?></p>

							<!-- REALLY stop The Loop. -->

						<?php endif; ?>

					</div>

				</div>

			</section>

		</div>

	</div>

</div>

<?php get_footer(); ?>