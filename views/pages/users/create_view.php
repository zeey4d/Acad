<?php require('views/parts/head.php') ?>
<?php require('views/parts/navgtion.php') ?>

<main class="main_user">

  <!-- انشاء حساب جديد -->
  <section class="user" >
    
    <div class="create">
      <div>
      <h1>إنشاءحساب</h1>
      <form  class="group" action="users_store" method="POST">
       <div class="box_h">
        <label for="name">:الإسم</label>
        <input id="name" type="text" name="username" placeholder="الإسم">
        <div class="box_h">
        <label for="email">:البريدالإلكتروني</label>
        <input id="email" type="email" name="email" placeholder="البريد الإلكتروني">
        <label for="password">:كلمةالمرور</label>
        <div class="box_h">
        <input id="password" type="password" name="password" placeholder="كلمة المرور">
        <label for="confirm_password">:تأكيدكلمةالمرور</label>
        <div class="box_h">
        <input id="confirm_password" type="password" name="confirm_password" placeholder="تأكيد كلمةالمرور">
        <div class="box_h">
        <label for="phone_number">:رقم الهاتف</label>
        <input id="phone_number" type="text" name="phone" placeholder="رقم الهاتف">
        <div class="box_h">
        <label for="place">:الدولة</label>
        <input id="place" type="text" name="country" placeholder="الدولة"><br>
        <div class="box_h">
        <label for="place">:المدينه</label>
        <input id="place" type="text" name="city" placeholder="المدينه"><br>
        <div class="box_h">
        <label for="place">:الشارع</label>
        <input id="place" type="text" name="street" placeholder="الشارع"><br>
        <button class="button" id="button">تسجيل الدخول</button>

      </form>
      
    
    
  </section>
</main>
<?php require('views/parts/footer.php') ?>