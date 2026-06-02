<?php get_header(); ?>

<!-- ======= HERO ======= -->
<section id="hero" class="top-hero">
    <!-- 背景動画 -->
    <div class="top-hero-bg">
        <video class="top-hero-bg-video" autoplay muted loop playsinline preload="metadata" aria-label="Re’ink 表参道">
            <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fv/fv-bg.mp4"
                type="video/mp4">
        </video>
    </div>
    <!-- スクロールヒント -->
    <div class="top-hero-scroll">
        <span>Scroll</span>
        <div class="top-hero-scroll-bar"></div>
    </div>

    <!-- 下部アクションバー -->
    <div class="top-hero-bar">
        <a target="_blank" rel="noopener noreferrer" href="https://reink.stores.jp/reserve/omotesando/2481805"
            class="top-hero-bar-btn">
            <svg viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Web予約
        </a>
        <a href="https://lin.ee/8Btanj22" class="top-hero-bar-btn" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-line.png" alt="ラインアイコン">
            LINE問合せ
        </a>
    </div>
</section>

<!-- ======= MARQUEE ======= -->
<div class="top-marquee">
    <div class="top-marquee-track">
        <div class="top-marquee-item">
            Ephemeral Tattoo
            <span class="top-marquee-dot">✦</span>
            Mist Tattoo
            <span class="top-marquee-dot">✦</span>
            Omotesando
            <span class="top-marquee-dot">✦</span>
            Re'ink Tattoo Studio
            <span class="top-marquee-dot">✦</span>
            Private Studio
            <span class="top-marquee-dot">✦</span>
            Fine Line
            <span class="top-marquee-dot">✦</span>
        </div>
        <div class="top-marquee-item" aria-hidden="true">
            Ephemeral Tattoo
            <span class="top-marquee-dot">✦</span>
            Mist Tattoo
            <span class="top-marquee-dot">✦</span>
            Omotesando
            <span class="top-marquee-dot">✦</span>
            Re'ink Tattoo Studio
            <span class="top-marquee-dot">✦</span>
            Private Studio
            <span class="top-marquee-dot">✦</span>
            Fine Line
            <span class="top-marquee-dot">✦</span>
        </div>
    </div>
</div>

<!-- ======= CONCEPT ======= -->
<section id="concept" class="top-concept">
    <!-- 背景画像 -->
    <div class="top-concept-bg">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg2.jpeg" alt="">
    </div>
    <div class="top-concept-bg-overlay"></div>

    <!-- コンテンツ -->
    <div class="top-concept-inner">
        <!-- 左: ラベル＋大見出し -->
        <div class="top-concept-left">
            <p class="top-concept-feature-tag fi">【 ABOUT 】</p>
            <h2 class="top-concept-title-large fi fi-d1">
                自由に生きる。
            </h2>
        </div>

        <!-- 右: 本文＋ボタン -->
        <div class="top-concept-right">
            <p class="top-concept-body-text lead fi">
                私たちは、タトゥーを<br>
                <strong>“怖いもの”ではなく、ファッションや自己表現の一つ</strong>として捉えています。
            </p>
            <p class="top-concept-body-text fi fi-d1">
                完全予約制で美容クリニックのような清潔感と、安心して過ごせる落ち着いた空間。
            </p>
            <p class="top-concept-body-text fi fi-d1">
                初めての方でも自然に通える、新しい時代のタトゥースタジオを目指しています。
            </p>
            <div class="top-concept-btns fi fi-d3">
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="top-concept-btn">
                    メニューを見る <span class="top-concept-btn-arrow">→</span>
                </a>
                <a target="_blank" rel="noopener noreferrer" 　　href="https://reink.stores.jp/reserve/omotesando/2481805"
                    class="top-concept-btn">
                    予約・相談する <span class="top-concept-btn-arrow">→</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ======= SERVICES ======= -->
<section id="services" class="top-services">
    <div class="container">
        <div class="top-services-layout">
            <!-- 左: 大見出し＋ラベル -->
            <div class="top-services-label-col fi">
                <p class="top-services-heading">MENU</p>
                <p class="top-services-label-text">【 メニュー 】</p>
            </div>

            <!-- 右: リスト -->
            <div class="top-services-list">
                <a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" class="top-service-row fi">
                    <div class="top-service-row-text">
                        <p class="top-service-row-title">Ephemeral Tattoo</p>
                        <p class="top-service-row-en">数年で薄くなる、新しいタトゥー。</p>
                    </div>
                    <span class="top-service-row-arrow">→</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" class="top-service-row fi fi-d1">
                    <div class="top-service-row-text">
                        <p class="top-service-row-title">Mist Tattoo</p>
                        <p class="top-service-row-en">2週間ほど楽しめる、肌にやさしいジャグアタトゥー。<br />イベントや初めての方にもおすすめです。</p>
                    </div>
                    <span class="top-service-row-arrow">→</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" class="top-service-row fi fi-d3">
                    <div class="top-service-row-text">
                        <p class="top-service-row-title">Original Tattoo</p>
                        <p class="top-service-row-en">世界に一つだけのオリジナルデザイン。</p>
                    </div>
                    <span class="top-service-row-arrow">→</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ======= ARTISTS ======= -->
<section id="artists" class="top-artists">
    <div class="container">
        <header class="sec-head fi">
            <span class="sec-en">artist</span>
            <h2 class="sec-title">【 アーティスト 】</h2>
            <div class="sec-line"></div>
        </header>
        <div class="top-artists-grid">
            <div class="top-artist-card fi">
                <div class="top-artist-photo"><img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ohina.png" alt="OHINA">
                </div>
                <div class="top-artist-profile">
                    <p class="top-artist-en">OHINA</p>
                    <p class="top-artist-ja">Fine line / One point / Korean style</p>
                    <p class="top-artist-style">Artist / Re’ink Omotesando</p>
                    <p class="top-artist-message">
                        “日常に自然に馴染むデザイン”を大切にしています。 </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= FLOW ======= -->
<section id="flow" class="top-flow">
    <div class="container">
        <header class="sec-head fi">
            <span class="sec-en">flow</span>
            <h2 class="sec-title">ご予約〜施術までの流れ</h2>
            <div class="sec-line"></div>
        </header>
        <div class="top-flow-grid">
            <div class="top-flow-card fi">
                <p class="top-flow-num">01</p>
                <p class="top-flow-title">予約サイトよりメニュー・日時を選択</p>
                <p class="top-flow-desc">ご希望の施術メニューと日時をお選びいただき、仮予約を行ってください。</p>
            </div>
            <div class="top-flow-card fi fi-d1">
                <p class="top-flow-num">02</p>
                <p class="top-flow-title">Re'ink公式LINEを追加</p>
                <p class="top-flow-desc">予約画面またはメールより、公式LINEをご追加ください。</p>
            </div>
            <div class="top-flow-card fi fi-d2">
                <p class="top-flow-num">03</p>
                <p class="top-flow-title">前金のお支払い（ご予約確定）</p>
                <p class="top-flow-desc">事前決済完了後、ご予約確定となります。<br>※未入金の場合、ご予約は確定となりませんのでご了承ください。</p>
            </div>
            <div class="top-flow-card fi fi-d3">
                <p class="top-flow-num">04</p>
                <p class="top-flow-title">LINEにてデザインカウンセリング</p>
                <p class="top-flow-desc">ご希望のデザイン・サイズ・施術部位などをヒアリングいたします。画像の共有やご相談も可能ですので、初めての方でも安心してご利用いただけます。</p>
            </div>
            <div class="top-flow-card fi fi-d4">
                <p class="top-flow-num">05</p>
                <p class="top-flow-title">ご来店・施術</p>
                <p class="top-flow-desc">カウンセリング内容をもとに、施術を行います。リラックスしてお過ごしいただける空間をご用意しております。</p>
            </div>
            <div class="top-flow-card fi fi-d1">
                <p class="top-flow-num">06</p>
                <p class="top-flow-title">アフターケアのご説明</p>
                <p class="top-flow-desc">施術後の経過やケア方法について詳しくご案内いたします。綺麗な状態を保つためのポイントもお伝えします。</p>
            </div>
        </div>
    </div>
</section>

<!-- ======= WORKS ======= -->
<section id="works" class="top-gallery">
    <div class="container">
        <div class="top-gallery-header fi">
            <div>
                <span class="sec-en">gallery</span>
                <h2 class="sec-title" style="margin-bottom:0;">【 作品ギャラリー 】</h2>
            </div>
            <a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>" class="top-gallery-more">View All Works →</a>
        </div>
        <div class="top-gallery-grid">
            <div class="top-gallery-item large fi"><img
                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/gallery/gallery1.jpeg"
                    alt="作品 1">
            </div>
            <div class="top-gallery-item fi fi-d1"><img
                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/gallery/gallery2.jpeg"
                    alt="作品 2">
            </div>
            <div class="top-gallery-item fi fi-d1"><img
                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/gallery/gallery4.jpeg"
                    alt="作品 4">
            </div>
            <div class="top-gallery-item fi fi-d2"><img
                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/gallery/gallery6.jpeg"
                    alt="作品 3">
            </div>
            <div class="top-gallery-item fi fi-d2"><img
                    src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/gallery/gallery5.jpeg"
                    alt="作品 5">
            </div>
        </div>
    </div>
</section>

<!-- ======= ACCESS ======= -->
<section id="access" class="top-access">
    <div class="container">
        <header class="sec-head fi">
            <span class="sec-en">access</span>
            <h2 class="sec-title">【 アクセス 】</h2>
            <div class="sec-line"></div>
        </header>
        <div class="top-access-layout">
            <div class="top-access-map fi">
                <iframe
                    src="https://maps.google.com/maps?q=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E5%8D%97%E9%9D%92%E5%B1%B16-2-10%20TI%E3%83%93%E3%83%AB&output=embed&z=16"
                    loading="lazy" title="Re’ink 表参道店 アクセスマップ"></iframe>
            </div>
            <div class="top-access-detail fi fi-d1">
                <div class="top-access-row">
                    <p class="top-access-label">Studio</p>
                    <p class="top-access-text">表参道店</p>
                </div>
                <div class="top-access-row">
                    <p class="top-access-label">Address</p>
                    <p class="top-access-text">〒107-0062<br>東京都港区南青山6-2-10 TIビル 2F</p>
                </div>
                <div class="top-access-row">
                    <p class="top-access-label">Access</p>
                    <p class="top-access-text">表参道徒歩7分</p>
                </div>
                <div class="top-access-row">
                    <p class="top-access-label">Hours</p>
                    <p class="top-access-text">11:00〜19:00（不定休）</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= FAQ ======= -->
<section id="faq" class="top-faq">
    <div class="container">
        <div class="top-faq-layout">
            <!-- 左: 大見出し＋ラベル -->
            <div class="top-faq-label-col fi">
                <p class="top-faq-heading">FAQ</p>
                <p class="top-faq-label-text">【 よくあるご質問 】</p>
            </div>

            <!-- 右: アコーディオンリスト -->
            <div class="top-faq-list fi">
                <div class="top-faq-item">
                    <button class="top-faq-q">
                        <span class="top-faq-qlabel">Q.</span>
                        <span class="top-faq-qtext">初めてでも大丈夫ですか？</span>
                        <span class="top-faq-arrow">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor"
                                stroke-width="1.2">
                                <path d="M2 5l5 5 5-5" />
                            </svg>
                        </span>
                    </button>
                    <div class="top-faq-ans">
                        <div class="top-faq-ans-inner">
                            <span class="top-faq-alabel">A.</span>
                            <p class="top-faq-atext">
                                もちろん大丈夫です。当スタジオでは、初めてタトゥーを入れる方にも安心してご来店いただけるよう、丁寧なカウンセリングを行っています。デザインやサイズ感、施術の流れまでしっかりご説明いたしますので、不安なことがあればお気軽にご相談ください。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="top-faq-item">
                    <button class="top-faq-q">
                        <span class="top-faq-qlabel">Q.</span>
                        <span class="top-faq-qtext">痛みはありますか？</span>
                        <span class="top-faq-arrow">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor"
                                stroke-width="1.2">
                                <path d="M2 5l5 5 5-5" />
                            </svg>
                        </span>
                    </button>
                    <div class="top-faq-ans">
                        <div class="top-faq-ans-inner">
                            <span class="top-faq-alabel">A.</span>
                            <p class="top-faq-atext">
                                施術部位や個人差によって異なりますが、一般的には「チクチクする感覚」と表現されることが多いです。初めての方でも無理なく施術を受けられるよう、様子を見ながら進めていきますのでご安心ください。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="top-faq-item">
                    <button class="top-faq-q">
                        <span class="top-faq-qlabel">Q.</span>
                        <span class="top-faq-qtext">当日予約は可能ですか？</span>
                        <span class="top-faq-arrow">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor"
                                stroke-width="1.2">
                                <path d="M2 5l5 5 5-5" />
                            </svg>
                        </span>
                    </button>
                    <div class="top-faq-ans">
                        <div class="top-faq-ans-inner">
                            <span class="top-faq-alabel">A.</span>
                            <p class="top-faq-atext">予約状況によっては当日予約も可能です。空き状況は公式LINEよりお気軽にお問い合わせください。</p>
                        </div>
                    </div>
                </div>
                <div class="top-faq-item">
                    <button class="top-faq-q">
                        <span class="top-faq-qlabel">Q.</span>
                        <span class="top-faq-qtext">デザイン持ち込みはできますか？</span>
                        <span class="top-faq-arrow">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor"
                                stroke-width="1.2">
                                <path d="M2 5l5 5 5-5" />
                            </svg>
                        </span>
                    </button>
                    <div class="top-faq-ans">
                        <div class="top-faq-ans-inner">
                            <span class="top-faq-alabel">A.</span>
                            <p class="top-faq-atext">
                                はい、可能です。参考画像のお持ち込みや、イメージのご共有も歓迎しております。お客様のご希望をもとに、サイズやバランスを調整しながらデザインをご提案いたします。</p>
                        </div>
                    </div>
                </div>
                <div class="top-faq-item">
                    <button class="top-faq-q">
                        <span class="top-faq-qlabel">Q.</span>
                        <span class="top-faq-qtext">未成年でも施術を受けられますか？</span>
                        <span class="top-faq-arrow">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor"
                                stroke-width="1.2">
                                <path d="M2 5l5 5 5-5" />
                            </svg>
                        </span>
                    </button>
                    <div class="top-faq-ans">
                        <div class="top-faq-ans-inner">
                            <span class="top-faq-alabel">A.</span>
                            <p class="top-faq-atext">18歳未満の方への施術はお断りしております。また、18歳・19歳の方につきましては、身分証明書の確認をお願いする場合がございます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= RECRUIT ======= -->
<section id="recruit" class="top-recruit">
    <div class="container">
        <div class="top-form-single">
            <div class="top-form-single-head fi">
                <p class="top-recruit-heading">RECRUIT</p>
                <p class="top-recruit-label-text">【 採用情報 】</p>
            </div>

            <div class="fi fi-d1">
                <p class="top-recruit-note">※印は必須項目です。必ずご入力ください</p>
                <form class="top-recruit-form" id="recruitForm">
                    <?php wp_nonce_field( 'reink_recruit', 'recruit_nonce' ); ?>
                    <input type="hidden" name="action" value="reink_recruit_submit">

                    <!-- 希望職種 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">希望職種<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <label class="top-recruit-radio-label"><input type="radio" name="job_type"
                                    value="タトゥーアーティスト"> <span>タトゥーアーティスト</span></label>
                            <label class="top-recruit-radio-label"><input type="radio" name="job_type" value="受付スタッフ">
                                <span>受付スタッフ</span></label>
                        </div>
                    </div>

                    <!-- お名前 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">お名前<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <input type="text" name="name" placeholder="山田　花子" class="top-recruit-input">
                        </div>
                    </div>

                    <!-- フリガナ -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">フリガナ<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <input type="text" name="kana" placeholder="ヤマダ　ハナコ" class="top-recruit-input">
                        </div>
                    </div>

                    <!-- 年齢 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">年齢<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field top-recruit-field--age">
                            <input type="number" name="age" placeholder="25" min="18" max="99"
                                class="top-recruit-input top-recruit-input--num">
                            <span class="top-recruit-unit">歳</span>
                        </div>
                    </div>

                    <!-- 性別 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">性別<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <label class="top-recruit-radio-label"><input type="radio" name="gender" value="男性">
                                <span>男性</span></label>
                            <label class="top-recruit-radio-label"><input type="radio" name="gender" value="女性">
                                <span>女性</span></label>
                            <label class="top-recruit-radio-label"><input type="radio" name="gender" value="その他">
                                <span>その他</span></label>
                        </div>
                    </div>

                    <!-- 住所 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">住所</p>
                        <div class="top-recruit-field">
                            <input type="text" name="address" placeholder="東京都中央区日本橋横山町8-5" class="top-recruit-input">
                        </div>
                    </div>

                    <!-- 電話番号 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">電話番号<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <input type="tel" name="tel" placeholder="000-0000-0000" class="top-recruit-input">
                        </div>
                    </div>

                    <!-- メールアドレス -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">メールアドレス<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <input type="email" name="email" placeholder="example@example.jp" class="top-recruit-input">
                        </div>
                    </div>

                    <!-- タトゥーアーティストの施術経験 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">タトゥーアーティストの施術経験<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <label class="top-recruit-radio-label"><input type="radio" name="experience" value="あり">
                                <span>あり</span></label>
                            <label class="top-recruit-radio-label"><input type="radio" name="experience" value="なし">
                                <span>なし</span></label>
                        </div>
                    </div>

                    <!-- よく使うSNS -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">よく使うSNSや投稿するものを教えてください<span class="top-recruit-req">※</span>
                        </p>
                        <div class="top-recruit-field">
                            <label class="top-recruit-radio-label"><input type="radio" name="sns" value="Twitter">
                                <span>Twitter</span></label>
                            <label class="top-recruit-radio-label"><input type="radio" name="sns" value="Instagram">
                                <span>Instagram</span></label>
                            <label class="top-recruit-radio-label"><input type="radio" name="sns" value="Tiktok">
                                <span>Tiktok</span></label>
                            <label class="top-recruit-radio-label"><input type="radio" name="sns" value="やってない">
                                <span>やってない</span></label>
                        </div>
                    </div>

                    <!-- SNSアカウント -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">よければSNSアカウントを教えてください</p>
                        <div class="top-recruit-field">
                            <textarea name="sns_account" placeholder="Twitter @xxxxxx"
                                class="top-recruit-textarea"></textarea>
                        </div>
                    </div>

                    <!-- 自己PR・志望動機 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">自己PR・志望動機</p>
                        <div class="top-recruit-field">
                            <textarea name="motivation" placeholder="自己PR・志望動機についてご記入ください。"
                                class="top-recruit-textarea"></textarea>
                        </div>
                    </div>

                    <!-- 送信ボタン -->
                    <div class="top-recruit-submit-wrap">
                        <button type="submit" class="top-recruit-submit-btn">送信する</button>
                    </div>
                </form>
                <div id="recruitResult" class="top-recruit-result" style="display:none;"></div>
            </div>
        </div>
    </div>
</section>
<script>
(function() {
    var form = document.getElementById('recruitForm');
    var result = document.getElementById('recruitResult');
    if (!form) return;
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        var btn = form.querySelector('.top-recruit-submit-btn');
        var data = new FormData(form);
        btn.disabled = true;
        btn.textContent = '送信中...';
        fetch('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', {
            method: 'POST',
            body: data
        }).then(function(r) {
            return r.json();
        }).then(function(res) {
            result.style.display = 'block';
            if (res.success) {
                result.className = 'top-recruit-result top-recruit-result--ok';
                result.textContent = 'ご応募ありがとうございます。内容を確認の上、担当者よりご連絡いたします。';
                form.reset();
                btn.style.display = 'none';
            } else {
                result.className = 'top-recruit-result top-recruit-result--err';
                result.textContent = res.data || '送信に失敗しました。時間をおいて再度お試しください。';
                btn.disabled = false;
                btn.textContent = '送信する';
            }
        }).catch(function() {
            result.style.display = 'block';
            result.className = 'top-recruit-result top-recruit-result--err';
            result.textContent = '送信に失敗しました。時間をおいて再度お試しください。';
            btn.disabled = false;
            btn.textContent = '送信する';
        });
    });
})();
</script>

<!-- ======= CONTACT ======= -->
<section id="inquiry" class="top-contact">
    <div class="container">
        <div class="top-form-single">
            <div class="top-form-single-head fi">
                <p class="top-contact-heading">CONTACT</p>
                <p class="top-recruit-label-text">【 お問い合わせ 】</p>
            </div>

            <div class="fi fi-d1">
                <p class="top-recruit-note">※印は必須項目です。必ずご入力ください</p>
                <form class="top-recruit-form" id="contactForm">
                    <?php wp_nonce_field( 'reink_contact', 'contact_nonce' ); ?>
                    <input type="hidden" name="action" value="reink_contact_submit">

                    <!-- 氏名 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">氏名<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <input type="text" name="name" placeholder="山田 花子" class="top-recruit-input">
                        </div>
                    </div>

                    <!-- 電話番号 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">電話番号<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <input type="tel" name="tel" placeholder="000-0000-0000" class="top-recruit-input">
                        </div>
                    </div>

                    <!-- メールアドレス -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">メールアドレス<span class="top-recruit-req">※</span></p>
                        <div class="top-recruit-field">
                            <input type="email" name="email" placeholder="example@example.jp" class="top-recruit-input">
                        </div>
                    </div>

                    <!-- お問い合わせ内容 -->
                    <div class="top-recruit-row">
                        <p class="top-recruit-field-label">お問い合わせ内容<span class="top-recruit-req">※</span><br><small>（500文字以内）</small></p>
                        <div class="top-recruit-field">
                            <textarea name="message" placeholder="お問い合わせ内容をご入力ください。" maxlength="500" class="top-recruit-textarea"></textarea>
                        </div>
                    </div>

                    <!-- 送信ボタン -->
                    <div class="top-recruit-submit-wrap">
                        <button type="submit" class="top-recruit-submit-btn">送信する</button>
                    </div>
                </form>
                <div id="contactResult" class="top-recruit-result" style="display:none;"></div>
            </div>
        </div>
    </div>
</section>
<script>
(function () {
    var form = document.getElementById('contactForm');
    var result = document.getElementById('contactResult');
    if (!form) return;
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var btn = form.querySelector('.top-recruit-submit-btn');
        var data = new FormData(form);
        btn.disabled = true;
        btn.textContent = '送信中...';
        fetch('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', {
            method: 'POST',
            body: data
        }).then(function (r) {
            return r.json();
        }).then(function (res) {
            result.style.display = 'block';
            if (res.success) {
                result.className = 'top-recruit-result top-recruit-result--ok';
                result.textContent = 'お問い合わせを受け付けました。担当者よりご連絡いたします。';
                form.reset();
                btn.style.display = 'none';
            } else {
                result.className = 'top-recruit-result top-recruit-result--err';
                result.textContent = res.data || '送信に失敗しました。時間をおいて再度お試しください。';
                btn.disabled = false;
                btn.textContent = '送信する';
            }
        }).catch(function () {
            result.style.display = 'block';
            result.className = 'top-recruit-result top-recruit-result--err';
            result.textContent = '送信に失敗しました。時間をおいて再度お試しください。';
            btn.disabled = false;
            btn.textContent = '送信する';
        });
    });
})();
</script>

<!-- ======= CTA ======= -->
<section id="contact" class="top-cta">
    <!-- マーキー -->
    <div class="top-cta-marquee">
        <div class="top-cta-marquee-track">
            <div class="top-cta-marquee-item">
                <span class="top-cta-marquee-sep">▼</span>
                CONTACT
                <span class="top-cta-marquee-sep">▼</span>
                <span class="top-cta-marquee-ja">カウンセリング予約・お問合せはこちら</span>
                <span class="top-cta-marquee-sep">▼</span>
                CONTACT
                <span class="top-cta-marquee-sep">▼</span>
                <span class="top-cta-marquee-ja">カウンセリング予約・お問合せはこちら</span>
                <span class="top-cta-marquee-sep">▼</span>
                CONTACT
                <span class="top-cta-marquee-sep">▼</span>
                <span class="top-cta-marquee-ja">カウンセリング予約・お問合せはこちら</span>
            </div>
            <div class="top-cta-marquee-item" aria-hidden="true">
                <span class="top-cta-marquee-sep">▼</span>
                CONTACT
                <span class="top-cta-marquee-sep">▼</span>
                <span class="top-cta-marquee-ja">カウンセリング予約・お問合せはこちら</span>
                <span class="top-cta-marquee-sep">▼</span>
                CONTACT
                <span class="top-cta-marquee-sep">▼</span>
                <span class="top-cta-marquee-ja">カウンセリング予約・お問合せはこちら</span>
                <span class="top-cta-marquee-sep">▼</span>
                CONTACT
                <span class="top-cta-marquee-sep">▼</span>
                <span class="top-cta-marquee-ja">カウンセリング予約・お問合せはこちら</span>
            </div>
        </div>
    </div>
    <!-- 3分割パネル -->
    <div class="top-cta-panels">
        <a href="https://reink.stores.jp/reserve/omotesando/2481805" target="_blank" rel="noopener noreferrer"
            class="top-cta-panel">
            <div class="top-cta-panel-bg"
                style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg2.jpeg');">
            </div>
            <div class="top-cta-panel-overlay"></div>
            <div class="top-cta-panel-inner">
                <span class="top-cta-panel-label">Webで予約する</span>
                <span class="top-cta-panel-arrow">→</span>
            </div>
        </a>
        <a href="https://lin.ee/8Btanj22" class="top-cta-panel" target="_blank" rel="noopener noreferrer">
            <div class="top-cta-panel-bg"
                style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bg3.jpeg');">
            </div>
            <div class="top-cta-panel-overlay"></div>
            <div class="top-cta-panel-inner">
                <span class="top-cta-panel-label">LINE問合せ</span>
                <span class="top-cta-panel-arrow">→</span>
            </div>
        </a>
    </div>
</section>

<!-- ======= FOOTER (ACCESS統合) ======= -->

<?php get_footer(); ?>