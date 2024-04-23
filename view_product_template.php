<?php
/*
Template Name: View product Table
*/
/*
Retrive data from database
*/
global $wpdb;

$results = $wpdb->get_results('select * from product');
the_post();

get_header();
?>
<div class="page__text">
	<?php the_content( null, true ); ?>
</div>
<table class="table table-striped">
					<thead>
						<tr>
							<th>Product_id</th>
							<th>Description</th>
							<th>Category_id</th>
							<th>Dimension</th>
							<th>Quantity</th>
							<th>Product_condition</th>
							<th>Location</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($results as $product) {?>
							<tr>
								<td><?php echo $product->Product_id; ?></td>
								<td><?php echo $product->Description; ?></td>
								<td><?php echo $product->Category_id; ?></td>
								<td><?php echo $product->Dimension; ?></td>
								<td><?php echo $product->Quantity; ?></td>
								<td><?php echo $product->Product_condition; ?></td>
								<td><?php echo $product->Location; ?></td>
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
