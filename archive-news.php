<?php get_header(); ?>

<main class="main page-wrap news-list ">
	<div class=" ly-cont">
		<div class="news__headline news-list__headline">
			<h2 class="headline">お知らせ一覧</h2>
		</div>

		<div class="news__conten">
			<ul class="news__list news-list__list">
<?php
$argsNews = array(
	'post_type' => 'news',
	'posts_per_page' => 20,
	'orderby' => 'date',
	'order' => 'desc'
);
$the_query = new WP_Query($argsNews);

if( $the_query->have_posts() ) :
	while( $the_query->have_posts() ) :
		$the_query->the_post();
?>
				<li class="news__item news-list__item">
					<time class="news-list__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
					<div class="news-list__item-content">
						<div class="news-list__title-wrap">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						</div>

						<div class="news-list__desc-wrap">
						<p><?php the_excerpt(); ?></p>
						<!-- <a class="news-list__readBtn" href="<?php the_permalink(); ?>">READ MORE</a> -->
						</div>
					</div>
				</li>
<?php
	// endforeach;
	endwhile;
	wp_reset_postdata();
endif;
// wp_reset_postdata();
?>
			</ul>
		</div>
	</div>
</main>

<?php get_footer(); ?>
