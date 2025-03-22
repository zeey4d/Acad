<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>
<main>
  <div class="main_show_islamic_endowments">
  <button> تبرع الان <img src="views/media/images/2.png" alt="" length="10" width="10"> </button>
  <!-- التفاصيل الاسايسيه -->
  <section class="card_islamic_endowments">
    <h3>التفاصيل</h3>
    <div class="image">
      <img src="views/media/images/<?php  echo $endowments['photo'] ?? "11.png" ?>" alt="" length="200" width="200" loading="lazy">
      <span><?php echo ($endowments['collected_money']/$endowments['cost'])*100 ?>% مكتمل</span>
    </div>
    <h4><?php echo $endowments['name'] ?></h4>
    <p> <?php echo $endowments['short_description'] ?> </p>
    
  </section>
 
  <!-- باقي البينات -->
  <section class="card_islamic_endowments">
    <div>
      <p>
        <img src="" alt=""> نوع الوقف <span><?php echo $endowments['type'] ?></span>
      </p>
      <p>
        <img src="" alt=""> المبلغ المستهدف <span><?php echo $endowments['cost'] ?> ر.س</span>
      </p>
      <p>
        <img src="" alt=""> عدد المساهمين <span>8000</span>
      </p>
      <p>
        <img src="" alt=""> المنطقة <span><?php echo $endowments['city'] ?></span>
      </p>
      <p>
        <img src="" alt="">المبلغ الذي تم جممه <span><?php echo $endowments['collection_money'] ?> ر.س</span>
      </p>
      <p>
        <img src="" alt=""> الشركاء في الوقف <span>مكتب الاوقاف</span>
      </p>
    </div>

  </section>
  </div>
  <!-- الاخبار -->
  <section class="card_islamic_endowments" id="card_islamic_endowments_news">
 <div class="card_notifications">
  <p>
    <span>30%</span> تم جمع 30% من التبرعات
  </p>
  <p>
     تم شراء ارض الجامع  <img src="views/media/images/3.jpg" alt="" length="200" width="100"> 
  </p>
  <p>
     تم الانتهاء من بناء أساس الجامع <img src="views/media/images/4.jpg" alt="" length="200" width="100">
  </p>
  <p>
    <span>50%</span> تم جمع 50% من التبرعات
  </p>

 </div>
  </section>

</main>
<?php require('views/parts/footer.php') ?>