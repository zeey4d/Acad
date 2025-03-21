<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_islamic_edowments_index">
  <!-- الفلتره -->
  <section class="bar_felter">
  <label for="gender_baby">  نوع الوقف</label>
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


  </section>
  <!-- كرت الاوقاف -->
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