<?php
/*
Template Name: Donate
*/
?>

<?php 
get_header();
$page_id = 27;
 ?>

<div class="wrapper main">

	<div class="clearfix">
		<div class="row clearfix pad10">
		<?php
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
				<?php while( have_rows('blocks',$page_id) ): the_row(); ?>
					<div class="position-relative clearfix btn-container-bottom-margin donate-group">
						<?php if(get_sub_field('blockimage')){echo '<div><img class="imgdonate" src="'.get_sub_field('blockimage').'"/></div>'; } ?>
						<?php if(get_sub_field('blocktitle')){echo '<h2>'.get_sub_field('blocktitle').'</h2>'; } ?>
						<?php if(get_sub_field('blocktext')){echo '<p>'.get_sub_field('blocktext').'</p>'; } ?>
						<?php if(get_sub_field('blocklink')){echo '<a class="btn img-bottom-margin" target="_blank" href="'.get_sub_field('blocklink').'"><span>'.get_sub_field('blocklinktext').'</span><img class="link-arrow" src="'.get_template_directory_uri().'/images/linkarrow.png" /></a>'; } ?>
					</div>
    			<?php endwhile; ?>

		</div>

		
	</div>

</div>

<?php get_footer(); ?>
