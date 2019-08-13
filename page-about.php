<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
<div class="clearfix">
	<div class="row clearfix pad10">
		<?php
		// The Query
		$args = array('page_id' => 24);
		$query1 = new WP_Query( $args );

		// The Loop
		while ( $query1->have_posts() ) {
			$query1->the_post();
			echo get_the_content();
		}
		wp_reset_postdata();
		?>
	</div>
</div>

<div class="clearfix clearboth">  
	<h2>Staff and Board Members</h2>
		<?php while( have_rows('staff') ): the_row(); ?>
			<div class="clearfix darkTanBox">
 				<div class="boardImageContainer">
					<?php echo "<img src=".get_sub_field('image')." alt=".get_sub_field('name')." />"; ?>
     	 		</div>
				<h3><?php the_sub_field('name'); ?></h3>
				<p class="italics"><?php echo get_sub_field('jobtitle') ?></p>
        		<p><?php echo get_sub_field('bio') ?></p>
			</div>
		<?php endwhile; ?>

	<h2>Volunteers</h2>
		<?php while( have_rows('volunteers') ): the_row(); ?>
			<div class="clearfix darkTanBox">
 				<div class="boardImageContainer">
					<?php echo "<img src=".get_sub_field('image')." alt=".get_sub_field('name')." />"; ?>
     	 		</div>
				<h3><?php the_sub_field('name'); ?></h3>
				<p class="italics"><?php echo get_sub_field('title') ?></p>
        		<p><?php echo get_sub_field('bio') ?></p>
			</div>
		<?php endwhile; ?>
</div>

<?php get_footer(); ?>