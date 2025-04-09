<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_islamic_payments_zakat">
  <section class="form_zakat">
  <!-- لحسابة  العقيعه-->
   <!-- Form Section -->
   <form action="">
      <h2>احسب العقيقة</h2>

      <!-- اختيار نوع المولود -->
      <label>نوع المولود :</label>
      <div class="type-options">
        <div class="option-box" data-type="ذكر">ذكر</div>
        <div class="option-box" data-type="أنثى">أنثى</div>
      </div>

      <input type="hidden" id="babyType" name="babyType">

      <!-- عدد المواليد -->
      <div class="input-group">
        <label for="babiesCount">عدد المواليد</label>
        <input type="number" id="babiesCount" name="babiesCount" required min="1">
      </div>

      <!-- زر الحساب -->
      <button type="button">احسب العقيقة</button>

      <!-- النتيجة -->
      <input type="text" placeholder="ناتج العقيقه ">
    </form>
  </section>
    
  <section >
  <!-- تعريف عام  -->
  <div class="info-section">
      <h2>ما هي العقيقة؟</h2>
      <p>
        العقيقة هي ذبح شاة أو أكثر عن المولود في اليوم السابع من ولادته. وهي سنة مؤكدة، ولها العديد من الفوائد.
      </p>

      <h3>كيفية إخراج العقيقة:</h3>
      <ul>
        <li>يجب ذبح شاة عن المولود الذكر.</li>
        <li>يجب ذبح شاة عن المولودة الأنثى.</li>
        <li>يفضل أن تتم العقيقة في اليوم السابع من ولادة المولود.</li>
        <li>يجب أن تكون الشاة سليمة وصحية.</li>
      </ul>

      <h3>فوائد العقيقة:</h3>
      <ul>
        <li>تحقيق سنة النبي صلى الله عليه وسلم.</li>
        <li>إطعام الفقراء والمحتاجين.</li>
        <li>تحقيق الفرح والسرور للمولود وأسرته.</li>
      </ul>

      <h3>أحكام العقيقة:</h3>
      <ul>
        <li>العقيقة سنة مؤكدة عن المولود الذكر والأنثى.</li>
        <li>يمكن توزيع اللحم على الفقراء أو الأهل والأصدقاء.</li>
      </ul>
    </div>
  </section>
</main>
<?php require('views/parts/footer.php') ?>