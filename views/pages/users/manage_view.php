<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main class="main_manage">
  <section class="section_manage">
    <a class="add-link" href="/users_create">إضافة</a>

    <!-- جدول الحملات الحالية -->
    <h2>المستخدمين </h2>
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
          <th>اسم المستخدم</th>
          <th>نوع المستخدم</th>
          <th>الايميل </th>
          <th> المبلغ المتبرع به</th>
          <!-- <th>التقارير</th> -->
          <!-- <th>الخيارات</th> -->
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
          <tr>
            <td><input type="checkbox" class="select-user"></td>
            <td><img src="views/media/images/<?= htmlspecialchars($user['photo'] ?? "default.png") ?>" alt="شعار المستخدم" class="user-logo"></td>
            <td><?= htmlspecialchars($user['username']) ?>
              <nav class="options">
                <ul>
                  <li>
                    <form action="/users_show" method="get">
                      <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                      <button type="submit">عرض</button>
                    </form>
                  </li>
                  <li>
                    <form action="/users_edit" method="get">
                      <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                      <button type="submit">تعديل</button>
                    </form>
                  </li>
                  <li>
                    <form action="/users_destroy" method="post">
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                      <button type="submit">حذف</button>
                    </form>
                  </li>
                  <li>
                    <form action="/notifications_create" method="get">
                      <input type="hidden" name="" value="">
                      <input type="hidden" name="user_id" value="<?= htmlspecialchars($campaign['user_id']) ?>">
                      <button type="submit">اشعار</button>
                    </form>
                  </li>
                </ul>
              </nav>
            </td>
            <td><?= htmlspecialchars($user['type']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><span>$</span></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </section>
</main>
<?php require('views/parts/footer.php') ?>