<?php get_header(); ?>

  <section class="page-hero">
    <div class="container">
      <div class="page-hero-inner">
        <div class="fi">
          <span class="page-hero-en">pricing</span>
          <h1 class="page-hero-title">Pricing</h1>
          <span class="page-hero-ja">【 料金案内 】</span>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'template-parts/breadcrumb', null, [ 'current' => 'Pricing' ] ); ?>

  <!-- MAIN TABLE -->
  <section class="pricing-sec">
    <div class="container">
      <div class="sec-head fi">
        <span class="sec-en">standard pricing</span>
        <h2 class="sec-title">【 サイズ別料金表 】</h2>
        <div class="sec-line"></div>
      </div>
      <div class="pricing-table-wrap fi fi-d1">
        <table class="pricing-table">
          <thead>
            <tr>
              <th>サイズ</th>
              <th>目安サイズ（縦×横）</th>
              <th>料金（税込）</th>
              <th>施術可能部位</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="td-size">XXS</span></td>
              <td><span class="td-guide">〜3cm × 3cm</span></td>
              <td><span class="td-price">¥11,000〜</span></td>
              <td><span class="td-note">全身</span></td>
            </tr>
            <tr>
              <td><span class="td-size">XS</span></td>
              <td><span class="td-guide">〜5cm × 5cm</span></td>
              <td><span class="td-price">¥16,500〜</span></td>
              <td><span class="td-note">全身</span></td>
            </tr>
            <tr>
              <td><span class="td-size">S</span></td>
              <td><span class="td-guide">〜8cm × 8cm</span></td>
              <td><span class="td-price">¥22,000〜</span></td>
              <td><span class="td-note">全身</span></td>
            </tr>
            <tr>
              <td><span class="td-size">M</span></td>
              <td><span class="td-guide">〜12cm × 12cm</span></td>
              <td><span class="td-price">¥33,000〜</span></td>
              <td><span class="td-note">全身</span></td>
            </tr>
            <tr>
              <td><span class="td-size">L</span></td>
              <td><span class="td-guide">〜20cm × 20cm</span></td>
              <td><span class="td-price">¥55,000〜</span></td>
              <td><span class="td-note">胸・背中・太もも等</span></td>
            </tr>
            <tr>
              <td><span class="td-size">XL</span></td>
              <td><span class="td-guide">20cm × 20cm 以上</span></td>
              <td><span class="td-price">要相談</span></td>
              <td><span class="td-note">胸・背中・太もも等</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- INCLUDED -->
  <section class="included-sec">
    <div class="container">
      <div class="sec-head center fi">
        <span class="sec-en">included</span>
        <h2 class="sec-title">【 料金に含まれるもの 】</h2>
        <div class="sec-line"></div>
      </div>
      <div class="included-grid">
        <div class="included-item fi fi-d1">
          <div class="included-num">01</div>
          <p class="included-title">麻酔クリーム</p>
          <p class="included-desc">施術部位への塗る麻酔クリーム（医療機関監修）の使用料金が含まれています。</p>
        </div>
        <div class="included-item fi fi-d2">
          <div class="included-num">02</div>
          <p class="included-title">カウンセリング</p>
          <p class="included-desc">事前カウンセリングとデザインの調整・確認作業の費用が含まれます。</p>
        </div>
        <div class="included-item fi fi-d3">
          <div class="included-num">03</div>
          <p class="included-title">アフターケア用品</p>
          <p class="included-desc">施術後のケア用ラップ・軟膏のセットをプレゼントしています。</p>
        </div>
        <div class="included-item fi fi-d4">
          <div class="included-num">04</div>
          <p class="included-title">LINEサポート</p>
          <p class="included-desc">施術後2週間のアフターケアサポートをLINEにて無料で提供します。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OTHER PRICING -->
  <section class="other-pricing-sec">
    <div class="container">
      <div class="sec-head fi">
        <span class="sec-en">other menu</span>
        <h2 class="sec-title">【 その他の料金 】</h2>
        <div class="sec-line"></div>
      </div>
      <div class="other-grid">
        <div class="other-card fi fi-d1">
          <p class="other-label">Ephemeral Tattoo</p>
          <p class="other-name">Ephemeral</p>
          <p class="other-name-ja">消えるタトゥー</p>
          <p class="other-price">¥6,000</p>
          <p class="other-price-unit">/ 1ユニット（税込）</p>
          <p class="other-desc">1〜2年で自然に消えるバイオ対応インクを使用した施術です。まずタトゥーを試してみたい方、イベントやフォトシュートなど期間限定でお楽しみいただけます。</p>
        </div>
        <div class="other-card fi fi-d2">
          <p class="other-label">Hourly Rate</p>
          <p class="other-name">Hourly</p>
          <p class="other-name-ja">時間制料金</p>
          <p class="other-price">¥10,000 〜 ¥15,000</p>
          <p class="other-price-unit">/ 1時間（税込）</p>
          <p class="other-desc">大型作品や複雑なデザインには時間制料金が適用される場合があります。担当アーティストのレベルや作品の複雑さによって料金が異なります。事前見積もりをお伝えします。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- NOTES -->
  <section class="notes-sec">
    <div class="container">
      <div class="sec-head fi">
        <span class="sec-en">notes</span>
        <h2 class="sec-title">【 ご注意・ご案内 】</h2>
        <div class="sec-line"></div>
      </div>
      <div class="notes-inner fi fi-d1">
        <ul class="notes-list">
          <li class="note-item">
            <span class="note-mark">—</span>
            <p class="note-text">上記料金はすべて税込表示です。</p>
          </li>
          <li class="note-item">
            <span class="note-mark">—</span>
            <p class="note-text">料金はデザインの複雑さ、使用するカラー数、施術部位によって変動することがあります。</p>
          </li>
          <li class="note-item">
            <span class="note-mark">—</span>
            <p class="note-text">お持ち込みデザインの場合も対応可能ですが、アーティストによる調整が必要な場合があります。</p>
          </li>
          <li class="note-item">
            <span class="note-mark">—</span>
            <p class="note-text">未成年（18歳未満）の方への施術は行っておりません。身分証明書の提示をお願いする場合があります。</p>
          </li>
          <li class="note-item">
            <span class="note-mark">—</span>
            <p class="note-text">妊娠中・授乳中の方、特定のアレルギーをお持ちの方は事前にご相談ください。</p>
          </li>
          <li class="note-item">
            <span class="note-mark">—</span>
            <p class="note-text">当日キャンセルはキャンセル料（施術料金の50%）が発生する場合があります。</p>
          </li>
          <li class="note-item">
            <span class="note-mark">—</span>
            <p class="note-text">お支払いは現金・各種クレジットカード・PayPayに対応しています。</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta-strip' ); ?>

<?php get_footer(); ?>
