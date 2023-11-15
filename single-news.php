<?php get_header(); ?>

<?php
if (have_posts()) :
	while (have_posts()) : the_post();
?>


<main class="main page-wrap news-detail">
	<div class="ly-cont">
		<div class="news-detail__wrap">
			<time class="news-detail__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
			<div class="news-detail__content">
				<h2 class="news-detail__title"><?php the_title(); ?></h2>
				<div class="news-detail__desc">
<?php the_content();?>
				</div>
			</div>
		</div>
		<div class="news-detail__back-btn"><a href="<?php echo home_url(); ?>/news">お知らせ一覧に戻る</a></div>
	</div>
</main>

<?php
	endwhile;
endif;
?>


<?php get_footer(); ?>
