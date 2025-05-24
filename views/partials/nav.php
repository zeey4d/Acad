<header>
        <div class="container">
            <div class="logo">
                <h1>أكاديميا</h1>
                <p>منصة النشر العلمي الرائدة</p>
            </div>
            <nav>
                <ul>
                    <li><a href="/" class="active">الرئيسية</a></li>
                    <li><a href="/research">الأبحاث</a></li>
                    <!-- <li><a href="/contact">المجلات</a></li> -->
                    <!-- <li><a href="">المؤتمرات</a></li> -->
                    <li><a href="/about">عن المنصة</a></li>
                    <li><a href="/contact">اتصل بنا</a></li>
                </ul>
            </nav>

            <form action="/sessions_destroy" class="but_sgin" method="post">

            <?php if ($_SESSION['user'] ?? false) : ?>
             <button class="btn register" >تسجيل الخروج</button>
            </form>
              <?php else : ?>
             <div class="auth-buttons">
                <a href="/cart_view" class="active">المفضلة</a>
                <a class="btn login"  href="/users_index">تسجيل الدخول</a>
                <a class="btn register" href="/users_create">تسجيل جديد</a>
            </div>
            <?php endif ?>


        </div>
</header>