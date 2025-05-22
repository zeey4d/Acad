   <?php require('partials/head.php') ?>
  <?php require('partials/nav.php') ?>
  <?php require('partials/header.php') ?>
    <?php require('partials/adminBar.php') ?>
    <section class="manage-research" style="margin-top: 100px;">
        <div class="container">
            <div class="page-header">
                <h1><i class="fas fa-tasks"></i> إدارة الأبحاث</h1>
                <nav class="breadcrumb">
                    <a href="index.html">الرئيسية</a>
                    <span>/</span>
                    <a href="profile.html">حسابي</a>
                    <span>/</span>
                    <span>إدارة الأبحاث</span>
                </nav>
            </div>

            <div class="research-actions">
                <a href="/create" class="btn primary"><i class="fas fa-plus"></i> إضافة بحث جديد</a>
                <div class="search-filter">
                    <input type="text" id="searchResearch" placeholder="ابحث في أبحاثك...">
                    <select id="filterStatus">
                        <option value="">كل الحالات</option>
                        <option value="published">منشور</option>
                        <option value="under_review">قيد التحكيم</option>
                        <option value="draft">مسودة</option>
                        <option value="rejected">مرفوض</option>
                    </select>
                </div>
            </div>

            <div class="research-table-container">
                <table id="researchTable" class="display">
                    <thead>
                        <tr>
                            <th>عنوان البحث</th>
                            <th>المجلة</th>
                            <th>الحالة</th>
                            <th>تاريخ الإضافة</th>
                            <th>المشاهدات</th>
                            <th>التحميلات</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="research-details.html">تطوير خوارزميات التعلم العميق لتحليل الصور الطبية</a>
                            </td>
                            <td>المجلة الدولية للذكاء الاصطناعي في الطب</td>
                            <td><span class="status-badge published">منشور</span></td>
                            <td>15/05/2023</td>
                            <td>1,245</td>
                            <td>328</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit" title="تعديل"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon stats" title="الإحصائيات"><i class="fas fa-chart-bar"></i></button>
                                    <button class="btn-icon delete" title="حذف"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="research-details.html">تأثير النظام الغذائي على مقاومة الإنسولين</a>
                            </td>
                            <td>مجلة الدراسات الطبية المتقدمة</td>
                            <td><span class="status-badge under-review">قيد التحكيم</span></td>
                            <td>10/05/2023</td>
                            <td>890</td>
                            <td>210</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit" title="تعديل"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon stats" title="الإحصائيات"><i class="fas fa-chart-bar"></i></button>
                                    <button class="btn-icon delete" title="حذف"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="research-details.html">تصميم مواد نانوية لتحلية المياه بكفاءة عالية</a>
                            </td>
                            <td>المجلة العربية للهندسة والعلوم التطبيقية</td>
                            <td><span class="status-badge published">منشور</span></td>
                            <td>05/05/2023</td>
                            <td>1,532</td>
                            <td>412</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit" title="تعديل"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon stats" title="الإحصائيات"><i class="fas fa-chart-bar"></i></button>
                                    <button class="btn-icon delete" title="حذف"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="research-details.html">تحسين أداء خوارزميات تعلم الآلة باستخدام تقنيات التعلم التعزيزي</a>
                            </td>
                            <td>مجلة علوم الحاسوب والتقنيات الحديثة</td>
                            <td><span class="status-badge rejected">مرفوض</span></td>
                            <td>20/04/2023</td>
                            <td>210</td>
                            <td>58</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit" title="تعديل"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon stats" title="الإحصائيات"><i class="fas fa-chart-bar"></i></button>
                                    <button class="btn-icon delete" title="حذف"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="research-details.html">تأثير التغيرات المناخية على انتشار الأمراض المعدية</a>
                            </td>
                            <td>-</td>
                            <td><span class="status-badge draft">مسودة</span></td>
                            <td>10/04/2023</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit" title="تعديل"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon stats" title="الإحصائيات"><i class="fas fa-chart-bar"></i></button>
                                    <button class="btn-icon delete" title="حذف"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- نموذج حذف البحث (مخفى بشكل افتراضي) -->
            <div id="deleteModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>تأكيد الحذف</h3>
                        <button class="close-modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>هل أنت متأكد أنك تريد حذف هذا البحث؟ هذا الإجراء لا يمكن التراجع عنه.</p>
                        <p><strong>عنوان البحث:</strong> <span id="researchToDelete"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn cancel-btn">إلغاء</button>
                        <button class="btn danger-btn">حذف البحث</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <!-- نفس الفوتر السابق -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        // تفعيل القائمة المنسدلة للمستخدم
        const userAvatar = document.querySelector('.user-avatar');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        userAvatar.addEventListener('click', () => {
            dropdownMenu.classList.toggle('show');
        });

        // إغلاق القائمة عند النقر خارجها
        document.addEventListener('click', (e) => {
            if (!userAvatar.contains(e.target)) {
                dropdownMenu.classList.remove('show');
            }
        });

        // تفعيل جدول الأبحاث
        $(document).ready(function() {
            $('#researchTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/ar.json'
                },
                responsive: true,
                order: [[3, 'desc']]
            });

            // البحث والتصفية
            $('#searchResearch').on('keyup', function() {
                $('#researchTable').DataTable().search(this.value).draw();
            });

            $('#filterStatus').on('change', function() {
                $('#researchTable').DataTable().column(2).search(this.value).draw();
            });
        });

        // إدارة النموذج المنبثق للحذف
        const deleteButtons = document.querySelectorAll('.btn-icon.delete');
        const deleteModal = document.getElementById('deleteModal');
        const closeModal = document.querySelector('.close-modal');
        const cancelBtn = document.querySelector('.cancel-btn');
        const researchToDelete = document.getElementById('researchToDelete');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const researchTitle = this.closest('tr').querySelector('td a').textContent;
                researchToDelete.textContent = researchTitle;
                deleteModal.style.display = 'block';
            });
        });

        closeModal.addEventListener('click', () => {
            deleteModal.style.display = 'none';
        });

        cancelBtn.addEventListener('click', () => {
            deleteModal.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target === deleteModal) {
                deleteModal.style.display = 'none';
            }
        });

        // هنا يمكنك إضافة كود الحذف الفعلي عند النقر على زر الحذف
        document.querySelector('.danger-btn').addEventListener('click', function() {
            alert('تم حذف البحث بنجاح');
            deleteModal.style.display = 'none';
            // هنا يمكنك إضافة كود AJAX لحذف البحث من قاعدة البيانات
        });
    </script>

<?php require('views/partials/footer.php') ?> 