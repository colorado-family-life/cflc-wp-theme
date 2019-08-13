<?php
/*
Template Name: Free Supplies
*/
?>

<?php get_header();
	$page_id = 14;

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
<div class="wrapper main">
<div id="subnavcontainer">
	<h1>
		Free Supplies
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
	
	<div class="divider-line">
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
	<h3><?php echo get_field( "title", $page_id ); ?></h3>
	<div class="row clearfix">
		<?php 
			$i = 0;
			while( have_rows('steps') ): the_row(); 
		?>
			<?php if($i==0){ echo '<div class="third">'; } ?>
			<?php if($i==2){ echo '</div><div class="two-thirds"><img class="img-bottom-margin img-full-width" src="'.get_field('image',$page_id).'">'; } ?>
			<?php if(get_sub_field('steptitle')){ echo '<h4>'.get_sub_field("steptitle").'</h4>'; } ?>
			<?php if(get_sub_field('stepimage')){ echo '<img class="rounded" src="'.get_sub_field("stepimage").'" />'; } ?>
			<?php if(get_sub_field('steptext')){ echo '<p>'.get_sub_field("steptext").'</p>'; } ?>
			<?php $i++; ?>
		<?php endwhile; ?>
	
		
<?php /* 		
		
	<h3>How Do You Get Free Supplies?</h3>
	
	<div class="row clearfix">

		<h4>Step 1: Make an Appointment</h4>
		<p>Call 303-366-1072 to schedule your first appointment. Both daytime and evening classes are available. On average, classes are one hour long.</p>
	  <h4>Step 2: Earn Mommy Money or Daddy Dollars</h4>
	  <img class="imgmoney" src="<?php bloginfo( 'template_url' ); ?>/images/money.jpg">
	  <p>Mommy Money or Daddy Dollars is coupon money parents earn by taking our classes, arriving on time, and bringing back completed homework.</p>
	  <ul>
	  <li>Being on time—$1.00*</li>
	  <li>Participating in class—$5.00*</li> 
	  <li>Completing homework—$5.00*</li> 
	  <li>$5.00* per family for each child under the age of 3, including unborn children.</li>
	  </ul>
	  <p class="italics">*Coupons are redeemable only at CFLC and have no cash value.</p>
	</div><!--/.third-->
	<div class="two-thirds">
	  <img class="img-bottom-margin img-full-width" src="<?php bloginfo( 'template_url' ); ?>/images/boutique.jpg">
	  <h4>Step 3: Shop in Our Boutique</h4>
	  <p>The boutique is where you use your Mommy Money or Daddy Dollars to purchase things you need for your family. Everything in the boutique is new or gently used. All items are provided through donations from the community, churches, businesses, and individuals.</p>
	  <p>Items in the boutique are individually priced. You must have enough coupon money to buy the items you want at the time of purchase. You can spend all of your coupon money at each visit or save some to purchase larger items.</p>
	</div><!--/.two-thirds-->
	*/ ?>
</div>

</div>

<?php get_footer(); ?>