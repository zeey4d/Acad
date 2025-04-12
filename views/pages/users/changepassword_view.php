<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>

<main class="main_user">
  <section class="user" id="form_login">
    <h1>ChanegePassword</h1>
      <form class="group" action="/sessions_store" method="post">
      <div class="box_h">
        <label for="email"> : البريدالإلكتروني</label>
        <input id="email" type="text" name="email" placeholder="البريدالالكتروني"></div>
        <div class="box_h">
        <label for="password">ادخل كلمة المرور : </label>
        <input id="password" type="password" name="password" placeholder="كلمة المرور">\
        <label for="password">ادخل كلمة المرور الجديدة : </label>
        <input id="new_password" type="password" name="new_password">
        </div>
        <button class="btn_log_in" id="btn_log_in" name="change_password">Change</button>
        <div class="link_forgot_password_link_log_in">
          </div>
        </form>
        
  
  </section>
</main>
<?php require('views/parts/footer.php') ?>