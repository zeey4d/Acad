<<<<<<< HEAD
<?php require('views/parts/head.php'); ?>
<?php require('views/parts/navgtion.php'); ?>
=======
جميل! راح أضيف لك أيقونة تحذير أنيقة بجانب كلمة "خطأ" في الرسالة المنبثقة باستخدام SVG مباشرة (ما تحتاج تحميل أي مكتبة خارجية).

إليك الكود بعد التعديل:
>>>>>>> main

<main style="min-height: calc(100vh - 100px); display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <?php
    $errors = [];

<<<<<<< HEAD
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // تحقق من البريد الإلكتروني
        if (empty($email)) {
            $errors[] = "يرجى إدخال البريد الإلكتروني.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "البريد الإلكتروني غير صحيح. يرجى إدخال بريد إلكتروني صالح.";
        }

        // تحقق من كلمة المرور
        if (empty($password)) {
            $errors[] = "يرجى إدخال كلمة المرور.";
        } elseif (strlen($password) < 6) {
            $errors[] = "كلمة المرور يجب أن تحتوي على 6 أحرف على الأقل.";
        }
    }
    ?>

    <!-- نافذة منبثقة لعرض الأخطاء -->
    <?php if (!empty($errors)): ?>
        <div class="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999;"></div>
        <div class="popup" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; background-color: #fff; border-radius: 12px; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3); text-align: center; z-index: 1000; max-width: 600px; animation: fadeIn 0.5s;">
            <h2 style="color:rgb(11, 59, 63); margin-bottom: 10px; font-size: 24px;">خطأ</h2>
            <p style="color: #333; font-size: 16px; margin-bottom: 20px;"><?php echo htmlspecialchars(implode('<br>', $errors)); ?></p>
            <button onclick="closePopup()" style="padding: 12px 20px; background-color: #00a7b5; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; transition: background-color 0.3s;">إغلاق</button>
        </div>
=======
---

<?php require('views/parts/head.php'); ?>
<?php require('views/parts/navgtion.php'); ?>

<main style="min-height: calc(100vh - 100px); display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <?php
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($email)) {
            $errors[] = "يرجى إدخال البريد الإلكتروني";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "البريد الإلكتروني غير صحيح. يرجى إدخال بريد إلكتروني صالح";
        }

        if (empty($password)) {
            $errors[] = "يرجى إدخال كلمة المرور";
        } elseif (strlen($password) < 6) {
            $errors[] = "كلمة المرور يجب أن تحتوي على 6 أحرف على الأقل";
        }
    }
    ?>

    <?php if (!empty($errors)): ?>
        <div class="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3); z-index: 999;"></div>
        <div class="popup" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; background-color: #fff; border-radius: 12px; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3); text-align: center; z-index: 1000; max-width: 600px; animation: fadeIn 0.5s;">
            
            <div style="display: flex; align-items: center; justify-content: center; gap: 10px;">
                <!-- SVG Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#d9534f" viewBox="0 0 24 24">
                    <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
                </svg>
                <h2 style="color:rgb(11, 59, 63); font-size: 24px; margin: 0;">خطأ</h2>
            </div>

            <p style="color: #333; font-size: 16px; margin: 15px 0;"><?php echo implode('<br>', array_map('htmlspecialchars', $errors)); ?></p>
            
            <button onclick="closePopup()" style="padding: 12px 20px; background-color: #00a7b5; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; transition: background-color 0.3s;">إغلاق</button>
        </div>

>>>>>>> main
        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translate(-50%, -60%);
                }
                to {
                    opacity: 1;
                    transform: translate(-50%, -50%);
                }
            }
            .popup button:hover {
                background-color: rgb(8, 47, 57);
            }
        </style>
    <?php endif; ?>
</main>

<?php require('views/parts/footer.php'); ?>

<script>
<<<<<<< HEAD
    // إغلاق النافذة المنبثقة
=======
>>>>>>> main
    function closePopup() {
        document.querySelector('.popup').style.display = 'none';
        document.querySelector('.overlay').style.display = 'none';
    }
</script>