<?php get_header(); ?>

<main class="main" id="strength-child">
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
					<div class="top-cont__title-en">STRENGTH</div>
					<h1 class="top-cont__title-ja">コバコの強み</h1>
				</div>
			</div>
		</div>

		<div class="top-illust"></div>

		<div class="strength-child ly-cont">
			<div class="strength__content">
				<div class="strength__card">
					<div class="strength__card-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/top-strength01.webp" alt="柔軟性">
					</div>
					<div class="strength__card-item">
						<h2 class="strength__card-title">柔軟性</h2>
						<p class="strength__card-desc">大阪から関西を中心に、小規模から大規模まで様々な施設に対応しています。ガラス清掃、空調設備や給排水設備の清掃など、お客様に必要なサービスを最適な方法でご提案いたします。</p>
					</div>
				</div>
				<div class="strength__card">
					<div class="strength__card-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/top-strength02.webp" alt="きめ細やかな作業">
					</div>
					<div class="strength__card-item">
						<h2 class="strength__card-title">きめ細やかな作業</h2>
						<p class="strength__card-desc">清掃を始める前の打ち合わせから、お客様の目線に立ち丁寧なヒアリングを徹底します。専門知識や経験が豊富なスタッフがあらゆる清掃業務に対応します。</p>
					</div>
				</div>
				<div class="strength__card">
					<div class="strength__card-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/top-strength03.webp" alt="高い専門性">
					</div>
					<div class="strength__card-item">
						<h2 class="strength__card-title">高い専門性</h2>
						<p class="strength__card-desc">得意とする高所作業を始め、資格を持ったスタッフが知識と経験で幅広く対応いたします。高所作業は、定期的に安全講習を行い、技術と意識の向上を怠りません。</p>
					</div>
				</div>
			</div>
		</div>

		<div class="strength-detail">
			<div class="strength-detail__wrap ly-cont">
				<div class="strength-detail__container">
					<img class="strength-detail__container-img" src="<?php echo get_template_directory_uri(); ?>/img/strength-child01.webp" alt="小規模から大規模まで範囲の大小は問いません">
					<div class="strength-detail__container-text">
						<h3 class="strength-detail__headline">小規模から大規模まで<br>範囲の大小は問いません</h3>
						<p class="strength-detail__desc">アパートの一室からオフィスビル丸々一棟、大規模テーマパークまで、各建物の特徴や環境を踏まえた的確な清掃方法・サービスをご提供しています。</p>
					</div>
				</div>
				<div class="strength-detail__container">
					<img class="strength-detail__container-img" src="<?php echo get_template_directory_uri(); ?>/img/strength-child02.webp" alt="最適な解決策のご提案のために">
					<div class="strength-detail__container-text">
						<h3 class="strength-detail__headline">最適な解決策のご提案のために</h3>
						<p class="strength-detail__desc">多種多様なご要望にもお答えする対応力が自慢のひとつです。「弊社では対応外です」とお断りするなんてことはございません。過去には、対応業者が少なく「普段清掃をお願いしている業者に断られてしまった」という案件で、弊社スタッフが新たに資格を取得し提供可能となったサービスもございます。常にお客様のご要望に寄り添い、柔軟に対応いたします。</p>
					</div>
				</div>
				<div class="strength-detail__container">
					<div class="strength-detail__container-text">
						<h3 class="strength-detail__headline">関連業者との連携で<br class="noneTab">お悩み解決までサポート</h3>
						<p class="strength-detail__desc">ご依頼に対して清掃外の対応が必要な場合、その先をご提案し、完了までサポートいたします。<br>
						「壁紙をきれいにしたい」というお悩みには、清掃だけでは不十分と判断し、クロスの張り替えをご提案しました。施工業者を手配し、完了まで責任を持って管理いたしました。</p>
					</div>
				</div>
			</div>
		</div>
	</main>


<?php get_footer(); ?>
