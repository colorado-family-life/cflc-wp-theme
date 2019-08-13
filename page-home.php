<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<?php $page_id = 8;
//var_dump(get_fields());
?>
<div class="wrapper main">
	<div id="slider" class="nivoSlider" style="position: relative; background: url(&quot;images/momandbabyslide.jpg&quot;) no-repeat;">
	<?php while( have_rows('slides',$page_id) ): the_row(); ?>
		<?php if(get_sub_field('slidelink')){ ?>
			<a href="<?php echo get_sub_field('slidelink'); ?>" class="nivo-imageLink" style="display: none;">
				<img src="<?php echo get_sub_field('slideimage'); ?>" alt="slider image" style="display: none;">
			</a>
		<?php }else{ ?>
			<img src="<?php the_sub_field('slideimage'); ?>" alt="slider image" style="display: none;">
		<?php } ?>
		
	<?php endwhile; ?>
	</div>
	
	<div class="clearfix">
	<div class="row clearfix pad10">
		<?php
		// The Query
		$args = array('page_id' => $page_id);
		$query1 = new WP_Query( $args );
		// The Loop
		while ( $query1->have_posts() ) {
			$query1->the_post();
			echo get_the_content();
			//var_dump(get_fields());	
?>
 <div class="clearfix">
	<div class="card-deck">
    <?php while( have_rows('cards') ): the_row(); ?>
		<div class="card card-with-btn clearfix">
				<div class="row">
						<div class="half">
							<img class="imgbox" src="<?php the_sub_field('cardimage'); ?>" alt="supplies">
						</div>
						<div class="half">
							<h2><?php the_sub_field('cardtitle'); ?></h2>
							<p><?php the_sub_field('cardtext'); ?></p>
						</div>
				</div>
				<a class="btn2" href="<?php the_sub_field('cardbuttonlink'); ?>"><img src="<?php the_sub_field('cardbuttonimage'); ?>" /></a>
		</div>
    <?php endwhile; ?>
	</div>
</div>
<?php } // end loop ?>
			
	</div>
</div>	
</div><!-- .row.clearfix -->

<?php get_footer(); ?>