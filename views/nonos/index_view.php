<?php require('views//parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

  <main>
  <?php  foreach($nonos as $nono ): ?>
    <div class="item">
    <h2><?= $item['id'] ?></h2>
      <h2><?= $item['name'] ?></h2>
    </div>
  <?php endforeach ?>
  </main>
  <?php require('views/parts/footer.php') ?>