<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<?php //dd($islamic_endowments) 
?>

<main>
  <!-- الفلتره -->
  <section class="bar_felter">
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


  </section>
  <!-- كرت الاوقاف -->
  <section class="container">
    <?php foreach ($islamic_endowments as $islamic_endowment): ?>

      <div class="card_islamic_endowments">
        <a href="/islamic_endowments_show?endowment_id=<?= htmlspecialchars($islamic_endowment['endowment_id']) ?>">
          <img src="views/media/images/<?= htmlspecialchars($islamic_endowment['photo'] ?? "11.png") ?>" alt=" " loading="lazy">
        </a>
        <h2> <?= htmlspecialchars($islamic_endowment['name']) ?> </h2>
        <p> <?= htmlspecialchars($islamic_endowment['short_description']) ?> </p>
        <div class="donate-section">
          <form action="/islamic_endowments_donate" method="post">
            <input class="inp" type="number" name="cost" placeholder="$">
            <input type="hidden" name="endowment_id" value="<?= htmlspecialchars($islamic_endowment['endowment_id']) ?>">
            <button type="submit">تبرع الأن</button>
          </form>
          <form action="/islamic_endowments_addcart" method="post">
            <input type="hidden" name="endowment_id" value="<?= htmlspecialchars($islamic_endowment['endowment_id']) ?>">
            <button type="submit"><img src="views/media/images/cart.png" alt=""></button>
          </form>
        </div>
        <div class="details">
          <a href="/islamic_endowments_show?endowment_id=<?= htmlspecialchars($islamic_endowment['endowment_id']) ?>">عرض التفاصيل</a>
        </div>

      </div>
    <?php endforeach; ?>

  </section>


</main>
<?php require('views/parts/footer.php') ?>