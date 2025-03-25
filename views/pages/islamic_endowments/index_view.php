<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<?php //dd($islamic_endowments) ?>

<main>
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
  <section class="container">
  <?php foreach($islamic_endowments as $islamic_endowment): ?>

    <div class="card_islamic_endowments">
      <img src="views/media/images/<?= htmlspecialchars($islamic_endowment['photo'] ?? "11.png") ?>" alt=" " loading="lazy">
      <h2> <?= htmlspecialchars($islamic_endowment['name']) ?> </h2>
      <p>  <?= htmlspecialchars($islamic_endowment['short_description']) ?> </p>
      <form action="" method="">
        <label for="donation"><h3>مبلغ التبرع</h3></label><br>
        <input id="donation" type="number" name="donation" placeholder="ريال">
        <button class="donation" type="submit" name="donation">تبرع</button>
        <button class="add" name="add">إضافة الى السلة <img src="" alt=""></button>
        <button class="share" name="share">مشاركة المشروع <img src="" alt=""></button>
      </form>
      <!-- <p>ينتهي في  <?= htmlspecialchars($islamic_endowment['end_at']) ?> </p><br> -->
      <a class="more_details" href="">تفاصيل أكثر</a>

    </div>
    <?php endforeach; ?>

  </section>


</main>
<?php require('views/parts/footer.php') ?>