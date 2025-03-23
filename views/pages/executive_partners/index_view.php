<?php require('views/parts/head.php') ?>
<?php require('views/parts/adminbar.php') ?>
<?php require('views/parts/navgtion.php') ?>
<?php require('views/parts/header.php') ?>

<main>
    <!-- شريط الافعال -->
    <section class="bar_action">

    </section>



    <main class="main_executive_partners_index">

        <!-- أزرار الإدارة -->
        <!-- <div class="management-buttons">

            <form action="" method="get">

            </form>
            <button id="delete-selected">حذف المحددين</button>
            <a href="/executive_partners_create">
                <button id="add-partner">إضافة شريك</button>
            </a>

        </div> -->

        <!-- جدول الشركاء -->
        <section class="executive_partners_index">
        <h1 style=" margin: var(--margin-xl);    font-size: var(--font-size-xl); ">إدارة الشراكات</h1>

        <table class="partners-table">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all"></th>
                    <th>الشعار</th>
                    <th>اسم الشريك</th>
                    <th>الوصف</th>
                    <!-- <th>الخيارات</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" class="select-partner"></td>
                    <td><img src="logo1.png" alt="شعار الشريك 1" class="partner-logo"></td>
                    <td>شركة التقنية
                    <nav class="options">
        <ul>
            <li>
                <form action="/islamic_endowments_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit">ارسال بريد الكتروني</a></form>
            </li>
            <li>
                <form action="/charity_projects_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit">تعديل الشريك</a></form>
            </li>
            <li>
                <form action="/charity_campaigns_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit" style="color: red; ">حذف شريك</a></form>
            </li>
            <li>
                <form action="/notifications_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit">عرض تقرير</a></form>
            </li>
            <li>
                <form action="/users_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit">اضاقة تقرير</a></form>
            </li>

        </ul>
    </nav</td>
                    <td>وصف قصير عن الشريك الأول.</td>
                    <!-- <td>
                        <div class="dropdown">
                            <button class="dropdown-btn">خيارات</button>
                            <div class="dropdown-content">
                                <a href="#" class="send-email">إرسال بريد إلكتروني</a>
                                <a href="#" class="edit-partner">تعديل الشريك</a>
                                <a href="#" class="delete-partner">حذف الشريك</a>
                                <a href="#" class="view-reports">عرض التقارير</a>
                                <a href="#" class="add-report">إضافة تقرير</a>
                            </div>
                        </div>
                    </td> -->
                </tr>
                <tr>
                    <td><input type="checkbox" class="select-partner"></td>
                    <td><img src="views/media/uploads/67dcbd064e6894.78416477.jpg" alt="شعار الشريك 2" class="partner-logo"></td>
                    <td>شركة التعليم     
                    <nav class="options">
        <ul>
            <li>
                <form action="/islamic_endowments_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit">ارسال بريد الكتروني</a></form>
            </li>
            <li>
                <form action="/charity_projects_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit">تعديل الشريك</a></form>
            </li>
            <li>
                <form action="/charity_campaigns_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit" style="color: red; ">حذف شريك</a></form>
            </li>
            <li>
                <form action="/notifications_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit">عرض تقرير</a></form>
            </li>
            <li>
                <form action="/users_manage" method="get"><input type="hidden" name="" value=""><a href="#" type="submit">اضاقة تقرير</a></form>
            </li>

        </ul>
    </nav></td>
                    <td>وصف قصير عن الشريك الثاني.</td>
                    
                    <!-- <td>
                        <div class="dropdown">
                            <button class="dropdown-btn">خيارات</button>
                            <div class="dropdown-content">
                                <a href="#" class="send-email">إرسال بريد إلكتروني</a>
                                <a href="#" class="edit-partner">تعديل الشريك</a>
                                <a href="#" class="delete-partner">حذف الشريك</a>
                                <a href="#" class="view-reports">عرض التقارير</a>
                                <a href="#" class="add-report">إضافة تقرير</a>
                            </div>
                        </div>
                    </td> -->
                </tr>
            </tbody>
        </table>
        </section>

        <!-- بطاقات الشركا التنفيذيين -->
        <section class="container">
            <div class="card_executive_partners">

            </div>
        </section>
    </main>



