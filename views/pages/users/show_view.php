<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>
<main class="main_user">
  <!-- عرض حساب المستخدم -->
  <section  class="form_signup" id="form_your_account">
    <h1>البيانات الشخصية</h1>
    <div class="personal_data">
      <form action="" method="">
        <label for="name">:الإسم</label><br>
        <input id="name" type="text" name="name" placeholder="الإسم"><br>
        <label for="email">:البريدالإلكتروني</label><br>
        <input id="email" type="email" name="email" placeholder="البريدالإلكتروني"><br>
        <label for="phone_number">:رقم الهاتف</label><br>
        <input id="phone_number" type="text" name="phone_number" placeholder="رقم الهاتف"><br>
        <button class="btn_chang_password" id="btn_chang_password" name="btn_chang_password">تغيركلمةالمرور</button>
      </form>
    </div>
    <div class="image">
      <img src="" alt="">
      <button class="btn_image" id="btn_image" name="btn_image">إختياري</button>
    </div>
    <div class="links">
      <a class="donations" href="">إدارةالتبرعات</a>
      <a class="notifications" href="">إدارة الإشعارات</a>
      <a class="basket" href="">السلة<img src="" alt=""></a>
      
    </div>


  </section>
</main>
<?php require('views/parts/footer.php') ?>