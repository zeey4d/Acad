<?php require('views/parts/head.php') ?>
<?php require('views/parts/navgtion.php') ?>

<main class="main_user">

  <!-- انشاء حساب جديد -->
  <section class="user" >
    
  <h1>إنشاءحساب</h1>
      
      <form class="group" action="" method="">
        <div class="box_h">
        <label for="name"> الاسم :</label>
        <input id="name" type="text" name="name" placeholder="الإسم"></div>
        <div class="box_h">
        <label for="email">البريد الالكتروني :</label>
        <input id="email" type="email" name="email" placeholder="البري الإلكتروني"></div>
        <div class="box_h">
        <label for="password">كلمة المرور :</label>
        <input id="password" type="password" name="password" placeholder="كلمة المرور"></div>
        <div class="box_h">
        <label for="confirm_password">تاكيد كلمة المرور</label>
        <input id="confirm_password" type="password" name="confirm_password" placeholder="تأكيد كلمةالمرور"></div>
        <div class="box_h">
        <label for="phone_number">رقم الهاتف</label>
        <input id="phone_number" type="text" name="phone_number" placeholder="رقم الهاتف"></div>
        <div class="box_h">
        <label for="place">المنطقة :</label>
        <input id="place" type="text" name="place" placeholder="المنطقة"><br></div>
        <button class="button" id="button">تسجيل الدخول</button>

      </form>
      
    
    
  </section>
</main>
<?php require('views/parts/footer.php') ?>