<?php
require_once '../config/auth.php'; // التحقق من صلاحيات المدير
require_once '../models/User.php';
require_once '../models/UserPermission.php';

$db = new PDO('mysql:host=localhost;dbname=academia_db', 'username', 'password');
$userModel = new User($db);
$permissionModel = new UserPermission($db);

// معالجة عمليات الإدارة
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add_user':
                // معالجة إضافة مستخدم جديد
                break;
            case 'edit_user':
                // معالجة تعديل مستخدم
                break;
            case 'delete_user':
                // معالجة حذف مستخدم
                break;
            case 'change_status':
                // معالجة تغيير حالة المستخدم
                break;
        }
    }
}

// الحصول على قائمة المستخدمين
$users = $userModel->getAll();
$userTypes = ['researcher' => 'باحث', 'reviewer' => 'محكم', 'editor' => 'محرر', 'admin' => 'مدير'];
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المستخدمين - أكاديميا</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    <?php include '../admin/header.php'; ?>

    <section class="admin-content">
        <div class="container">
            <div class="page-header">
                <h1><i class="fas fa-users-cog"></i> إدارة المستخدمين</h1>
                <nav class="breadcrumb">
                    <a href="index.php">لوحة التحكم</a>
                    <span>/</span>
                    <span>إدارة المستخدمين</span>
                </nav>
            </div>

            <div class="admin-actions">
                <button class="btn primary" id="addUserBtn"><i class="fas fa-plus"></i> إضافة مستخدم جديد</button>
                <div class="search-filter">
                    <input type="text" id="searchUsers" placeholder="ابحث عن مستخدم...">
                    <select id="filterType">
                        <option value="">كل الأنواع</option>
                        <option value="researcher">باحثون</option>
                        <option value="reviewer">محكمون</option>
                        <option value="editor">محررون</option>
                        <option value="admin">مديرون</option>
                    </select>
                    <select id="filterStatus">
                        <option value="">كل الحالات</option>
                        <option value="1">نشط</option>
                        <option value="0">غير نشط</option>
                    </select>
                </div>
            </div>

            <div class="users-table-container">
                <table id="usersTable" class="display">
                    <thead>
                        <tr>
                            <th>الصورة</th>
                            <th>الاسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>النوع</th>
                            <th>الحالة</th>
                            <th>تاريخ التسجيل</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <div class="user-avatar">
                                    <img src="<?= $user['profile_picture'] ? '../uploads/' . $user['profile_picture'] : '../images/default-avatar.jpg' ?>" alt="صورة المستخدم">
                                </div>
                            </td>
                            <td><?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><?= $userTypes[$user['user_type']] ?? $user['user_type'] ?></td>
                            <td>
                                <span class="status-badge <?= $user['is_active'] ? 'active' : 'inactive' ?>">
                                    <?= $user['is_active'] ? 'نشط' : 'غير نشط' ?>
                                </span>
                            </td>
                            <td><?= date('Y/m/d', strtotime($user['created_at'])) ?></td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit" title="تعديل" data-id="<?= $user['id'] ?>">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-icon permissions" title="الصلاحيات" data-id="<?= $user['id'] ?>">
                                        <i class="fas fa-user-shield"></i>
                                    </button>
                                    <button class="btn-icon <?= $user['is_active'] ? 'deactivate' : 'activate' ?>" 
                                            title="<?= $user['is_active'] ? 'تعطيل' : 'تفعيل' ?>" 
                                            data-id="<?= $user['id'] ?>">
                                        <i class="fas <?= $user['is_active'] ? 'fa-user-slash' : 'fa-user-check' ?>"></i>
                                    </button>
                                    <button class="btn-icon delete" title="حذف" data-id="<?= $user['id'] ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- نموذج إضافة/تعديل مستخدم -->
    <div id="userModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">إضافة مستخدم جديد</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="userForm">
                    <input type="hidden" id="userId" name="id" value="">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">الاسم الأول*</label>
                            <input type="text" id="firstName" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">الاسم الأخير*</label>
                            <input type="text" id="lastName" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">البريد الإلكتروني*</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="username">اسم المستخدم*</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="userType">نوع المستخدم*</label>
                            <select id="userType" name="user_type" required>
                                <option value="">اختر نوع المستخدم</option>
                                <option value="researcher">باحث</option>
                                <option value="reviewer">محكم</option>
                                <option value="editor">محرر</option>
                                <option value="admin">مدير</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">رقم الهاتف</label>
                            <input type="text" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="university">الجامعة/المؤسسة</label>
                        <input type="text" id="university" name="university">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="department">القسم</label>
                            <input type="text" id="department" name="department">
                        </div>
                        <div class="form-group">
                            <label for="position">المنصب</label>
                            <input type="text" id="position" name="position">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bio">السيرة الذاتية</label>
                        <textarea id="bio" name="bio" rows="3"></textarea>
                    </div>
                    <div class="form-group" id="passwordField">
                        <label for="password">كلمة المرور*</label>
                        <input type="password" id="password" name="password" required>
                        <div class="hint">يجب أن تحتوي كلمة المرور على 8 أحرف على الأقل</div>
                    </div>
                    <div class="form-group">
                        <label for="profilePicture">صورة الملف الشخصي</label>
                        <input type="file" id="profilePicture" name="profile_picture" accept="image/*">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn cancel-btn">إلغاء</button>
                <button class="btn primary" id="saveUserBtn">حفظ</button>
            </div>
        </div>
    </div>

    <!-- نموذج إدارة الصلاحيات -->
    <div id="permissionsModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>إدارة الصلاحيات</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="user-info">
                    <div class="user-avatar">
                        <img id="permUserAvatar" src="../images/default-avatar.jpg" alt="صورة المستخدم">
                    </div>
                    <div class="user-details">
                        <h4 id="permUserName"></h4>
                        <p id="permUserEmail"></p>
                        <p id="permUserType"></p>
                    </div>
                </div>
                <div class="permissions-list">
                    <h4>الصلاحيات المتاحة</h4>
                    <div class="permissions-grid">
                        <!-- سيتم ملؤها بواسطة JavaScript -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn cancel-btn">إلغاء</button>
                <button class="btn primary" id="savePermissionsBtn">حفظ التغييرات</button>
            </div>
        </div>
    </div>

    <!-- نموذج تأكيد الحذف -->
    <div id="confirmModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>تأكيد الحذف</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>هل أنت متأكد أنك تريد حذف هذا المستخدم؟ هذا الإجراء لا يمكن التراجع عنه.</p>
                <p><strong>اسم المستخدم:</strong> <span id="userToDelete"></span></p>
            </div>
            <div class="modal-footer">
                <button class="btn cancel-btn">إلغاء</button>
                <button class="btn danger-btn">حذف المستخدم</button>
            </div>
        </div>
    </div>

    <?php include '../admin/footer.php'; ?>


