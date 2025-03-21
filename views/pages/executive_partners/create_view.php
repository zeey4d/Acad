<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main>
  <section class="form_executive_partners">
  <form action="/executive_partners_store" method="post" enctype="multipart/form-data">
  <div id="add-partner-modal" class="modal">
 

  
            <div class="modal-content">
                <h2>إضافة شريك جديد</h2>
                <form id="add-partner-form">
                    <div class="form-group">
                        <label for="partner-name">اسم الشريك:</label>
                        <input type="text" id="partner-name" name="partner-name" required>
                    </div>
                    <div class="form-group">
                        <label for="partner-region">المدينة:</label>
                        <input type="text" id="partner-region" name="partner-region" required>
                    </div>
                    <div class="form-group">
                        <label for="partner-email">البريد الإلكتروني:</label>
                        <input type="email" id="partner-email"  name="partner-email"required>
                    </div>
                    <div class="form-group">
                        <label for="partner-description">عرف نفسك:</label>
                        <textarea id="partner-description"  name="partner-description"rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="partner-contact">بيانات التواصل الإضافية:</label>
                        <textarea id="partner-contact" rows="4" name="partner-contact" required></textarea>
                    </div>
                    <button type="submit" name="submit">إضافة</button>
                </form>
            </div>
            <div class="ash3t">
            <div class="form-group" id="form-group">
              <img src="" alt="">
                        <label for="partner-logo">الشعار:</label>
                        <input type="file" id="partner-logo"  name="partner-logo"accept="image/*"  required>
                    </div></div>
                 
                </div>
                </form> 
  </section>
</main>
<?php require('views/parts/footer.php') ?>