<?php
if(!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--
  .-')                            _   .-')      ('-.     _  .-')   .-') _    
 ( OO ).                         ( '.( OO )_   ( OO ).-.( \( -O ) (  OO) )   
(_)---\_)  ,----.      ,--.   ,--.,--.   ,--.) / . --. / ,------. /     '._  
/    _ |  '  .-./-')    \  `.'  / |   `.'   |  | \-.  \  |   /`. '|'--...__) 
\  :` `.  |  |_( O- ) .-')     /  |         |.-'-'  |  | |  /  | |'--.  .--' 
 '..`''.) |  | .--, \(OO  \   /   |  |'.'|  | \| |_.'  | |  |_.' |   |  |    
.-._)   \(|  | '. (_/ |   /  /\_  |  |   |  |  |  .-.  | |  .  '.'   |  |    
\       / |  '--'  |  `-./  /.__) |  |   |  |  |  | |  | |  |\  \    |  |    
 `-----'   `------'     `--'      `--'   `--'  `--' `--' `--' '--'   `--'    

sgymart theme: https://github.com/sgymA/sgymart
-->
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H0KJWJMYSQ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-H0KJWJMYSQ');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/images/favicon.ico" sizes="any">
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/images/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri()?>/images/favicon_180.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri()?>/manifest.webmanifest">
    <meta name="keywords" content="sgym">
<?php wp_head(); ?>
    <script>
        (function(d) {
            var config = {
                kitId: 'hfh6ffp',
                scriptTimeout: 3000,
                async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
    nav {
        margin-top: 32px;
    }
    </style>
    <?php endif; ?>
</head>
<?php
    global $template;
    $temp = pathinfo($template);     
?>
<body class="<?php echo get_post_type( $post ); ?> <?php echo basename($temp['filename']); ?>">
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top header__navbar header__navbar__bg header__navbar__bg--<?php echo get_post_type( $post ); ?> header__navbar__bg--<?php echo basename($temp['filename']); ?>">
        <div class="container">
            <a class="navbar-brand p-0 me-4" href="/">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo_32.png" alt=""> sgymart -->
                #sgymart
            </a>
            <button class="navbar-toggler header__navbar__toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>    
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?php if(basename($temp['filename']) == "about"){ ?>active<?php } ?>" href="/about">About</a>                
                    <a class="nav-link <?php if(get_post_type($post) == 'works'){ ?>active<?php } ?>" href="/works">Works</a>
                    <a class="nav-link <?php if(get_post_type($post) == 'live'){ ?>active<?php } ?>" href="/live">Live</a>
                    <div class="d-flex d-lg-none" href="">
                        <a class="nav-link" target="_blank" rel="noopener noreferrer" href="https://youtube.com/@sgym" ><img class="" src="<?php echo get_template_directory_uri(); ?>/images/icon_youtube.png" width="18" ></a>
                        <a class="nav-link ms-3" target="_blank" rel="noopener noreferrer" href="https://twitter.com/sgym_V" ><img class="" src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" width="18" ></a>
                        <a class="nav-link ms-3" target="_blank" rel="noopener noreferrer" href="https://twitter.com/sgym_A" ><img class="" src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" width="18" ></a>
                    </div>
                    <!-- <a class="nav-link <?php if(get_post_type($post) == 'material'){ ?>active<?php } ?>" href="/material">Material</a> -->
                    <!-- <a class="nav-link <?php if(get_post_type($post) == 'blog'){ ?>active<?php } ?>" href="/blog">Blog</a> -->
                    <!-- <a class="nav-link <?php if(get_post_type($post) == 'prototype'){ ?>active<?php } ?>" href="/prototype">Prototype</a> -->
                    <!-- <a class="nav-link <?php if(get_post_type($post) == 'note'){ ?>active<?php } ?>" href="/note">Note</a> -->
                    <!-- <a class="nav-link <?php if(get_post_type($post) == 'dict'){ ?>active<?php } ?>" href="/dict">Dict</a> -->
                    <!-- <a class="nav-link <?php if(basename($temp['filename']) == "contact"){ ?>active<?php } ?>" href="/contact">Contact</a> -->
                </div>
                <div class="navbar-nav">
                    <!-- commingsoon
                    <a class="nav-link header__navbar__sns" target="_blank" rel="noopener noreferrer" href="https://opensea.io/sgym" style="padding-top: 0.4rem;">OpenSea <img src="<?php echo get_template_directory_uri(); ?>/images/icon_opensea.svg" width="17"></a> -->
                    <a class="nav-link header__navbar__sns d-lg-block d-none" target="_blank" rel="noopener noreferrer" href="https://youtube.com/@sgym" >Youtube <img class="header__navbar__sns__image" src="<?php echo get_template_directory_uri(); ?>/images/icon_youtube.png" width="18" ></a>
                    <a class="nav-link header__navbar__sns d-lg-block d-none" target="_blank" rel="noopener noreferrer" href="https://twitter.com/sgym_V" >Twitter(Vtuber)<img class="header__navbar__sns__image" src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" width="18" ></a>
                    <a class="nav-link header__navbar__sns d-lg-block d-none" target="_blank" rel="noopener noreferrer" href="https://twitter.com/sgym_A" >Twitter(Composer) <img class="header__navbar__sns__image" src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" width="18" ></a>
                    <!-- <a class="nav-link header__navbar__sns" target="_blank" rel="noopener noreferrer" href="https://www.pixiv.net/users/74290962" style="padding-top: 0.4rem;">pixiv <img class="header__navbar__sns__image" src="<?php echo get_template_directory_uri(); ?>/images/icon_pixiv.png" width="16" ></a> -->
                    <!-- <a class="nav-link header__navbar__sns" target="_blank" rel="noopener noreferrer" href="https://www.nicovideo.jp/my/mylist/73364798" style="padding-top: 0.35rem;">niconico <img class="header__navbar__sns__image" src="<?php echo get_template_directory_uri(); ?>/images/icon_niconico.png" width="16"></a> -->
                </div>

            </div>
        </div>
    </nav>
</header>