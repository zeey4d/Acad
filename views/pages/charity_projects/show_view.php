<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>
<main>
  <section class="card_islamic_endowments">

  </section>
  <!-- باقي البينات -->
  <section class="card_islamic_endowments">
    <div class="main_image">
      <h3>التفاصيل</h3>
      <img src="views/media/images/<?php  echo $projects['photo'] ?? "11.png" ?>" alt=" " loading="lazy">
      <span><?php echo ($projects['collected_money']/$projects['cost'])*100 ?>% مكتمل</span>
      <p>يسعى المشروع الى <?php echo $projects['name']?> </p>
      <p>
        <h4>تفاصيل تكاليف العمليات</h4>
        <strong>الفحوصات الطبية</strong>
        <strong>العمليات الجراحية</strong>
        <strong>الادوية </strong>
      </p>
      
    </div>
    <div class="data">
      <p><img src="" alt=""> نوع المشروع <span><?php echo $projects['type']?></span></p>
      <p><img src="" alt=""> المبلغ المستهدف<span><?php echo $projects['cost']?>ر.س</span></p>
      <p><img src="" alt=""> عدد المتبرعين<span>8000</span></p>
      <p><img src="" alt=""> عدد المستفيدين<span>100 محتاج</span></p>
      <p><img src="" alt="">المبلغ الذي تم جمعه<span><?php echo $projects['collected_money']?>ر.س</span></p>
      <p><img src="" alt=""> الوقت المتبقي<span>60 يوم</span></p>
      <p>
        <h4>مراحل المشروع</h4>
        <span>المرحلة الاولى </span>
        <span>المرحلة الثانية</span>
        <span>المرحلة الثالثة</span>
      </p>
      <p>
        <span>تاريخ البدء :</span> <strong><?php echo $projects['start_at']?></strong>
        <span>تاريخ الانتهاء :</span> <strong><?php echo $projects['end_at']?></strong>
      </p>
      <p><span><?php echo ($projects['collected_money']/$projects['cost'])*100 ?>%</span>تم جمع <?php echo ($projects['collected_money']/$projects['cost'])*100 ?>% من التبرعات</p>
      <p><img src="" alt="">تم الانتهاء من المرحلة الاولى</p>

    </div>

  </section>

  <!-- شريط الاحداث -->
  <section class="bar_actions">
    <p><img src="" alt=""> ساهم في المشروع</p>
    <form action="" method="">
      <button class="donate_now" name="donate_now" ><img src="" alt=""> تبرع الان</button>
      <button class="add_to_cart" name="add_to_cart"><img src="" alt=""> إضافة الى السلة</button>
      <button class="share_project" name="share_project"><img src="" alt=""> مشاركة المشروع</button>
    </form>

  </section>
</main>
<?php require('views/parts/footer.php') ?>