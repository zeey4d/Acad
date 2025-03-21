<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main>
  <!-- شريط التنقل -->
  <section class="bar_navigation">
    <div  class="button">
      <a class="public_projects" id="public_projects" href="">مشاريع عامة</a>
      <a class="sponsoring_orphans" id="sponsoring_orphans" href="">مشاريع عامة</a>
      <a class="mosque_care" id="mosque_care" href="">مشاريع عامة</a>
    </div>
    <form action="" method="">
      <input id="search" type="text" name="search">
      <button id="btn_search" type="submit" name="btn_search"><img src="views/media/images/search.png" alt=""></button>
    </form>
    <p>انضموا الينا في تقديم فرص تبرع تؤثر بشكل واسع وتدعم المجتمعات المحتاجة مع ضمان تحقيق نتائج طويلة الأمد</p>
  
  </section>

<!-- حاوية الكروت -->
<section class="Carousel_card">
  <!-- حاوية البطاقات -->


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
</main>
<?php require('views/parts/footer.php') ?>