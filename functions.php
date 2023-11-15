<?php
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );


/**
 *
 */

/**
 * カスタムメニューを使用可能にする
 */
add_theme_support('menus');


/**
 * wp_nav_menuのliにclass追加
 */
function add_additional_class_on_li($classesMenu, $itemMenu, $argsMenu)
{
	if (isset($argsMenu->add_li_class)) {
		$classesMenu['class'] = $argsMenu->add_li_class;
	}
	return $classesMenu;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


/**
 *  wp_nav_menuのaにclass追加
 */
function add_additional_class_on_a($classesMenu, $itemMenu, $argsMenu)
{
	if (isset($argsMenu->add_li_class)) {
		$classesMenu['class'] = $argsMenu->add_a_class;
	}
	return $classesMenu;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);



/**
 * 抜粋の長さ変更
 */
function twpp_change_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );


/**
 * 省略記号[…]を変更
 */
function twpp_change_excerpt_more( $more ) {
	$html = '... <a class="news-list__readBtn" href="' . esc_url( get_permalink() ) . '">続きを読む</a>';
	return $html;
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );
