<?php
/*
Template Name: Get Involved
*/
?>

<?php get_header(); 
$page_id = 22;
?>
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
<br />
<div class="row clearfix divider-line"></div>

<h2>Volunteer Opportunities</h2>

<div class="row clearfix">
	<div class="third">
	<?php $i = 0; ?>
	<?php while( have_rows('volunteeropps') ): the_row(); ?>
		<?php if(get_sub_field('vopptitle')){echo '<h4>'.get_sub_field('vopptitle').'</h4>'; } ?>
		<?php if(get_sub_field('vopptext')){echo '<p>'.get_sub_field('vopptext').'</p>'; } ?>
		<?php if($i == 3 || $i == 7){ echo '</div><div class="third">';} ?>
		<?php if($i == 11){ echo '</div>';} ?>
		<?php $i++; ?>
	<?php endwhile; ?>
</div>
</div>

<?php get_footer(); ?>