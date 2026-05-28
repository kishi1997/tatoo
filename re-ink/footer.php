<?php $img = esc_url( get_template_directory_uri() . '/assets/img' ); ?>

<footer class="footer" id="footer-access">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo $img; ?>/logo.png" alt="Re'ink">
                </a>
                <p class="footer-addr">
                    〒107-0062<br>
                    東京都港区南青山6-2-10 TIビル 2F<br><br>
                    表参道徒歩7分<br>
                    11:00 – 20:00（不定休）
                </p>
            </div>

            <div>
                <p class="footer-col-title">Menu</p>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/artists/' ) ); ?>">アーティスト</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">タトゥーについて</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">作品ギャラリー</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#flow' ) ); ?>">ご予約の流れ</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/access/' ) ); ?>">アクセス</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
                </ul>
            </div>
            <div>
                <p class="footer-col-title">Follow</p>
                <ul class="footer-links">
                    <li><a href="https://lin.ee/8Btanj22" target="_blank" rel="noopener noreferrer">LINE公式アカウント</a></li>
                    <li><a href="https://www.instagram.com/reink_japan/" target="_blank"
                            rel="noopener noreferrer">Instagram</a></li>
                    <li><a href="https://www.tiktok.com/@reink_japan" target="_blank"
                            rel="noopener noreferrer">TikTok公式アカウント</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-notes">
            <ul class="footer-notes-list">
                <li>18歳未満の方はお断りしております。</li>
                <li>暴力団、暴力団関係者、及びそうみなされる方はお断りしております。</li>
                <li>持病、感染症などをお持ちの方は、必ず事前に申告してください。</li>
                <li>飲酒後の方、薬の服用をされている方は、仕上がりが悪くなることがありますのでお断りしております。</li>
                <li>公序良俗の範囲内での行動ができない方はお断りしております。</li>
            </ul>
        </div>

        <div class="footer-bottom">
            <p class="footer-copy">© 2026 Re'ink. All rights reserved.</p>
            <div class="footer-legal">
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
