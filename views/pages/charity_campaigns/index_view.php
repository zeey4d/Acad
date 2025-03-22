<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<?php //dd($campaigns) ?>


  <h1 style="  text-align: center;
    color: var(--font-color-bh);
    margin: var(--margin-xl);">حملات التبرع المتاحة</h1>

  <section class="container_card">
        <?php foreach($campaigns as $campaign): ?>
        <div class="donation-card">
          <img src="views/media/images/<?= htmlspecialchars($campaign['photo'] ?? "11.png") ?>" alt="مشروع نور السعودية" loading="lazy">
          <div class="donation-info">
            <div class="aghtha">
              <h6>إغاثة</h6>
              <h5>رقم الحملة : <?= htmlspecialchars($campaign['campaign_id']) ?></h5>
              <a href=""><img src="" alt=""></a>
            </div>
            <h3><?= htmlspecialchars($campaign['name']) ?></h3>
            <div class="progress-bar">
              <div class="progress" style="width:<?= htmlspecialchars(($campaign['collected_money']/$campaign['cost'])*100) ?>% "></div>
            </div>
            <div class="donation-details">
              <div>
                <p><strong style="display: inline;">SR <?= htmlspecialchars($campaign['collected_money']) ?>/</strong><?= htmlspecialchars($campaign['cost']) ?></p>
              </div>
            </div>
            <div class="donate-section">
              <input class="inp" type="text" placeholder=" مبلغ التبرع                   ر.س">
              <button class="donate-btn">تبرع الأن</button>
              <button class="donate_cart"><img src="views/media/images/cart.png" alt=""></button>
            </div>
            <div class="details">عرض التفاصيل</div>
          </div>
        </div>
          <?php endforeach; ?>
      </section>
      <section class="bar_action">

      </section>
</main>
<?php require('views/parts/footer.php') ?>