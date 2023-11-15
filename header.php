<!DOCTYPE html>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?></title>

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <script>
    (function(d) {
        var config = {
        kitId: 'czo7hip',
        scriptTimeout: 3000,
        async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/style.js"></script>

<?php wp_head(); ?>
</head>

<body>
    <header class="header" id="header">
        <div class="header__wrap ly-cont">
            <a class="header__logo" href="<?php echo home_url(); ?>">
                <h1 class="header__logo-item"><img src="<?php echo get_template_directory_uri(); ?>/img/kobaco-logo01.webp" alt="kobaco-logo"></h1>
            </a>
            <div class="header__menu-btn is-active">
                <div class="header__menu-btn__trigger">
                    <span></span>
                    <span>MENU</span>
                    <span></span>
                </div>
            </div>
            <nav class="header__menu" id="g-nav">
                <!-- <ul class="header__menu-list">
                    <li class="header__menu-item">
                        <a class="header__menu-item__link" href="<?php echo home_url(); ?>">HOME</a>
                    </li>
                    <li class="header__menu-item">
                        <a class="header__menu-item__link" href="company.html">会社概要</a>
                    </li>
                    <li class="header__menu-item">
                        <a class="header__menu-item__link" href="strength.html">KOBACOの強み</a>
                    </li>

                    <li class="header__menu-item">
                        <a class="header__menu-item__link" href="contact.html">お問い合わせ</a>
                    </li>
                </ul> -->
<?php
$argsMenu = array(
	'menu' => 'g-nav',
	'menu_class' => 'header__menu-list',
	'add_li_class' => 'header__menu-item',
	'add_a_class' => 'header__menu-item__link',
	'container' => false,
);
wp_nav_menu($argsMenu);
?>
            </nav>
        </div>
    </header>
