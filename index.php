<?php get_header(); ?>

<div class="" id="loading"></div>

    <main class="main">
        <div class="fv">
            <div class="fv__wrap">
                <div class="fv__main-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top_city-img.png" alt="">
                </div>
            </div>
            <a class="fv__scroll" href="#next-section">
                <span></span>
                <div class="arrow"></div>
            </a>
        </div>

        <div class="main-cont">
            <div class="to-next" id="next-section"></div>

            <section class="about" id="about">
                <div class="about__wrap ly-cont">
                    <div class="about__headline">
                        <h2 class="headline text-white">
                            ABOUT
                            <span class="headline-sub">会社概要</span>
                        </h2>
                        <div class="about__headline__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/kobaco-logo03.webp" alt="">
                        </div>
                    </div>
                    <div class="about__content">
                        <div class="about__content__wrap">
                            <h3 class="about__content__headline">
                                ご希望に合わせてカスタマイズ。<br>
                                小規模なビルメンテナンス事業者<br class="noneTab">ならではの柔軟性、<br>
                                大手企業にも負けない対応力。
                            </h3>
                            <p class="about__content__desc">私たち KOBACO は、お客様のご要望、建物の特徴や環境、汚れの状況など、あらゆる要素を踏まえたうえで、的確な清掃方法・清掃サービスをご提供しております。</p>
                            <p class="about__content__desc">高所作業をともなう窓ガラスや外壁の清掃、空調・フィルター、水まわりといった場所ごとの清掃はもちろん、オフィスビルや病院、工場、大規模商業施設を一貫清掃することも可能です。</p>
                            <p class="about__content__desc">各建物に適した清掃方法や清掃頻度をご提案しながら、きめ細やかな清掃メンテナンスサービスを提供いたします。</p>
                            <div class="btn-wrap"><a class="text-white" href="<?php echo get_permalink(5); ?>">会社概要</a></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="building" id="building">
                <div class="building__wrap">
                    <div class="building__main ly-cont">
                        <div class="building__main__headline">
                            <h2 class="headline text-white">
                                WHAT'S
                                <span>BUILDING</span>
                                <span>MAINTENANCE</span>
                                <span class="headline-sub">ビルメンテナンスとは</span>
                            </h2>
                        </div>
                        <div class="building__main__content">
                            <p class="building__main__content__desc text-white">
                                クオリティを維持したまま、清潔な環境を保つ清掃、快適な環境を保つ点検や管理作業を行うのは非常に難しい作業です。<br><br>
                                不定期になってしまったり、毎回の完成度に差があってしまったり、汚れに対して誤った処置をしてしまうこともあるかもしれません。<br><br>
                                「ビルメンテナンス」とは、あらゆる建物の管理・維持のこと。<br class="nonePc">プロのノウハウで、適材適所の作業を効率的に行い、清潔、快適に保った空間を維持・管理する。それが、私たちジーホワイトが考えるビルメンテナスです。
                            </p>
                        </div>
                    </div>
                    <div class="building__secondary ly-cont">
                        <div class="building__secondary__wrap">
                            <div class="building__secondary__general">
                                <div class="building__secondary__title">一般的な清掃</div>
                                <div class="building__secondary__img"></div>
                                <ul class="building__secondary__list">
                                    <li class="building__secondary__item item-icon">不定期</li>
                                    <li class="building__secondary__item item-icon">ばらつき</li>
                                    <li class="building__secondary__item item-icon">クオリティの差</li>
                                    <li class="building__secondary__item item-icon">誤った対処</li>
                                </ul>
                            </div>
                            <div class="building__secondary__pro">
                                <div class="building__secondary__title">プロによる清掃</div>
                                <div class="building__secondary__img"></div>
                                <ul class="building__secondary__list">
                                    <li class="building__secondary__item item-icon">定期的</li>
                                    <li class="building__secondary__item item-icon">安定</li>
                                    <li class="building__secondary__item item-icon">常に高いクオリティ</li>
                                    <li class="building__secondary__item item-icon">最適な処置</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="business">
                    <div class="business__wrap">
                        <div class="business__content ly-cont">
                            <h3 class="business__headline">清掃場所</h3>
                            <p class="business__desc">オフィスビルをはじめ、商業施設や複合ビル、専門機器のある工場・医療機関・福祉施設、寺社・仏閣から大規模テーマパークまでお任せください。</p>
                            <div class="business__first-cont">
                                <div class="business__first-cont__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top-business01.webp" alt="">
                                </div>
                                <ol class="business__first-cont__list">
                                    <li class="business__first-cont__item">
                                        <img class="business__building-img" src="<?php echo get_template_directory_uri(); ?>/img/building01.svg" alt="">
                                        <p class="business__title">オフィスビル</p>
                                    </li>
                                    <li class="business__first-cont__item">
                                        <img class="business__building-img" src="<?php echo get_template_directory_uri(); ?>/img/building02.svg" alt="">
                                        <p class="business__title">医療機関・<br class="nonePc">福祉施設</p>
                                    </li>
                                    <li class="business__first-cont__item">
                                        <img class="business__building-img" src="<?php echo get_template_directory_uri(); ?>/img/building03.svg" alt="">
                                        <p class="business__title">工場</p>
                                    </li>
                                    <li class="business__first-cont__item">
                                        <img class="business__building-img" src="<?php echo get_template_directory_uri(); ?>/img/building04.svg" alt="">
                                        <p class="business__title">公共施設</p>
                                    </li>
                                    <li class="business__first-cont__item">
                                        <img class="business__building-img" src="<?php echo get_template_directory_uri(); ?>/img/building05.svg" alt="">
                                        <p class="business__title">マンション</p>
                                    </li>
                                    <li class="business__first-cont__item">
                                        <img class="business__building-img" src="<?php echo get_template_directory_uri(); ?>/img/building06.svg" alt="">
                                        <p class="business__title">寺社・仏閣</p>
                                    </li>
                                    <li class="business__first-cont__item">
                                        <img class="business__building-img" src="<?php echo get_template_directory_uri(); ?>/img/building07.svg" alt="">
                                        <p class="business__title">大型商業施設</p>
                                    </li>
                                    <li class="business__first-cont__item">
                                        <img class="business__building-img" src="<?php echo get_template_directory_uri(); ?>/img/building08.svg" alt="">
                                        <p class="business__title">娯楽施設</p>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="business__content ly-cont">
                            <h3 class="business__headline">清掃・管理サービス</h3>
                            <p class="business__desc">建物内部・外部の基本的な清掃サービスはもちろん、工場の滅菌・殺菌、天井高所の配管清掃など、建物ならでは特殊なサービスも承っております。</p>
                            <div class="business__second-cont">
                                <ol class="business__second-cont__list">
                                    <li class="business__second-cont__item">
                                        <p class="business__title">建物内部清掃</p>
                                        <ul class="business__detail">
                                            <li class="business__detail__content">床面・内壁</li>
                                            <li class="business__detail__content">トイレ・洗面所</li>
                                            <li class="business__detail__content">天井・照明</li>
                                            <li class="business__detail__content">窓・ブラインド</li>
                                        </ul>
                                    </li>
                                    <li class="business__second-cont__item">
                                        <p class="business__title">衛生管理</p>
                                        <ul class="business__detail">
                                            <li class="business__detail__content">鳥害対策</li>
                                            <li class="business__detail__content">工場等の滅菌・殺菌</li>
                                            <li class="business__detail__content">害虫対策</li>
                                        </ul>
                                    </li>
                                    <li class="business__second-cont__item">
                                        <p class="business__title">建物外部清掃</p>
                                        <ul class="business__detail no-colums">
                                            <li class="business__detail__content">外装・窓ガラス・サッシ（高所）</li>
                                            <li class="business__detail__content">屋上・建物外回り（外観）</li>
                                        </ul>
                                    </li>
                                    <li class="business__second-cont__item">
                                        <p class="business__title">給排水設備管理</p>
                                        <ul class="business__detail no-colums">
                                            <li class="business__detail__content">貯水槽・浄化槽・排水溝清掃・水質検査</li>
                                            <li class="business__detail__content">給排水管清掃</li>
                                        </ul>
                                    </li>
                                    <li class="business__second-cont__item">
                                        <p class="business__title">昇降機清掃・整備</p>
                                        <ul class="business__detail no-colums">
                                            <li class="business__detail__content">エレベーター・エスカレーター</li>
                                            <li class="business__detail__content">階段用昇降機・立体駐車場</li>
                                        </ul>
                                    </li>
                                    <li class="business__second-cont__item">
                                        <p class="business__title">管理人業務</p>
                                        <ul class="business__detail">
                                            <li class="business__detail__content">検針</li>
                                            <li class="business__detail__content">常駐の管理人手配・設置</li>
                                            <li class="business__detail__content">テナント様への告知資料</li>
                                            <li class="business__detail__content">清掃不十分業務箇所の調査</li>
                                        </ul>
                                    </li>
                                    <li class="business__second-cont__item">
                                        <p class="business__title">空気環境管理</p>
                                        <ul class="business__detail no-colums">
                                            <li class="business__detail__content">空調用ダクト清掃・空調機洗浄</li>
                                            <li class="business__detail__content">空調機新設工事</li>
                                            <li class="business__detail__content">エアコン用清掃フィルター設備</li>
                                        </ul>
                                    </li>
                                    <li class="business__second-cont__item">
                                        <p class="business__title">簡易工事</p>
                                        <ul class="business__detail no-colums">
                                            <li class="business__detail__content">入退去時の現状回復工事</li>
                                            <li class="business__detail__content">外装塗装・防水加工、バリカー設置等外構工事</li>
                                            <li class="business__detail__content">ブロック解体・除去、アスファルト工事</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <section class="strength ly-cont" id="strength">
                <div class="strength__wrap">
                    <div class="strength__headline">
                        <h2 class="headline">
                            STRENGTH
                            <span class="headline-sub">KOBACO の強み</span>
                        </h2>
                    </div>
                    <div class="strength__content">
                        <div class="strength__card">
                            <div class="strength__card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength01.webp" alt="柔軟性">
                            </div>
                            <div class="strength__card-item">
                                <h3 class="strength__card-title">柔軟性</h3>
                                <p class="strength__card-desc">大阪から関西を中心に、小規模から大規模まで様々な施設に対応しています。ガラス清掃、空調設備や給排水設備の清掃など、お客様に必要なサービスを最適な方法でご提案いたします。</p>
                            </div>
                        </div>
                        <div class="strength__card">
                            <div class="strength__card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength02.webp" alt="きめ細やかな作業">
                            </div>
                            <div class="strength__card-item">
                                <h3 class="strength__card-title">きめ細やかな作業</h3>
                                <p class="strength__card-desc">清掃を始める前の打ち合わせから、お客様の目線に立ち丁寧なヒアリングを徹底します。専門知識や経験が豊富なスタッフがあらゆる清掃業務に対応します。</p>
                            </div>
                        </div>
                        <div class="strength__card">
                            <div class="strength__card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-strength03.webp" alt="高い専門性">
                            </div>
                            <div class="strength__card-item">
                                <h3 class="strength__card-title">高い専門性</h3>
                                <p class="strength__card-desc">得意とする高所作業を始め、資格を持ったスタッフが知識と経験で幅広く対応いたします。高所作業は、定期的に安全講習を行い、技術と意識の向上を怠りません。</p>
                            </div>
                        </div>
                    </div>

                    <div class="strength__btn btn-wrap"><a class="text-white" href="<?php echo get_permalink(7); ?>">KOBACO の強み</a></div>

                </div>
            </section>

            <section class="news" id="news">
                <div class="news__wrap">
                    <div class="news__headline">
                        <h2 class="headline">
                            NEWS
                            <span class="headline-sub">お知らせ</span>
                        </h2>
                    </div>
                    <div class="news__content">
                        <ul class="news__list">
<?php
// データの取得
// $cat_posts = get_posts(array(
//     'post_type' => 'post', // 投稿タイプ
//     'posts_per_page' => 3, // 表示件数
//     'orderby' => 'date', // 表示順の基準
//     'order' => 'DESC' // 昇順・降順
// ));
// if($cat_posts):
//     foreach($cat_posts as $post): // ループ処理
//         setup_postdata($post);  // 投稿データをセット
?>
<?php
$argsNews = array(
	'post_type' => 'news',
	'posts_per_page' => 3,
	'orderby' => 'date',
	'order' => 'desc'
);
$the_query = new WP_Query($argsNews);

if( $the_query->have_posts() ) :
	while( $the_query->have_posts() ) :
		$the_query->the_post();
?>
							<li class="news__item">
                                <a class="news__item-link" href="<?php the_permalink(); ?>">
                                    <!-- <?php echo get_the_date(); ?> -->
                                    <time class="news__item-link__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    <p class="news__item-link__info"><?php the_title(); ?></p>
                                </a>
                            </li>
                            <!-- <li class="news__item">
                                <a class="news__item-link" href="#">
                                    <time class="news__item-link__time" datetime="2023.10.01">2023.10.01</time>
                                    <p class="news__item-link__info">〇〇〇についてのご案内</p>
                                </a>
                            </li>
                            <li class="news__item">
                                <a class="news__item-link" href="#">
                                    <time class="news__item-link__time" datetime="2023.10.01">2023.10.01</time>
                                    <p class="news__item-link__info">年末年始お休みのご案内</p>
                                </a>
                            </li>
                            <li class="news__item">
                                <a class="news__item-link" href="#">
                                    <time class="news__item-link__time" datetime="2023.10.01">2023.10.01</time>
                                    <p class="news__item-link__info">HP を開設いたしました。</p>
                                </a>
                            </li> -->
<?php
	// endforeach;
	endwhile;
	wp_reset_postdata();
endif;
// wp_reset_postdata();
?>

							<!--
    endforeach;
endif;
wp_reset_postdata(); //投稿データをリセット
-->
                        </ul>
<!--
endif;
-->
                        <div class="news__btn btn-wrap"><a class="text-white" href="<?php echo home_url(); ?>/news">お知らせ一覧</a></div>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php get_footer(); ?>
