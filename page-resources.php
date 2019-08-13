<?php
/*
Template Name: Resources
*/
?>

<?php get_header(); ?>

<?php get_header(); ?>

<div class="clearfix">
	<div class="row clearfix pad10">
		<?php
		$page_id = 64;
		// The Query
		$args = array('page_id' => $page_id);
		$query1 = new WP_Query( $args );

		// The Loop
		while ( $query1->have_posts() ) {
			$query1->the_post();
			echo '<h1>'.get_the_title().'</h1>';
			echo get_the_content();
		}
		wp_reset_postdata(); // only if you need another loop below
		?>
	</div>
</div>
	<div class="clearfix pad10">
		
		<div class="row">

		<div class="clearfix">
				<?php while( have_rows('resources',$page_id) ): the_row(); ?>
					<div class="position-relative clearfix btn-container-bottom-margin donate-group">
						<?php if(get_sub_field('resimage')){echo '<div><img class="imgdonate" width="150" src="'.get_sub_field('resimage').'"/></div>'; } ?>
						<?php if(get_sub_field('restitle')){echo '<h2>'.get_sub_field('restitle').'</h2>'; } ?>
						<?php if(get_sub_field('restext')){echo '<p>'.get_sub_field('restext').'</p>'; } ?>
						<?php
							if(get_sub_field('reslinktext')){$linktext = get_sub_field('reslinktext');}else{$linktext = 'More Info';}
							if(get_sub_field('reslink')){echo '<a class="btn img-bottom-margin" target="_blank" href="'.get_sub_field('reslink').'"><span>'.$linktext.'</span><img class="link-arrow" src="'.get_template_directory_uri().'/images/linkarrow.png" /></a>'; } ?>
					</div>
    			<?php endwhile; ?>

		</div>

		
	</div>

</div>
<?php get_footer(); ?>