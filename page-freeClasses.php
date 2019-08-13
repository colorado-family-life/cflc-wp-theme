<?php
/*
Template Name: Free Classes
*/
?>

<?php get_header();
	$page_id = 12;

	// The Query
	$args = array('page_id' => $page_id);
	$query1 = new WP_Query( $args );

	// The Loop
	while ( $query1->have_posts() ) {
		$query1->the_post();
		//echo get_the_content();
		$siblings = get_pages(array(
			'child_of' => $post->post_parent,
			'title_li'=> ''
		));
	}
	wp_reset_postdata(); // only if you need another loop below
?>
<div id="subnavcontainer">
	<h1>
		Free Classes
		<div id="subnav">
			<ul>
				<?php
				if($siblings){
					foreach ( $siblings as $sib) {
						echo '<li><a href="/'.$sib->post_name.'">'.str_replace('Free','',$sib->post_title).'</a></li>';
					}
				}
				?>
			</ul>
		</div>
	</h1>
</div>
<div class="row clearfix divider-line pad10">
	<?php
	
	// The Query
	$args = array('page_id' => $page_id);
	$query1 = new WP_Query( $args );

	// The Loop
	while ( $query1->have_posts() ) {
		$query1->the_post();
		echo get_the_content();
	}
	wp_reset_postdata(); // only if you need another loop below
	?>

</div><!-- /.row -->

	<p class="large">Following are just a few of the over 250 free classes available:</p>
	
	<div id="classeslist" class="clearfix">
	<div class="card-deck">
		<?php while( have_rows('classblocks',12) ): the_row(); ?>
		<div class="card classes-group">
			<?php echo get_sub_field('blocktext'); ?>
		</div>
		<?php endwhile; ?>
	</div><!-- .card-deck -->
</div>

<?php get_footer(); ?>