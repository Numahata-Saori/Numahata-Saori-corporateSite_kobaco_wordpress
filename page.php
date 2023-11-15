<?php get_header(); ?>

<?php
if (have_posts()) :
	while (have_posts()) : the_post();
?>

<h2 class="">
	<?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></span>
</h2>

<main class="main">
	<div class="ly-cont">
		<div class="page-wrap">
<?php the_content();?>
		</div>
	</div>
</main>

<?php
	endwhile;
endif;
?>


<?php get_footer(); ?>
