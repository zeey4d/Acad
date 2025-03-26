<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>




<!-- نموذج تقديم الطلب -->


<main class="main_create_chatity">
    <div class="div_tbr3">
        <section class="donation-form">
        <h1>تقديم حملة تبرع</h1>

            <h2>نموذج تقديم طلب التبرع</h2>
            <form id="donationForm" action="/charity_campaigns_store" method="POST" enctype="multipart/form-data">
                <!-- نوع الحالة -->
                <div class="form-group">
                    <label for="caseType">نوع الحمله:</label>
                    <select id="caseType" name="category_id" required>
                        <option value="1">صحه</option>
                        <option value="2">تعليم</option>
                        <option value="3">اغاثة</option>
                    </select>
                </div>
                     
                <!-- الاسم الكامل -->
                <div class="form-group">
                    <label for="fullName">الاسم :</label>
                    <input type="text" id="fullName" name="name" required>
                </div>

                <div class="form-group">
                    <label for="caseType">الشريك</label>
                    <select id="caseType" name="partner_id" required>
                        <option value="1">الشريك الاول</option>
                        <option value="2">الشريك الثاني</option>
                        <option value="3">الشريك الثالث</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fullName">الوصف القصير :</label>
                    <input type="text" id="fullName" name="short_description" required>
                </div>

                <div class="form-group">
                    <label for="fullName">الوصف المطول :</label>
                     <textarea name="full_description" id=""></textarea>
                </div>

                <div class="form-group">
                    <label for="fullName">الوصف التكلفه :</label>
                    <input type="number" id="fullName" name="cost" required>
                </div>

                <div class="form-group">
                    <label for="fullName">الوصف الحاله :</label>
                    <input type="hidden" id="fullName" name="state" value="active" required>
                </div> 

                <div class="form-group">
                    <label for="fullName">الصوره</label>
                    <input type="text" id="fullName" name="photo" required>
                </div> 

                <!-- <div class="form-group">
                    <label for="documents">المستندات الداعمة:</label>
                    <input type="file" id="documents" name="documents" multiple required>
                </div> -->

                <!-- زر التأكيد -->
                <div  class="form-group">
                    <button type="submit" style="background-color: green;" name="Go__create_chatity">حفظ</button>
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