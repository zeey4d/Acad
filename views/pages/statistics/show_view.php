<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

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
    background: conic-gradient(
      rgba(67, 12, 12, 0.5) 50% 50%,
      rgba(179, 37, 37, 0.5)  50% 50%
    );
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
      <div class="header">إحصاءات عامة</div>
      <div class="filters">
        <select id="categoryFilter">
          <option value="all">الاحصائيات جميع</option>
          <option value="projects">المشاريع</option>
          <option value="endowments">الاوقاف</option>
          <option value="campaigns">الحملات الخيريه</option>
          <option value="islamic">المصاريف الاسلامية</option>
        </select>
      </div>
      <div style="display: flex; width: 100%; justify-content: space-around;">
        <div>
          <h3>العدد الاجمالي</h3>
          <div class="pie-chart item-count"></div>
        </div>
        <div>
          <h3>اجمالي التبرعات</h3>
          <div class="pie-chart payments-count"></div>
        </div>
      </div>
      <div class="legend">
        <div class="legend-item"><div class="color-box" style="background:#80cbc4;"></div>المشاريع </div>
        <div class="legend-item"><div class="color-box" style="background:#1a237e;"></div> الاوقاف</div>
        <div class="legend-item"><div class="color-box" style="background:#3949ab;"></div> الحملات الخيريه</div>
        <div class="legend-item"><div class="color-box" style="background:#cfd8dc;"></div> المصاريف الاسلامية</div>
      </div>

      


      <div class="summary" id="summaryBox">
        <span class="summary-icon">📊</span>
        <div id="summaryTitle">أجمالي عدد التبرعات</div>
        <div id="summaryValue"><?= $users_statistics['donates_sum'] ?></div>
      </div>
    </div>
  </section>
</main>

<script>
  const statistics = {
    all: {
      title: "أجمالي عدد التبرعات",
      value: "<?= $users_statistics['donates_sum'] ?>",
      chart: "rgba(128, 203, 195, 0.46) 0% 40%, #b2dfdb 40% 65%, #cfd8dc 65% 78%, #3949ab 78% 88%, #1a237e 88% 96%, #00838f 96% 100%"
    },
    projects: {
      title: "إجمالي تبرعات المشاريع (عدد: <?= $projects_statistics['count']['count'] ?>)",
      value: "<?= $projects_statistics['donates_sum']['donates_sum'] ?>",
      chart: "#80cbc4 0% 100%"
    },
    endowments: {
      title: "إجمالي تبرعات الأوقاف (عدد: <?= $endowments_statistics['count']['count'] ?>)",
      value: "<?= $endowments_statistics['donates_sum']['donates_sum'] ?>",
      chart: "#1a237e 0% 100%"
    },
    campaigns: {
      title: "إجمالي تبرعات الحملات (عدد: <?= $campaigns_statistics['count']['count'] ?>)",
      value: "<?= $campaigns_statistics['donates_sum']['donates_sum'] ?>",
      chart: "#3949ab 0% 100%"
    },
    islamic: {
      title: "تبرعات المصاريف الإسلامية",
      value: "<?= $islamic_payments_statistics['users_paid_count']['users_paid_count'] ?>",
      chart: "#cfd8dc 0% 100%"
    }
  };

  const select = document.getElementById("categoryFilter");
  const summaryTitle = document.getElementById("summaryTitle");
  const summaryValue = document.getElementById("summaryValue");
  const pieChart = document.querySelector(".pie-chart");

  select.addEventListener("change", function () {
    const selected = select.value;
    const data = statistics[selected];

    summaryTitle.textContent = data.title;
    summaryValue.textContent = data.value;
    pieChart.style.background = `conic-gradient(${data.chart})`;
  });
</script>



<?php require('views/parts/footer.php') ?>