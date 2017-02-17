<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>
        
    <div class="container boxhome">

        <div class="horizon scroll">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/horizonn.png" alt="" />
        </div>
        
        <div class="middle scroll">
            <!-- <img src="<?php echo get_bloginfo('template_directory');?>/img/middlee.png" alt="" /> -->
        </div>

        <div class="front scroll">
            
            <div class="case-1 page blur">
                <h2>Hello Friend</h2>
                <p>Welcome to Le_Corbeaux. </br>Content made to expand your mind. </br> Site in develop.</p>
            </div>
            
            <div class="case-2 page blur">
                <h2>Last Posts in Category Teste</h2>
                <div class="entry">
                    <?php

                    global $post;
                    $args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 'Teste' );

                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <?php endforeach; 
                    wp_reset_postdata();?>

                </div>
            </div>           

            <div class="case-3 page blur">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</br>
                    et dolore magna aliqua.</br>
                </p>
            </div>
            
            <div class="case-4 page blur">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</br>
                    et dolore magna aliqua.</br>
                </p>
            </div>

            <div class="case-5 page blur">
                <h2>Recent Posts</h2>
                <div class="entry">
                <?php
                    $args = array( 'numberposts' => '7' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></p>';
                    }
                    wp_reset_query();
                ?>
                </div>
            </div>

            <div class="poli-1 cool">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/poli-1.png" alt="" />
            </div>

            <div class="poli-2 cool">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/poli-2.png" alt="" />
            </div>

            <div class="poli-3 cool">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/poli-3.png" alt="" />
            </div>

            <div class="poli-4 cool">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/poli-3.png" alt="" />
            </div>

        </div>

    </div>

    <script type="text/javascript">

    (function($) {
        $.jInvertScroll(['.scroll']);
    }(jQuery));

    </script>

<?php get_footer(); ?>