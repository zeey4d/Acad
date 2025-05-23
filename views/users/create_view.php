  <?php require('views/partials/head.php') ?>
  <?php require('views/partials/nav.php') ?>

  <section class="auth-section">
        <div class="container">
            <div class="auth-container">
                <div class="auth-image">
                    <img src="https://via.placeholder.com/500x400" alt="إنشاء حساب">
                    <div class="auth-image-content">
                        <h2>انضم إلى مجتمعنا العلمي!</h2>
                        <p>سجل معنا للاستفادة من جميع مميزات منصة أكاديميا لنشر الأبحاث العلمية</p>
                        <p>لديك حساب بالفعل؟ <a href="login.html">سجل دخول الآن</a></p>
                    </div>
                </div>
                <div class="auth-form">
                    <h2>إنشاء حساب جديد</h2>
                    <p>املأ النموذج لإنشاء حساب جديد</p>
                    
                    <form action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">الاسم الأول</label>
                                <input type="text" id="first_name" name="first_name" required placeholder="أدخل الاسم الأول">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" id="email" name="email" required placeholder="أدخل بريدك الإلكتروني">
                            <i class="fas fa-envelope"></i>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">كلمة المرور</label>
                            <input type="password" id="password" name="password" required placeholder="أدخل كلمة المرور">
                            <i class="fas fa-lock"></i>
                            <div class="password-strength">
                                <span class="strength-bar"></span>
                                <span class="strength-bar"></span>
                                <span class="strength-bar"></span>
                                <span class="strength-text">قوة كلمة المرور: ضعيفة</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="confirm_password">تأكيد كلمة المرور</label>
                            <input type="password" id="confirm_password" name="confirm_password" required placeholder="أعد إدخال كلمة المرور">
                            <i class="fas fa-lock"></i>
                        </div>
                        
                        <div class="form-group">
                            <label for="user_type">نوع المستخدم</label>
                            <select id="user_type" name="user_type" required>
                                <option value="">اختر نوع المستخدم</option>
                                <option value="researcher">باحث</option>
                                <option value="reviewer">محكم</option>
                                <option value="editor">محرر</option>
                                <option value="institution">مؤسسة</option>
                            </select>
                            <i class="fas fa-user-tag"></i>
                        </div>
                        
                        <div class="form-group terms">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">أوافق على <a href="#">شروط الاستخدام</a> و <a href="#">سياسة الخصوصية</a></label>
                        </div>
                        
                        <button type="submit" class="btn primary">إنشاء حساب</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

  <?php require('views/partials/footer.php') ?> 