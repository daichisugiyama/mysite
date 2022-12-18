<?php
if(!defined('ABSPATH')) exit;
get_header();
?>
<main class="content">
    <section class="top__mainvisual__position top__mainvisual__bg d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row text-center">
                <h2 class="top__mainvisual__heading">sgym.art -> Thank you for comming! -> sgym -> Composer, Game creator, Web enginner</h2>
                <!-- <p class="top__mainvisual__text">sgym Creative Laboratory</p> -->
                <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
            </div>
        </div>
    </section>
    <section class="top__about-site__position top__about-site__bg d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row text-center">
                <h2 class="top__about-site__heading">About this site</h2>
                <p class="top__about-site__text">
                    作曲家/同人ゲーム制作者のポートフォリオサイトです。<br>
                    あなたに私を認知してもらいたいと思い作りました。<br>
                    どうぞあいまに御紅茶を飲みながらサイト内を回遊ください。
                </p>
            </div>
        </div>
    </section>
    <section class="top__about-me__position top__about-me__bg d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col col-12">
                    <h2 class="top__about-me__heading">About me</h2>
                </div>
                <div class="col col-12">
                    <ul class="top__about-me__btn-group">
                        <li class="top__about-me__btn-group__btn">仕事</li>
                        <li class="top__about-me__btn-group__btn">趣味</li>
                    </ul>
                </div>
                <div class="col col-2">
                    <img src="top__about-me__image">
                </div>
                <div class="col col-4">
                    <p class="top__about-me__text">
                        静岡県在住のWebエンジニア。高校にて商業簿記、大学にて情報デザインを学んだ後、
                        2016年にシステムエンジニアとして就職。3年ほど勤務し、
                        2021年にWebエンジニアとして再就職。サーバーサイドを中心に、Webサービスの開発に従事。
                        commingsoon。
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="top__works__position top__works__bg d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row text-center">
                <h2 class="top__works__heading">Works</h2>
                <p class="top__works__lead">制作物をご紹介します。</p>
                <ul class="top__works__btn-group">
                    <li class="top__works__btn-group__btn">全て</li>
                    <li class="top__works__btn-group__btn">ゲーム</li>
                    <li class="top__works__btn-group__btn">曲</li>
                </ul>
            </div>
            <div class="row text-center">
                <ul class="top__works__summary">
                    <li class="top__works__summary__unit">
                        <img class="top__works__summary__unit__thumbnail" src="" alt="">
                        <p class="top__works__summary__unit__title">ゴーストリスタート</p>
                    </li>
                    <li class="top__works__summary__unit">
                        <img class="top__works__summary__unit__thumbnail" src="" alt="">
                        <p class="top__works__summary__unit__title">Rabbit Forever</p>
                    </li>
                    <li class="top__works__summary__unit">
                        <img class="top__works__summary__unit__thumbnail" src="" alt="">
                        <p class="top__works__summary__unit__title">むぎとどくむぎ</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="top__works-modal__position top__works-modal__bg d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row text-center">
                <h2 class="top__works-modal__heading">Works Modal</h2>
                <h3 class="top__works-modal__heading">ゴーストリスタート</h2>
                <p class="top__works-modal__text">曲です初音ミクを使用しました。</p>
                <h3 class="top__works-modal__heading">使用技術</h2>
                <p class="top__works-modal__text"></p>
            </div>
        </div>
    </section>
    <section class="top__skill-set__position top__skill-set__bg d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row text-center">
                <h2 class="top__skill-set__heading">Skill set</h2>
                <p class="top__skill-set__text">ゲームのように視覚的にスキルをまとめました。
                </p>
            </div>
        </div>
    </section>
    <section class="top__profile__position top__profile__bg d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row text-center">
                <h2 class="top__profile__heading">Profile</h2>
                <p class="top__profile__lead">私の生きた歴史を振り返りましょう</p>
            </div>
            <div class="row top__profile__history">
                <h4 class="top__profile__history__year">1994～</h4>
                <img class="top__profile__history__image" src="">
                <p class="top__profile__history__text">静岡県清水市にて産声をあげる</p>

                <h4 class="top__profile__history__year">1999～</h4>
                <h4 class="top__profile__history__sub"></h4>
                <img class="top__profile__history__image" src="">
                <p class="top__profile__history__text">ピアノを習い始めて音楽の楽しさを知る</p>

                <h4 class="top__profile__history__year">2013～</h4>
                <p class="top__profile__history__text">情報学としてHTML,CSS,JS,C++プログラミングを学ぶ</p>
                <p class="top__profile__history__text">ゲームクリエイトサークルでゲーム音楽を作る</p>

                <h4 class="top__profile__history__year">2016～</h4>
                <p class="top__profile__history__text">上京してシステムエンジニアとして就職。業務アプリケーションの開発に従事</p>

                <h4 class="top__profile__history__year">2019～</h4>
                <p class="top__profile__history__text">地元の静岡県に戻る</p>
                <p class="top__profile__history__text">Webサイト受託制作の副業を開始</p>
                <p class="top__profile__history__text">オリジナルゲームをリリース</p>

                <h4 class="top__profile__history__year">2021～</h4>
                <p class="top__profile__history__text">Web業界に就職。Webサービスのバックエンド開発に携わる</p>

                <h4 class="top__profile__history__year">2022～</h4>
                <p class="top__profile__history__text">作曲家の活動を開始。Youtubeにボカロオリジナル曲を投稿</p>

                <h4 class="top__profile__history__year">2023～XX</h4>
                <p class="top__profile__history__text">commingsoon</p>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>