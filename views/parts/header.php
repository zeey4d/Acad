 <!-- (مقدمة الصفحه)بداية الصفحه  -->
 <header class="bg-white_shadow">
     <!-- <?= $heading ?> -->
    <?php if(true): ?>
     <section class="bar-search">
         <div class="search-container">
             <form class="form-search" method="POST">
                 <input type="text"
                     name="search"
                     class="search-input"
                     placeholder="ابحث هنا "
                     value="<?= htmlspecialchars($_POST['search'] ?? '') ?>">
                     
                     <button type="submit" class="my-items-btn">بحث</button>
                     
                 <select name="filter" class="filter-select">
                     <option value="all" <?= ($_POST['filter'] ?? 'all') === 'all' ? 'selected' : '' ?>>الجميع</option>
                     <option value="electronics" <?= ($_POST['filter'] ?? '') === 'electronics' ? 'selected' : '' ?>>صحيه</option>
                     <option value="books" <?= ($_POST['filter'] ?? '') === 'books' ? 'selected' : '' ?>>تعليميه</option>
                     <option value="clothing" <?= ($_POST['filter'] ?? '') === 'clothing' ? 'selected' : '' ?>>اجتماعيه</option>
                 </select>

             </form>
             <?php if (!isset($_SESSION['user_id'])): ?>
                 <form action="" method="post" class="button">
                     <button type="submit">خاصه بك</button>
                 </form>
             <?php endif; ?>

         </div>
     </section>
     <?php endif; ?>
 </header>