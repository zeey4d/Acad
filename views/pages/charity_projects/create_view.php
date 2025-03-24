<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_create_chatity">
  <h1>تقديم حملة تبرع</h1>
    <div class="div_tbr3"> 
        <section class="donation-form">
            <h2>نموذج تقديم طلب التبرع</h2>
            <form id="donationForm" action="/charity_projects_store" method="POST" enctype="multipart/form-data">
                <!-- نوع الحالة -->
                <div class="form-group">
                    <label for="caseType">نوع الحالة:</label>
                    <select id="caseType" name="category_id" required>
                        <option value="">اختر نوع الحالة</option>
                        <option value="1">سجين</option>
                        <option value="2">أرملة</option>
                        <option value="3">مريض</option>
                        <option value="4">كفالة يتيم</option>
                        <option value="5">مشرد</option>
                    </select>
                </div>


                   <!--  اضافة حقول مخفيه كي تظابق قاعدة البيانات  -->
                  
                   <input type="hidden" name="partner_id" value="7">
                     <input type="hidden" id="place" type="text" name="country" placeholder="الدولة"><br>
                     <input type="hidden"id="place" type="text" name="city" placeholder="المدينه"><br>
                     <input type="hidden" id="place" type="text" name="street" placeholder="الشارع"><br>
                    <input type="hidden" id="type" type="text" name="type" placeholder="type"><br>
                    <input type="hidden" id="directorate" type="text" name="directorate" placeholder="directorate"><br>
                    <input type="hidden" id="level" type="text" name="level" placeholder="level"><br>
               
                     <!-- الاسم الكامل -->
                <div class="form-group">
                    <label for="fullName">الاسم الكامل:</label>
                    <input type="text" id="fullName" name="name" required>
                </div>

                <!-- العمر -->
               <div class="form-group">
                   <label for="age">العمر:</label>
                   <input type="number" id="age" name="age" min="1" max="120" required>
               </div>

                <!-- الظروف -->
                <div class="form-group">
                    <label for="circumstances">الظروف:</label>
                    <textarea id="circumstances" name="circumstances" rows="4" required></textarea>
                </div>

                
                <!-- المبلغ المطلوب -->
                <div class="form-group">
                    <label for="amount">المبلغ المطلوب:</label>
                    <input type="number" id="amount" name="cost" min="1" required>
                </div>


                <div class="form-group">
                   <label for="fullName"> الوصف الطويل :</label>
                   <input type="text" id="fullName" name="full_description" required>
                </div>

                <div class="form-group">
                    <label for="fullName">الوصف القصير :</label>
                    <input type="text" id="fullName" name="short_description" required>
               </div>





                <!-- المستندات الداعمة -->
                <!-- <div class="form-group"> -->
                    <!-- <label for="documents">المستندات الداعمة:</label> -->
                    <!-- <input type="file" id="documents" name="documents" multiple required> -->
                <!-- </div> -->

                <div class="form-group">
                  <label for="fullName">الصوره</label>
                  <input type="text" id="fullName" name="photo" required>
               </div> 

                <!-- صور البطاقة الشخصية -->
                <!-- <div class="form-group"> -->
                    <!-- <label for="idFront">صورة البطاقة الشخصية (من الأمام):</label> -->
                    <!-- <input type="file" id="idFront" name="idFront" accept="image/*" required> -->
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                    <!-- <label for="idBack">صورة البطاقة الشخصية (من الخلف):</label> -->
                    <!-- <input type="file" id="idBack" name="idBack" accept="image/*" required> -->
                <!-- </div> -->

                <!-- معلومات الحساب -->
                <div class="form-group">
                    <label for="accountNumber">رقم الحساب:</label>
                    <input type="text" id="accountNumber" name="accountNumber" required>
                </div>
                <div class="form-group">
                    <label for="bankName">اسم البنك:</label>
                    <input type="text" id="bankName" name="bankName" required>
                </div>
                <div class="form-group">
                    <label for="accountType">نوع الحساب:</label>
                    <input type="text" id="accountType" name="accountType" required>
                </div>

                <!-- زر التأكيد -->
                <div class="form-group">
                    <button type="submit" style="background-color: green;">تقديم الطلب</button>
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