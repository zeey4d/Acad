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


      </form>
      <a class="view_details" href="">عرض التفاصيل</a>
      
    </div>
    <?php endforeach; ?>
    </section>
</main>
<?php require('views/parts/footer.php') ?>