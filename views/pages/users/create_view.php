<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_user">
  
  <!-- انشاء حساب جديد -->
  <section class="form_signup" a>
    
    <div class="create">
      <div>
      <h1>إنشاءحساب</h1>
      <form action="users_store" method="POST">
        <label for="name">:الإسم</label>
        <input id="name" type="text" name="username" placeholder="الإسم">
        <label for="email">:البريدالإلكتروني</label>
        <input id="email" type="email" name="email" placeholder="البري الإلكتروني">
        <label for="password">:كلمةالمرور</label>
        <input id="password" type="password" name="password" placeholder="كلمة المرور">
        <label for="confirm_password">:تأكيدكلمةالمرور</label>
        <input id="confirm_password" type="password" name="confirm_password" placeholder="تأكيد كلمةالمرور">
        <label for="phone_number">:رقم الهاتف</label>
        <input id="phone_number" type="text" name="phone" placeholder="رقم الهاتف">
        <label for="place">:الدولة</label>
        <input id="place" type="text" name="country" placeholder="الدولة"><br>
        <label for="place">:المدينه</label>
        <input id="place" type="text" name="city" placeholder="المدينه"><br>
        <label for="place">:الشارع</label>
        <input id="place" type="text" name="street" placeholder="الشارع"><br>
        <button class="button" id="button">تسجيل الدخول</button>

      </form>
      </div>
    </div>
    
  </section>
</main>
<?php require('views/parts/footer.php') ?>