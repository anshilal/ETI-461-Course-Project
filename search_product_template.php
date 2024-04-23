<?php
/*
Template Name: search products
*/
the_post();

get_header();
?>
<div class="page__text">
	<?php the_content( null, true ); ?>
</div>
<form role="form" method="post">
					
					<div class="form-group">
						<input id="search" name="search" type="text" placeholder="Search" 
						class="form-control input-sm"  required="">
					<div class="row justify-content-center">
						<div class="col-xs-4 col-sm-4 col-md-4">
							<input type="submit" class="btn btn-info btn-block" value="Search" name="searchbtn">
						</div>
					</div>
<?php
wp_link_pages(
	[
		'before'      => '<nav class="pagination"><div class="nav-links">',
		'after'       => '</div></nav>',
		'link_before' => '<span class="page-numbers">',
		'link_after'  => '</span>',
	]
);

comments_template();

get_footer();
