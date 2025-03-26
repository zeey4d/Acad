<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<?php //dd($islamic_endowments) 
?>

<main>
  <!-- الفلتره -->
  <section class="bar_felter">
    <div class="bar">
    <label for="gender_baby"> نوع الوقف</label>
    <form action="" method="">
      <select name="gender_baby" id="gender_baby">
        <option value="disabled selected">كل الأوقاف</option>
        <option value="charity">الوقف الخيري</option>
        <option value="atomic">الوقف الذري (الاهلي)</option>
        <option value="joint">الوقف المشترك</option>
        <option value="cash">الوقف النقدي</option>
        <option value="production">الوقف الانتاجي</option>
        <option value="timer">الوقف المؤقت</option>
        <option value="technological_and_scientific">الوقف التكنولوجي و العلمي</option>
      </select>
    </form>

    </div>
  </section>



  <section class="Carousel_card">
    <!-- حاوية البطاقات -->

    <main class="main_cart">
      <section class="container_card">
      <?php foreach ($islamic_endowments as $islamic_endowment): ?>
        <div class="donation-card">
        <a href="/islamic_endowments_show?endowment_id=<?= htmlspecialchars($islamic_endowment['endowment_id']) ?>">
        <img src="views/media/images/<?= htmlspecialchars($islamic_endowment['photo'] ?? "11.png") ?>" alt=" " loading="lazy">
        </a>
            <div class="donation-info">
              <div class="aghtha">
                <h6>بادر</h6>
                <h5>رقم الحملة : <?= htmlspecialchars($islamic_endowment['endowment_id']) ?>"></h5>
                <a href=""><img src="" alt=""></a>
              </div>
              <h3><?= htmlspecialchars($islamic_endowment['name']) ?></h3>
              <div class="progress-bar">
                <div class="progress" style="width:<?= htmlspecialchars(($campaign['collected_money'] / $campaign['cost']) * 100) ?>% "></div>
              </div>
              <div class="donation-details">
                <div>
                  <p><strong style="display: inline;">$ <?= htmlspecialchars($campaign['collected_money']) ?>/</strong><?= htmlspecialchars($campaign['cost']) ?></p>
                </div>
              </div>
              <div class="donate-section">
                <form action="/islamic_endowments_donate" method="post">
                  <input class="inp" type="number" name="cost" placeholder="$">
                  <input type="hidden" name="campaign_id" value="<?= htmlspecialchars($islamic_endowment['endowment_id']) ?>">
                  <button type="submit">تبرع الأن</button>
                </form>
                <form action="/islamic_endowments_addcart" method="post">
                  <input type="hidden" name="campaign_id" value="<?= htmlspecialchars($islamic_endowment['endowment_id']) ?>">
                  <button type="submit"><img src="views/media/images/cart.png" alt=""></button>
                </form>
              </div>
              <div class="details">
                <a href="/islamic_endowments_show?endowment_id=<?= htmlspecialchars($islamic_endowment['endowment_id']) ?>">عرض التفاصيل</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </section>
      
      <section class="bar_action">

      </section>
    </main>





  </section>


</main>
<?php require('views/parts/footer.php') ?>