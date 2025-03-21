<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_user">
  
  <!-- انشاء حساب جديد -->
  <section class="form_signup" a>
    
<<<<<<< HEAD
    <div class="create" >
      <h1>إنشاءحساب</h1>
      <form action="/uders_store" method="post">
        <label for="name">:الإسم</label><br>
        <input id="name" type="text" name="name" placeholder="الإسم"><br>
        <label for="email">:البريدالإلكتروني</label><br>
        <input id="email" type="email" name="email" placeholder="البريدالإلكتروني"><br>
        <label for="password">:كلمةالمرور</label><br>
        <input id="password" type="password" name="password" placeholder="كلمةالمرور"><br>
        <label for="confirm_password">:تأكيدكلمةالمرور</label><br>
        <input id="confirm_password" type="password" name="confirm_password" placeholder="تأكيدكلمةالمرور"><br>
        <label for="phone_number">:رقم الهاتف</label><br>
        <input id="phone_number" type="text" name="phone_number" placeholder="رقم الهاتف"><br>
        <label for="place">:المنطقة</label><br>
=======
    <div class="create">
      <div>
      <h1>إنشاءحساب</h1>
      <form action="" method="">
        <label for="name">:الإسم</label>
        <input id="name" type="text" name="name" placeholder="الإسم">
        <label for="email">:البريدالإلكتروني</label>
        <input id="email" type="email" name="email" placeholder="البري الإلكتروني">
        <label for="password">:كلمةالمرور</label>
        <input id="password" type="password" name="password" placeholder="كلمة المرور">
        <label for="confirm_password">:تأكيدكلمةالمرور</label>
        <input id="confirm_password" type="password" name="confirm_password" placeholder="تأكيد كلمةالمرور">
        <label for="phone_number">:رقم الهاتف</label>
        <input id="phone_number" type="text" name="phone_number" placeholder="رقم الهاتف">
        <label for="place">:المنطقة</label>
>>>>>>> ff1748cd1b6b7255a5985a99354128cee49096ca
        <input id="place" type="text" name="place" placeholder="المنطقة"><br>
        <button class="button" id="button">تسجيل الدخول</button>

      </form>
      </div>
    </div>
    
  </section>
</main>
<?php require('views/parts/footer.php') ?>