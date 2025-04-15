<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>
<style>
<style>
    body {
      margin: 0;
      font-family: 'Cairo', sans-serif;
      background-color: #ffffff;
      color: #0f2f3f;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      background-color: #d7e4e4;
      padding: 30px;
      border-radius: 12px;
      border: 1px solid #9bb7b7;
      text-align: center;
    }

    .header {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .filters {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    select {
      background-color: #2c5d63;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      font-size: 14px;
      cursor: pointer;
    }

    .pie-chart {
      width: 300px;
      height: 300px;
      margin: 0 auto 20px;
      border-radius: 50%;
    }

    .legend {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .legend-item {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .color-box {
      width: 15px;
      height: 15px;
      border-radius: 3px;
    }

    .summary {
      background-color: #d7e4e4;
      border: 1px solid #6b8e8e;
      padding: 15px;
      border-radius: 12px;
      display: inline-block;
    }

    .summary-icon {
      font-size: 24px;
      margin-left: 10px;
    }
  </style>
 <main>
  <section>
  <div class="container">
    <div class="header">إحصاءات عامة حسب المجالات المدعومة</div>
    <div class="filters">
      <select>
        <option value="all">جميع المجالات</option>
        <option value="اجتماعي">اجتماعي</option>
        <option value="تعليمي">تعليمي</option>
        <option value="تقني">تقني</option>
        <option value="غذائي">غذائي</option>
        <option value="صحي">صحي</option>
      </select>
    </div>
    <div class="pie-chart" style="
        background: conic-gradient(
        rgba(128, 203, 195, 0.46) 0% 40%,
        #b2dfdb 40% 65%,
        #cfd8dc 65% 78%,
        #3949ab 78% 88%,
        #1a237e 88% 96%,
        #00838f 96% 100%
      );
    "></div>
    <div class="legend">
      <div class="legend-item"><div class="color-box" style="background:#80cbc4;"></div> اجتماعي</div>
      <div class="legend-item"><div class="color-box" style="background:#1a237e;"></div> تعليمي</div>
      <div class="legend-item"><div class="color-box" style="background:#3949ab;"></div> تقني</div>
      <div class="legend-item"><div class="color-box" style="background:#cfd8dc;"></div> غذائي</div>
      <div class="legend-item"><div class="color-box" style="background:#b2dfdb;"></div> صحي</div>
    </div>
    <div class="summary">
      <span class="summary-icon">📊</span>
      إجمالـي الصرفـات <br />
      ٩٩٩,٩٤٩,٠٩٩ ريال سعودي
    </div>
  </div>
  </section>
</main>
<?php require('views/parts/footer.php') ?>