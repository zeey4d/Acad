 <!-- (مقدمة الصفحه)بداية الصفحه  -->
 <header class="bg-white shadow">
     <!-- <?= $heading ?> -->
    <?php if(true): ?>
     <section class="bar-search">
         <div class="search-container">
             <form class="form-search" method="POST">
                 <input type="text"
                     name="search"
                     class="search-input"
                     placeholder="Search items..."
                     value="<?= htmlspecialchars($_POST['search'] ?? '') ?>">

                 <select name="filter" class="filter-select">
                     <option value="all" <?= ($_POST['filter'] ?? 'all') === 'all' ? 'selected' : '' ?>>All Categories</option>
                     <option value="electronics" <?= ($_POST['filter'] ?? '') === 'electronics' ? 'selected' : '' ?>>Electronics</option>
                     <option value="books" <?= ($_POST['filter'] ?? '') === 'books' ? 'selected' : '' ?>>Books</option>
                     <option value="clothing" <?= ($_POST['filter'] ?? '') === 'clothing' ? 'selected' : '' ?>>Clothing</option>
                 </select>

                 <button type="submit" class="my-items-btn">Search</button>
             </form>
             <?php if (!isset($_SESSION['user_id'])): ?>
                 <form action="" method="post" class="button">
                     <button type="submit">My Items</button>
                 </form>
             <?php endif; ?>

         </div>
     </section>
     <?php endif; ?>
 </header>