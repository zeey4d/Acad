<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_manage">

      
        <!-- أزرار الإدارة -->
        <!-- <div class="management-buttons">
          <button id="add-campaign">إضافة حملة تبرع</button>
           <button id="delete-selected">حذف المحددين</button>
          <a href="/charity_projects_create"> إضافة حملة تبرع</a>
        </div> --> 
      
       
      <section class="section_manage">
        <!-- جدول الحملات الحالية -->
        <a href="#" id="add-campaign">إضافة حملة تبرع</a>

        <h1>إدارة حملات التبرع الإنسانية</h1>

        <h2>الحملات الحالية</h2>
        <!-- شريط الأحداث -->

        <!-- <section class="bar_action_manage">
          <button class="btn_stopping" name="btn_stopping">إيقاف</button>
          <button class="btn_post_notifications" name="btn_post_notifications">نشر اشعارات</button>
          <button class="btn_filter" name="btn_filter">فلترة</button>
          <button class="btn_search" name="btn_search">بحث</button>
        </section> -->
        <table class="campaigns-table">
          <thead>
            <tr>
              <th><input type="checkbox" id="select-all"></th>
              <th>الشعار</th>
              <th>اسم الحملة</th>
              <th>وصف الحملة</th>
              <th>نوع الحملة</th>
              <th>المبلغ المستهدف / المجموع</th>
              <th>تاريخ التسجيل/ الانتهاء</th>
              <!-- <th>التقارير</th> -->
              <!-- <th>الخيارات</th> -->
            </tr>
          </thead>
          <tbody>

          <?php foreach ($projects as $project): ?>

            <tr>
              <td><input type="checkbox" class="select-campaign"></td>
              <td><img src="views/media/images/<?= htmlspecialchars($projects['photo'] ?? "11.png") ?>" alt="شعار الحملة" class="campaign-logo"></td>
              <td><?= htmlspecialchars($project['name']) ?>
              <nav class="options">
        <ul>
            <li>
                <form action="/islamic_endowments_manage" method="post" type="hidden" name="" value=""><button type="submit" >عرض</button></form>
            </li>
            <li>
                <form action="/charity_projects_manage" method="get"><input type="hidden" name="" value=""><button type="submit" >تعديل</button></form>
            </li>
            <li>
                <form action="/notifications_manage" method="get"><input type="hidden" name="" value=""><button type="submit" style="    color: red;" >حدف</button></form>
            </li>
            <li>
                <form action="/users_manage" method="get"><input type="hidden" name="" value=""><button type="submit">اشعار</button></form>
            </li>

        </ul>
    </nav>              
              </td>
              <td><?= htmlspecialchars($project['short_description']) ?></td>
              <td>إغاثة</td>
              <td><span><?= htmlspecialchars($project['cost']) ?>$</span> / <span><?= htmlspecialchars($project['collected_money']) ?>$</span></td>
              <td><span><?= htmlspecialchars($project['start_at']) ?></span> - <span><?= htmlspecialchars($project['end_at']) ?></span></td>
              <!-- <td><button class="show_color_green">عرض</button></td> -->
              <!-- <td>
                <div class="dropdown">
                  <button class="dropdown-btn">خيارات</button>
                  <div class="dropdown-content">
                    <a href="#" class="btn_post">نشر إشعار</a>
                    <a href="#" class="btn_modify">تعديل</a>
                    <a href="#" class="btn_add">إضافة</a>
                    <a href="#" class="btn_stop">إيقاف</a>
                    <a href="#" class="view-reports">عرض التقارير</a>
                    <a href="#" class="add-report">إضافة تقرير</a>
                  </div>
                </div>
              </td> -->
            </tr>

            <?php endforeach; ?>

          </tbody>
        </table>
      
   
        </section>
      </main>
<?php require('views/parts/footer.php') ?>