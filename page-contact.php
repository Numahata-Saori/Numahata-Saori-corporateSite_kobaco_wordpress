<?php get_header(); ?>

<main class="main" id="contact-form">
		<div class="common-parts ly-cont">
			<div class="breadcrumb">
				<ul class="breadcrumb__list">
<?php
if( function_exists( 'bcn_display' ) ) {
	bcn_display();
}
?>
				</ul>
			</div>
			<div class="top-cont">
				<div class="top-cont__title-wrap">
					<div class="top-cont__title-en">CONTACT FORM</div>
					<h1 class="top-cont__title-ja">お問い合わせフォーム</h1>
				</div>
			</div>
		</div>

		<div class="top-illust">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top-contact-item.png" alt="MAIL BOX">
		</div>

		<div class="form__headline">
			<div class="ly-cont">
				<p class="form__headline-desc">サービスについてのご質問・お見積りの<br class="noneTab">ご相談など、お気軽にお問い合わせください。</p>
			</div>
		</div>

		<div class="form__main">
			<div class="ly-cont">
				<div class="form__wrap">
					<p class="form__desc">※のついた項目は入力必須となります</p>
					<form class="form__manu-wrap" action="" method="post">
						<div class="form__menu">
							<div class="form__title">御社名<span class="must">*</span></div>
							<div class="form__content">
								<input class="form__input" id="form__company" type="text" name="company" placeholder="コバコ株式会社" required>
							</div>
						</div>
						<div class="form__menu">
							<div class="form__title">お名前<span class="must">*</span></div>
							<div class="form__content">
								<input class="form__input" id="form__userName" type="text" name="userName" placeholder="コバコ太郎" required>
							</div>
						</div>
						<div class="form__menu">
							<div class="form__title noneRequired">ふりがな<span class="must">*</span></div>
							<div class="form__content">
								<input class="form__input" id="form__userkana" type="text" name="userkana" placeholder="こばこたろう">
							</div>
						</div>
						<div class="form__menu">
							<div class="form__title">お電話番号<span class="must">*</span></div>
							<div class="form__content">
								<input class="form__input" id="form__userPhone" type="text" name="userPhone" placeholder="0123-45-6789" required>
							</div>
						</div>
						<div class="form__menu">
							<div class="form__title">メールアドレス<span class="must">*</span></div>
							<div class="form__content">
								<input class="form__input" id="form__userMail" type="text" name="userMail" placeholder="contact@kobaco.co.jp" required>
							</div>
						</div>
						<div class="form__menu">
							<div class="form__title">お問い合わせ内容<span class="must">*</span></div>
							<div class="form__content">
								<textarea class="form__input" id="form_userMessage" name="userMessage" rows="10" placeholder="ご用件を入力してください"></textarea>
							</div>
						</div>
						<input class="form__submitBtn" id="" type="submit" name=""  value="送信内容を確認する">
					</form>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
