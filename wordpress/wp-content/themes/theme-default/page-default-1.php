<?php /* Template Name: Home Page Template */ ?>

<div id="loader" style="display:block;"></div>  

<?php get_header(); ?>
        
    <div class="container">

        <div class="horizon scroll">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/horizonn.png" alt="" />
        </div>
        
        <div class="middle scroll">
            <!-- <img src="<?php echo get_bloginfo('template_directory');?>/img/middlee.png" alt="" /> -->
        </div>

        <div class="front scroll">

            <div class="case-1 page">

                <div class="grid">

                    <?php

                    // https://codex.wordpress.org/Class_Reference/WP_Query

                    $args = array(
                        'orderby' => 'title',
                        'posts_per_page' => '2',
                        'cat' => 7,
                    );

                    $catquery = new WP_Query( $args );

                    // $catquery = new WP_Query( 'cat=7&posts_per_page=2' );

                    while($catquery->have_posts()) : $catquery->the_post();
                    ?>
                
                        <figure class="blur effect-sarah">
                            <img src="<?php echo get_bloginfo('template_directory');?>/img/1.jpg" alt="img01"/>
                            <figcaption>
                                <h2><?php the_title(); ?></h2>
                                <p class="excerpt"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">View more</a>
                            </figcaption>           
                        </figure>
                
                    <?php endwhile; ?>

                </div>

            </div>

            <div class="case-2 page">

                <div class="grid">

                    <?php

                    // https://codex.wordpress.org/Class_Reference/WP_Query

                    $args = array(
                        'orderby' => 'title',
                        'posts_per_page' => '2',
                        'cat' => 7,
                    );

                    $catquery = new WP_Query( $args );

                    // $catquery = new WP_Query( 'cat=7&posts_per_page=2' );

                    while($catquery->have_posts()) : $catquery->the_post();
                    ?>
                
                        <figure class="blur effect-sarah">
                            <img src="<?php echo get_bloginfo('template_directory');?>/img/2.jpg" alt="img01"/>
                            <figcaption>
                                <h2><?php the_title(); ?></h2>
                                <p class="excerpt"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">View more</a>
                            </figcaption>           
                        </figure>
                
                    <?php endwhile; ?>

                </div>

            </div>

            <div class="case-3 page">

                <div class="grid">

                    <?php

                    // https://codex.wordpress.org/Class_Reference/WP_Query

                    $args = array(
                        'orderby' => 'title',
                        'posts_per_page' => '1',
                        'cat' => 7,
                    );

                    $catquery = new WP_Query( $args );

                    // $catquery = new WP_Query( 'cat=7&posts_per_page=2' );

                    while($catquery->have_posts()) : $catquery->the_post();
                    ?>
                
                        <figure class="blur effect-sarah">
                            <img src="<?php echo get_bloginfo('template_directory');?>/img/3.jpg" alt="img01"/>
                            <figcaption>
                                <h2><?php the_title(); ?></h2>
                                <p class="excerpt"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">View more</a>
                            </figcaption>           
                        </figure>
                
                    <?php endwhile; ?>

                </div>

            </div>

        </div>        

    </div>

    <script type="text/javascript">

        $(window).scrollTop(0);

        var myVar;

        function myFunction() {
            $('html').addClass('crow');
            $('#myDiv').addClass('none');
            myVar = setTimeout(showPage, 8000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
            $('html').removeClass('crow');
            $('#myDiv').removeClass('none');
        }
        
        (function($) {
            $.jInvertScroll(['.scroll']);
        }(jQuery));

    </script>

<?php get_footer(); ?>