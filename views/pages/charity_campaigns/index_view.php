<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<?php //dd($campaigns) ?>

<main>
  <section class="bar_search">
    <form action="" method="">
      <input id="search" type="search" name="search" placeholder="Search">
      <select name="project_type" id="project_type">
        <option value="">نوع المشروع</option>
        <option value="رجوع"> رجوع </option>
        <option value="محتاجيين"> محتاجيين</option>
        <option value="عمليات"> عمليات</option>
        <option value="بناء مسكن"> بناء مسكن</option>
      </select>
      <select name="region" id="region">
        <option value="">المنطقة</option>
      </select>

    </form>
  
  </section>
<<<<<<< HEAD
  <h1 style="    text-align: center;      color: var(--font-color-bh);     margin: var(--margin-xl); ">حملات الترع المتاحة</h1>

  <section class="Carousel_card">
  <!-- حاوية البطاقات -->
=======
  <h1>حملات التبرع المتاحة</h1>

  <section class="container">
  <?php foreach($campaigns as $campaign): ?>

    <div class="donation-card">
      <img src="views/media/images/<?= htmlspecialchars($campaign['photo'] ?? "11.png") ?>" alt=" " loading="lazy">
      <strong>بادر</strong>
      <p><img src="" alt=""> <strong>رقم الحملة : <?= htmlspecialchars($campaign['campaign_id']) ?></strong></p>
      <p><img src="" alt=""> <strong>المنطقة تعز</strong></p>
      <h3>مشروع مساعدة المحتاجين</h3>
      <p>
        <span><?= htmlspecialchars(($campaign['collected_money']/$campaign['cost'])*100) ?>%</span>
        <strong></strong>
        <?= htmlspecialchars($campaign['cost']) ?>/<?= htmlspecialchars($campaign['collected_money']) ?> ريال
      </p>
>>>>>>> 1847603dee89ef1f6a21bd4565994f8499f83a98


<<<<<<< HEAD
    <main class="main_cart">
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
    </main>

    <main class="main_cart">
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
    </main>

    

  </section>
=======
      </form>
      <a class="view_details" href="">عرض التفاصيل</a>
      
    </div>
    <?php endforeach; ?>
    </section>
>>>>>>> 1847603dee89ef1f6a21bd4565994f8499f83a98
</main>
<?php require('views/parts/footer.php') ?>