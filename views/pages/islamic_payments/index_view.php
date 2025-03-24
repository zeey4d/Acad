<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main>
  <section class="islamic_payments_index">
    <div class="nav_links_islamic_payments">
      <a class="zakat" href="">الزكاة</a>
      <a class="charity" href="">الصدقة</a>
      <a class="ransom" href="">الفدية</a>
      <a class="atonement" href="">الكفارة و النذور</a>
      <a class="aqeeqah" href="">العقيقة</a>
    </div>
    <!-- الصدقه -->
    <section class="Carousel_card">
  <!-- حاوية البطاقات -->


    <main class="main_cart">
      <section class="container">

      <?php foreach ($islamic_payments as $islamic_payment): ?>

        <div class="donation-card">
          <img src="views/media/images/<?= htmlspecialchars($islamic_payment['photo'] ?? "11.png") ?>" alt="مشروع نور السعودية">
          <div class="donation-info">
            <div class="aghtha">
              <h6><?= htmlspecialchars($islamic_payment['type']) ?></h6>
              <h5>رقم الحملة : <?= htmlspecialchars($islamic_payment['islamic_payment_id']) ?></h5>
              <a href=""><img src="" alt=""></a>
            </div>
            <h3>مشروع نور السعودية</h3>
            <div class="progress-bar">
              <div class="progress"></div>
            </div>
            <div class="donation-details">
              <div>
                <p><strong style="display: inline;">SR <?= htmlspecialchars($islamic_payment['cost']) ?>/</strong><?= htmlspecialchars($islamic_payment['paid_cost']) ?></p>
              </div>
            </div>
            <div class="donate-section">
              <input class="inp" type="text" placeholder=" مبلغ التبرع                   ر.س">
              <button class="donate-btn">تبرع الأن</button>
              <button class="donate_cart"><img src="views/media/images/cart.png" alt=""></button>
            </div>
            <div class="details">عرض التفاصيل</div>
          </div>
          <?php endforeach; ?>
      </section>
      <section class="bar_action">

      </section>
    </main>

    <!-- <main class="main_cart">
      <section class="container">
        <div class="donation-card">
          <img src="views/media/images/P251.png" alt="مشروع نور السعودية">
          <div class="donation-info">
            <div class="aghtha">
              <h6>إغاثة</h6>
              <h5>رقم الحملة :</h5>
              <a href=""><img src="" alt=""></a>
            </div>
            <h3>مشروع نور السعودية</h3>
            <div class="progress-bar">
              <div class="progress"></div>
            </div>
            <div class="donation-details">
              <div>
                <p><strong style="display: inline;">SR 15000/</strong>14000</p>
              </div>
            </div>
            <div class="donate-section">
              <input class="inp" type="text" placeholder=" مبلغ التبرع                   ر.س">
              <button class="donate-btn">تبرع الأن</button>
              <button class="donate_cart"><img src="views/media/images/cart.png" alt=""></button>
            </div>
            <div class="details">عرض التفاصيل</div>
          </div>
      </section>
      <section class="bar_action">

      </section>
    </main> -->

    

  </section>
  </section>
</main>
<?php require('views/parts/footer.php') ?>