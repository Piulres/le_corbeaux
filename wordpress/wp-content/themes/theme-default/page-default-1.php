<?php /* Template Name: Page Default #1 */ ?>

<?php get_header(); ?>
    
    <div class="container" >
        
        <div class="header scrollme animateme" data-when="view" data-from="0.5" data-to="0" data-opacity="0" data-easing="easeout">
            <div class="logo">
                <a href="/">
                    <img src="<?php echo get_bloginfo('template_directory');?>/img/header_png.png" alt="Le Corbeaux">
                </a>
            </div>
        </div>

        <div class="horizon scroll">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/horizonn.png" alt="" />
        </div>
        
        <div class="middle scroll">
            <!-- <img src="<?php echo get_bloginfo('template_directory');?>/img/middlee.png" alt="" /> -->
        </div>

        <div class="front scroll">
            
            <div class="case-1 page blur">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</br>
                    et dolore magna aliqua.</br>
                </p>
            </div>
            
            <div class="case-2 page blur">
                <h2>Lorem ipsum</h2>
                <p>
                    1.) Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<br/>
                    2.) Dolore magna aliqua. Ut enim ad minim veniam.<br/>
                    3.) Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.<br/>                   
                </p>
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
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</br>
                    et dolore magna aliqua.</br>
                </p>
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