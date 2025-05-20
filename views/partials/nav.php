<header>
        <div class="container">
            <div class="logo">
                <h1>أكاديميا</h1>
                <p>منصة النشر العلمي الرائدة</p>
            </div>
            <nav>
                <ul>
                    <li><a href="/" class="active">الرئيسية</a></li>
                    <li><a href="#">الأبحاث</a></li>
                    <li><a href="#">المجلات</a></li>
                    <li><a href="#">المؤتمرات</a></li>
                    <li><a href="#">عن المنصة</a></li>
                    <li><a href="#">اتصل بنا</a></li>
                </ul>
            </nav>
            <?php if ($_SESSION['user'] ?? false) : ?>
              <?php else : ?>

            <div class="auth-buttons">
                <a href="/cart_view" class="active">المفضلة</a>
                <a class="btn login"  href="/users_index">تسجيل الدخول</a>
                <a class="btn register" href="/users_create">تسجيل جديد</a>
            </div>
            <?php endif ?>

        </div>
</header>