<?php
/*
Template Name: Free Support
*/
?>

<?php get_header();
	$page_id = 16;

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
	
	<div class="row clearfix pad10">
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
	</div>

<?php get_footer(); ?>