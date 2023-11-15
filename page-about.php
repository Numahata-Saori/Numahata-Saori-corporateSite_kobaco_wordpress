<?php get_header(); ?>

	<main class="main" id="company">
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
					<div class="top-cont__title-en">COMPANY</div>
					<h1 class="top-cont__title-ja">会社概要</h1>
				</div>
			</div>
		</div>

		<div class="top-illust"></div>

		<div class="idea">
			<div class="idea__main ly-cont">
				<div class="idea__wrap">
					<div class="child-headline__wrap">
						<h3 class="child-headline__en">IDEA</h3>
						<p class="child-headline__ja">企業理念</p>
					</div>

					<div class="idea__main-content">
						<p class="idea__main-desc">多角的な視点とアイデアを駆使し、<br>
						価値あるサービスを生み出し、<br>
						サポート企業のオンリーワンを目指します。<br>
						清掃を通じて人々の暮らしの充実に貢献し、<br>
						社会との調和ある発展を目指します。</p>
					</div>
				</div>
			</div>

			<div class="idea__secondary">
				<div class="idea__wrap ly-cont">
					<div class="idea__secondary-content">
						<div class="idea__secondary-headline">
							<h4 class="child-headline__en">ACTIONS</h4>
							<P class="child-headline__ja">行動基準</P>
						</div>

						<ul class="idea__secondary-list">
							<li class="idea__secondary-item"><span>&#9312;</span>独自性・機能性・将来性に優れたサービスを常に提案する</li>
							<li class="idea__secondary-item"><span>&#9313;</span>当たり前のことは、当たり前以上にする</li>
							<li class="idea__secondary-item"><span>&#9314;</span>仲間・家族を、大切にする</li>
							<li class="idea__secondary-item"><span>&#9315;</span>連動する新規事業は、どんどん挑戦する</li>
							<li class="idea__secondary-item"><span>&#9316;</span>常に挑戦して、成長し続ける</li>
							<li class="idea__secondary-item"><span>&#9317;</span>カッコよく誠実であること</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="information">
			<div class="information__wrap ly-cont">
				<div class="child-headline__wrap">
					<h3 class="child-headline__en">INFORMATION</h3>
					<p class="child-headline__ja">企業情報</p>
				</div>
				<div class="information__main-content">
					<dl class="information__main-list">
						<dt class="information__main-title">商号</dt>
						<dd class="information__main-item">コバコ株式会社</dd>
					</dl>
					<dl class="information__main-list">
						<dt class="information__main-title">設立</dt>
						<dd class="information__main-item">2023年〇月〇日</dd>
					</dl>
					<dl class="information__main-list">
						<dt class="information__main-title">資本金</dt>
						<dd class="information__main-item">〇〇万円</dd>
					</dl>
					<dl class="information__main-list">
						<dt class="information__main-title">本社</dt>
						<dd class="information__main-item">
							<div>〒547-0034<br>大阪府大阪市平野区背戸口4-6-27<br class="noneTab">
						<a class="map-link" href="https://maps.app.goo.gl/3HteRLJcawou7Xut8">Google map<img class="map-link__icon" src="<?php echo get_template_directory_uri(); ?>/img/map-icon.svg" alt="Google map 大阪府大阪市平野区背戸口4-6-27"></a>
							</div>
						</dd>
					</dl>
					<dl class="information__main-list">
						<dt class="information__main-title">代表者</dt>
						<dd class="information__main-item">代表取締役　小林 秀行</dd>
					</dl>
					<dl class="information__main-list">
						<dt class="information__main-title">営業種目</dt>
						<dd class="information__main-item">
							施設管理委託・日常清掃管理<br>
							各種高所作業<br>
							フロアー・ガラスクリーニング<br>
							外壁洗浄及びコーティング<br>
							空調機分解洗浄及びメンテナンス<br>
							厨房排気フード・ファン・ダクト等特殊清掃<br>
							飲料用水槽洗浄・給排水管洗浄及び保守管理<br>
							衛生害虫防除・鳥害対策・オゾン空間除菌
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
