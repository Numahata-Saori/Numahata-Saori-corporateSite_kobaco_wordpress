
    <footer class="footer">
        <section class="contact" id="contact">
            <div class="contact__wrap">
                <div class="contact__headline">
                    <h2 class="headline">
                        CONTACT
                        <span class="headline-sub">お問い合わせ</span>
                    </h2>
                </div>
                <div class="contact__content">
                    <div class="contact__tel">
                        <div class="contact__tel-item">
                            <a href="tel:06-4256-8375">TEL:06-4256-8375</a>
                        </div>
                        <div class="contact__tel-item">
                            FAX:06-4302-0911
                        </div>
                    </div>
                    <p class="contact__desc">サービスについてのご質問・お見積りのご相談など、お気軽にお問い合わせください。</p>
                    <div class="contact__info">
                        <div class="contact__info-line__triangle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="contact__info-line">
                            <div class="contact__info-line__btn btn-wrap">
                                <a class="text-white" href="#">LINEでお問い合わせ</a>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/kobaco_line-img.jpg" alt="">
                        </div>
<?php
if(is_page( 'contact' )) :

/* contactページではお問い合わせフォームを非表示 */

else :
?>
						<div class="contact__btn btn-wrap"><a class="text-white" href="<?php echo get_permalink(9); ?>">お問い合わせフォーム</a></div>
<?php
endif;
?>
<?php
// $argsFooter = array(
// 	'menu' => 'footer-contact',
// 	'menu_class' => 'contact__btn btn-wrap',
// 	'add_a_class' => 'text-white',
// 	'container' => 'div',
// );
// wp_nav_menu($argsFooter);
?>
                    </div>
                </div>
            </div>
        </section>
        <p class="copyright">
            <small>Copyright &copy; 2023 Kobaco Co. Ltd.</small>
        </p>
        <div class="to-top">
            <a href="#top">PAGE TOP</a>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>
