<?php /* Template Name: Page Default #1 */ ?>



<?php get_header(); ?>


    <div class="container">

        <div class="header">
            <div class="logo">
                <a href="/">
                    <img src="<?php echo get_bloginfo('template_directory');?>/img/header_png.png" alt="Le Corbeaux">
                </a>
            </div>
        </div>
        
        <div class="horizon scroll">
            <!-- <img src="<?php echo get_bloginfo('template_directory');?>/img/horizon.png" alt="" /> -->
        </div>
        
        <div class="middle scroll">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/middlee.png" alt="" />
        </div>
        
        <div class="front scroll">
            
            <div class="description page">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</br>
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</br>
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</br>
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in</br>
                    culpa qui officia deserunt mollit anim id est laborum.</br>

                    <hr style="border:none; border-bottom: 1px #ddd solid;" />
                    Note:<br/>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
            
            <div class="documentation page">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>
                    1.) Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<br/>
                    2.) Dolore magna aliqua. Ut enim ad minim veniam.<br/>
                    3.) Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.<br/>                   
                </p>
            </div>
            
            <div class="options page">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</br>
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</br>
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</br>
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in</br>
                    culpa qui officia deserunt mollit anim id est laborum.</br>

                    <hr style="border:none; border-bottom: 1px #ddd solid;" />
                    Note:<br/>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
            
            <div class="download page">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</br>
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</br>
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</br>
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in</br>
                    culpa qui officia deserunt mollit anim id est laborum.</br>

                    <hr style="border:none; border-bottom: 1px #ddd solid;" />
                    Note:<br/>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>

        </div>

    </div>

    <?php include 'le_scripts.php' ?>

    <script type="text/javascript">
    (function($) {
        $.jInvertScroll(['.scroll']);
    }(jQuery));
    
    $(document).ready(function(){
        $('html, body').animate({scrollTop: 0}, 20);
    });
    </script>

<?php get_footer(); ?>