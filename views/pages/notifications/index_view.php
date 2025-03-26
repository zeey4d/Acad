<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main>
  <section class="container">
  <?php foreach ($notifications as $notification): ?>

    <div class="card_notifications">
    <a href="/notifications_show?notification_id=<?= htmlspecialchars($notification['notification_id']) ?>">
      <img src="views/media/images/<?= htmlspecialchars($notification['photo'] ?? "11.png") ?>" alt="مشروع نور السعودية" loading="lazy">
  </a>
      <h2><?= htmlspecialchars($notification['title']) ?></h2>
      <p class="time">منذ 5 دقائق</p>

      <p>
      <?= htmlspecialchars($notification['content']) ?>
      </p>

      <h2>تاريخ الاشعار : <?= htmlspecialchars($notification['send_at']) ?> </h2>
      <a href="/notifications_show?notification_id=<?= htmlspecialchars($notification['notification_id']) ?>">عرض التفاصيل</a>
    </div>
    <?php endforeach; ?>
    
  </section>
</main>
<?php require('views/parts/footer.php') ?>