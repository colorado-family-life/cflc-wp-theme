<?php
/*
Template Name: Our Partners
*/
?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
<img class="img-centered" src="<?php echo get_field('pageimage'); ?>">
<!--LEVEL 1 SPONSORS-->
<div class="clearfix">
<h2><?php if(get_field('level1title')){echo get_field('level1title');} ?></h2>
<p><?php the_field('level1text'); ?></p>
<?php while( have_rows('level1partners') ): the_row(); ?>
    <div class="clearfix darkTanBox smallLeftRightMargin quarter">
		<?php if(get_sub_field('url')){	echo '<a href="'.get_sub_field('url').'" target="_blank">'; } ?>		
        	<?php if(get_sub_field('image')){echo "<img class='business-logo' src=".get_sub_field('image')." alt=".get_sub_field('name')." />";} ?>
        	<h4 class="no-margin-bottom"><?php echo get_sub_field('name') ?></h4>
		<?php if(get_sub_field('url')){	echo '</a>'; } ?>
    </div>
<?php endwhile; ?>
</div>
<!--LEVEL 2 SPONSORS-->
<div class="clearfix">
<h2><?php if(get_field('level2title')){echo get_field('level2title');} ?></h2>
<p><?php if(get_field('level2text')){echo get_field('level2text');} ?></p>
<?php while( have_rows('level2partners') ): the_row(); ?>
    <div class="clearfix darkTanBox smallLeftRightMargin quarter">	
		<?php if(get_sub_field('url')){	echo '<a href="'.get_sub_field('url').'" target="_blank">'; } ?>		
        	<?php if(get_sub_field('image')){echo "<img class='business-logo' src=".get_sub_field('image')." alt=".get_sub_field('name')." />";} ?>
        	<h4 class="no-margin-bottom"><?php echo get_sub_field('name') ?></h4>
		<?php if(get_sub_field('url')){	echo '</a>'; } ?>
    </div>
<?php endwhile; ?>
</div>
<!--LEVEL 3 SPONSORS-->
<div class="clearfix">
<h2><?php if(get_field('level3title')){echo get_field('level3title');} ?></h2>
<p><?php if(get_field('level3text')){echo get_field('level3text');} ?></p>
<?php while( have_rows('level3partners') ): the_row(); ?>
    <div class="clearfix darkTanBox smallLeftRightMargin quarter">
		<?php if(get_sub_field('url')){	echo '<a href="'.get_sub_field('url').'" target="_blank">'; } ?>			
        	<?php if(get_sub_field('image')){echo "<img class='business-logo' src=".get_sub_field('image')." alt=".get_sub_field('name')." />";} ?>
        	<h4 class="no-margin-bottom"><?php echo get_sub_field('name') ?></h4>
		<?php if(get_sub_field('url')){	echo '</a>'; } ?>
    </div>
<?php endwhile; ?>
</div>
<!--LEVEL 4 SPONSORS-->
<div class="clearfix">
<h2><?php if(get_field('level4title')){echo get_field('level4title');} ?></h2>
<p><?php if(get_field('level4text')){echo get_field('level4text');} ?></p>
<?php while( have_rows('level4partners') ): the_row(); ?>
    <div class="clearfix darkTanBox smallLeftRightMargin quarter">
		<?php if(get_sub_field('url')){	echo '<a href="'.get_sub_field('url').'" target="_blank">'; } ?>			
        	<?php if(get_sub_field('image')){echo "<img class='business-logo' src=".get_sub_field('image')." alt=".get_sub_field('name')." />";} ?>
        	<h4 class="no-margin-bottom"><?php echo get_sub_field('name') ?></h4>
		<?php if(get_sub_field('url')){	echo '</a>'; } ?>
    </div>
<?php endwhile; ?>
</div>
<!--LEVEL 5 SPONSORS-->
<div class="clearfix">
<h2><?php if(get_field('level5title')){echo get_field('level5title');} ?></h2>
<p><?php if(get_field('level5text')){echo get_field('level5text');} ?></p>
<?php while( have_rows('level5partners') ): the_row(); ?>
    <div class="clearfix darkTanBox smallLeftRightMargin quarter">
		<?php if(get_sub_field('url')){	echo '<a href="'.get_sub_field('url').'" target="_blank">'; } ?>
        	<?php if(get_sub_field('image')){echo "<img class='business-logo' src=".get_sub_field('image')." alt=".get_sub_field('name')." />";} ?>
        	<h4 class="no-margin-bottom"><?php echo get_sub_field('name') ?></h4>
		<?php if(get_sub_field('url')){	echo '</a>'; } ?>
    </div>
<?php endwhile; ?>
</div>
<!--LEVEL 6 SPONSORS-->
<div class="clearfix">
<h2><?php if(get_field('level6title')){echo get_field('level6title');} ?></h2>
<p><?php if(get_field('level6text')){echo get_field('level6text');} ?></p>
<?php while( have_rows('level6partners') ): the_row(); ?>
    <div class="clearfix darkTanBox smallLeftRightMargin quarter">
		<?php if(get_sub_field('url')){	echo '<a href="'.get_sub_field('url').'" target="_blank">'; } ?>			
        	<?php if(get_sub_field('image')){echo "<img class='business-logo' src=".get_sub_field('image')." alt=".get_sub_field('name')." />";} ?>
        	<h4 class="no-margin-bottom"><?php echo get_sub_field('name') ?></h4>
		<?php if(get_sub_field('url')){	echo '</a>'; } ?>
    </div>
<?php endwhile; ?>
</div>

<?php get_footer(); ?>