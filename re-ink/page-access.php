<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-inner">
            <div class="fi">
                <span class="page-hero-en">access</span>
                <h1 class="page-hero-title">Access</h1>
                <span class="page-hero-ja">【 アクセス 】</span>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>

<!-- MAP & INFO -->
<section class="map-sec">
    <div class="container">
        <div class="map-inner">
            <div class="map-wrap fi">
                <iframe
                    src="https://www.google.com/maps?q=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E5%8D%97%E9%9D%92%E5%B1%B16-2-10%20TI%E3%83%93%E3%83%AB%202F&output=embed"
                    allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Re'ink アクセスマップ">
                </iframe>
                <p class="map-caption">
                    <a href="https://maps.google.com/?q=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E5%8D%97%E9%9D%92%E5%B1%B16-2-10%20TI%E3%83%93%E3%83%AB%202F"
                        target="_blank" rel="noopener">Google マップで開く →</a>
                </p>
            </div>
            <div class="studio-info fi fi-d1">
                <div class="info-group">
                    <p class="info-label">Studio Name</p>
                    <p class="info-value">INKLY TATTOO STUDIO</p>
                </div>
                <div class="info-group">
                    <p class="info-label">Address</p>
                    <p class="info-value">〒107-0062 <br>東京都港区南青山6-2-10<br>TIビル 2F</p>
                </div>
                <div class="info-group">
                    <p class="info-label">Hours</p>
                    <p class="info-value">11:00 – 19:00（不定休）</p>
                </div>
                <div class="info-group">
                    <p class="info-label">Reservation</p>
                    <p class="info-value">完全予約制。Webまたは公式LINEよりご予約ください。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TRAIN ACCESS -->
<section class="train-sec">
    <div class="container">
        <div class="sec-head fi">
            <span class="sec-en">by train</span>
            <h2 class="sec-title">【 電車でのアクセス 】</h2>
            <div class="sec-line"></div>
        </div>
        <div class="train-grid train-grid-single">
            <div class="train-card fi fi-d1">
                <div class="train-icon">
                    <span class="train-icon-inner">M</span>
                </div>
                <div class="train-body">
                    <p class="train-line">東京メトロ 銀座線 / 千代田線 / 半蔵門線</p>
                    <p class="train-station">表参道駅</p>
                    <p class="train-time">7<span>min walk</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/cta-strip' ); ?>

<?php get_footer(); ?>
