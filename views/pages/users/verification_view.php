<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<main class="main_user">
  <!--  التحقق من الحساب   -->
  <section class="user" id="show_user">
    <h1>verification</h1>

    <form action="/users_store" method="POST">
    <div>
      <label for="verification_code">أدخل كود التحقق:</label>
      <input type="number" id="" class="" required name="verification_code" minlength="6" maxlength="6" placeholder="أدخل كود التحقق" oninput="this.value = this.value.slice(0, 6)">
    </div>
    
    <div>
      <button type="submit" name="submit">إرسال </button>
    </div>
      
    </form>
    <div>
      <a href="/users_verification" >إعادة إرسال الكود </a>
    </div>
  </section>
</main>


<?php require('views/parts/footer.php') ?>