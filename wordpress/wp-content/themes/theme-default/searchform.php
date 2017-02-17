<form action="<?php echo home_url( '/' ); ?>" method="get">
	<i class="fa fa-search" aria-hidden="true"></i>
    <input type="text" name="s" placeholder="Search for " id="search" value="<?php the_search_query(); ?>" />
	<input type="hidden" value="post" name="post_type" id="post_type" />
</form>