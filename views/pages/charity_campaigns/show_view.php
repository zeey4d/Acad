<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<?php //dd($campaigns) ?>

<main class="main_show_ch">
            <section class="card_islamic_endowments">
            <!-- <h3 style="color: var(--font-color-bh);
        font-size: var(--font-size-xl);">التفاصيل</h3> -->
            <div class="imgs">
            <img src="views/media/images/<?php  echo $campaigns['photo'] ?? "11.png" ?>" alt=" " loading="lazy"></div>
            <p class="localshin">المنطقة تعز</p>
            <h5>عمليات جراحيه</h5>
            <p class="details_p">يسعى المشروع الى علاج ذوي الحاجه المصابين بالمياه الزرقاء</p>
            <h5>رقم الحملة :</h5>
            <div class="progress-bar">
                <div class="progress"></div>
              </div>
              <div class="donation-details">
                <div >
                  <p><strong style="display: inline;">SR/</strong></p>
                  <p style="text-align: right;">المبلغ المتبقي</p>
                  <p style="text-align: right;">محمع التبراعات</p>
                </div>
              </div>  

            <div class="details_show_ch">
                <h5>تفاصيل تكاليف العمليات</h5>
                <p>الفحوصات الطبية</p>
                <p>العمليات الجراحية</p>
                <p>الادوية</p>
        </div>
        <div class="card_insid" id="card_insid">
        <div>
        <h6>نوع المشروع</h6>
        <p>علاجي</p>
        <h6>المبلغ المستهدف</h6>
        <p> ر.س</p>
        <h6>عدد المتبرعين</h6>
        <p>8000</p>
        </div>
        <div>
        <h6>عدد المستفيدين</h6>
        <p>100 محتاج</p>
        <h6>المبلغ الذي تم جمعة</h6>
        <p> ر.س</p>
        <h6>الوقت المتبقي</h6>
        <p>يوم</p>
        </div>
    </div>




</section>
<!-- باقي البينات -->
<section class="card_islamic_endowments" id="card_islamic_endowments">

    <h5>مراحل المشروع</h5>
    <div class="card_insid" id="card_insid2">
        <div>
        <p>المرحلة الاولى </p>
        <p>المرحلة الثانية </p>
        <p>المرحلة الثالثة</p>
        </div>
        <div><br><br>
        
        <p>تاريخ البدء  : </p>
        <p>تاريخ الانتهاء  </p>
      
        </div>
    </div>
    <h5>اخبار المشروع</h5>
    <div class="news" >
        <div>30%<p>تم جمع 30% من التبرعات</p></div>
        <div>30%<p>تم الانتهاء من المرحله الاولى </p></div>
    </div>

    <section class="bar_actions">
<div class="donation-box">
        <h3>مبلغ التبرع</h3>
        <div style="display: flex;">
        <input type="number" id="customAmount" placeholder="قيمة المبلغ" oninput="updateDonateButton()">
        <a class="icon_nav_search" id="icon_nav_search" href=""><img class="icon_img" style="width: 30px; height: 30px ;padding: var(--padding-s);" src="views/media/images/cart.png" alt=""></a>
        </div>
        <button id="donate">تبرع الآن</button>
    </div>
</section>

</section>

</main>



<?php require('views/parts/footer.php') ?>