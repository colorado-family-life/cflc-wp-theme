<?php
/*
Template Name: Get Help
*/
?>

<?php get_header(); 
$page_id = 10;
?>

<div class="wrapper">
		
	<div id="subnavcontainer">
		<h1>
	  		Get Help
	  		
	  		<div id="subnav">
				<?php 
					$args = array(
						'post_parent' => $page_id,
						'post_type'   => 'page', 
						'numberposts' => -1,
						'post_status' => 'publish',
						'order' => 'ASC',
					);
					$children = get_children( $args );
				//var_dump($children);
				?>
				<ul>
				<?php
					if($children){
						foreach ( $children as $child) {
							echo '<li><a href="/'.$child->post_name.'">'.str_replace('Free','',$child->post_title).'</a></li>';
						}
					}
					?>
				</ul>
			
			</div>
		
		</h1>
	
	</div>
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
		
	<div id="types-of-help" class="clearfix">
		<div class="card-deck">
			<?php while( have_rows('cards') ): the_row(); ?>
			<div class="card card-with-btn clearfix">
				<a class="image-link" href="<?php the_sub_field('cardlink'); ?>"><img src="<?php the_sub_field('cardimage'); ?>" /></a>
				<h3 class="h3marginbottom"><?php the_sub_field('cardtitle'); ?></h3>
				<p class="ptopspace"><?php the_sub_field('cardtext'); ?></p><br /><br />
				<a class="btn" href="<?php the_sub_field('cardlink'); ?>"><span>Learn More</span><img class="link-arrow" src="<?php bloginfo( 'template_url' ); ?>/images/linkarrow.png" /></a>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>