<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<?php //dd($campaigns) ?>

<main class="main_show_ch">
        <div class="div_show_ch">  
            <section class="card_islamic_endowments">
            <h3 style="color: var(--font-color-bh);
        font-size: var(--font-size-xl);">التفاصيل</h3>
            <div class="imgs">
            <img src="views/media/images/<?php  echo $campaigns['photo'] ?? "11.png" ?>" alt=" " loading="lazy"></div>
            <div><div></div></div>
            <h5>عمليات جراحيه</h5>
            <p>يسعى المشروع الى علاج ذوي الحاجه المصابين بالمياه الزرقاء</p>
            <div class="details_show_ch">
                <h5>تفاصيل تكاليف العمليات</h5>
                <p>الفحوصات الطبية</p>
                <p>العمليات الجراحية</p>
                <p>الادوية</p>
        </div>



</section>
</div>
<!-- باقي البينات -->
<section class="card_islamic_endowments" id="card_islamic_endowments">
    <div class="card_insid" id="card_insid">
        <div>
        <h6>نوع المشروع</h6>
        <p>علاجي</p>
        <h6>المبلغ المستهدف</h6>
        <p> <?php echo $campaigns['cost']?> ر.س</p>
        <h6>عدد المتبرعين</h6>
        <p>8000</p>
        </div>
        <div>
        <h6>عدد المستفيدين</h6>
        <p>100 محتاج</p>
        <h6>المبلغ الذي تم جمعة</h6>
        <p> <?php echo $campaigns['collected_money']?> ر.س</p>
        <h6>الوقت المتبقي</h6>
        <p><?php echo ceil((strtotime($campaigns['end_at']) - strtotime($campaigns['start_at'])) / (60 * 60 * 24)) ?> يوم</p>
        </div>
    </div>
    <h5>مراحل المشروع</h5>
    <div class="card_insid" id="card_insid2">
        <div>
        <p>المرحلة الاولى </p>
        <p>المرحلة الثانية </p>
        <p>المرحلة الثالثة</p>
        </div>
        <div><br><br>
        
        <p>تاريخ البدء  : <?php echo $campaigns['start_at']?></p>
        <p>تاريخ الانتهاء  : <?php echo $campaigns['end_at']?></p>
      
        </div>
    </div>
    <h5>اخبار المشروع</h5>
    <div class="news" >
        <div><h4>30%</h4><p>تم جمع 30% من التبرعات</p></div>
        <div><h4>30%</h4><p>تم الانتهاء من المرحله الاولى </p></div>
        <div><h4>50%</h4><p>تم جمع 50% من التبرعات</p></div>
    </div>

</section>

</main>

<!-- شريط الاحداث -->
<section class="bar_actions">
    <div class="bar_actions_div">
<p><img src="" alt=""> ساهم في المشروع</p>
<div class="donate">
    <form action="" method="">
      <button class="donate_now" name="donate_now" ><img src="" alt=""> تبرع الان</button>
      <button class="add_to_cart" name="add_to_cart"><img src="" alt=""> إضافة الى السلة</button>
      <button class="share_project" name="share_project"><img src="" alt=""> مشاركة المشروع</button>
      </div>
    </form>
    </div>
</section>

<?php require('views/parts/footer.php') ?>