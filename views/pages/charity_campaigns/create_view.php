<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

        
      

    <!-- نموذج تقديم الطلب -->
    

  <main class="main_create_chatity">
  <h1>تقديم حملة تبرع</h1>
    <div class="div_tbr3"> 
        <section class="donation-form">
            <h2>نموذج تقديم طلب التبرع</h2>
            <form id="donationForm" action="/" method="POST" enctype="multipart/form-data" >
                <!-- نوع الحالة -->
                

                <!-- زر التأكيد -->
                <div class="form-group">
                    <button type="submit">تقديم الطلب</button>
                </div>
            </form>
        </section>

        <!-- عرض حالة الطلب -->
        </div>
   
   <section class="request-status">
    <div>
            <h2>حالة الطلب</h2>
            <p id="statusMessage" style=" color: var(--font-color-bl);">حالة الطلب: قيد الانتظار</p>
            <button id="editButton" disabled>تعديل البيانات (الوقت المتبقي: <span id="timer">24:00:00</span>)</button>
        </section>
        </div>
        </main>
<?php require('views/parts/footer.php') ?>