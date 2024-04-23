<?php
/*
Template Name: View account Table
*/
/*
Retrive data from database
*/
global $wpdb;

$results = $wpdb->get_results('select * from account');
the_post();

get_header();
?>
<div class="page__text">
	<?php the_content( null, true ); ?>
</div>
<table class="table table-striped">
					<thead>
						<tr>
							<th>Email Address</th>
							<th>Password</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($results as $account) {?>
							<tr>
								<td><?php echo $account->Email; ?></td>
								<td><?php echo $account->Password; ?></td>
							</tr>
						<?php }?>
					</tbody>
				</table>
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
