<?php
require __DIR__ . "/../../middleware/Authorisation.php";
require __DIR__ . "/../../controllers/CategoryController.php";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../assets/css/dashboard/style.css" />
    <script
      src="https://kit.fontawesome.com/f01941449c.js"
      crossorigin="anonymous"
    ></script>
    <title>Dashboard</title>
  </head>
  <body>
    <div class="pages__content">
      <aside class="side__content">
        <header class="aside__header">
          <a href="./dashboard.php">
            <h1>MyBoard</h1>
          </a>
        </header>
        <div class="pages__links">
          <ul class="pages_list">
            <li class="page_item">
              <a href="./dashboard.php">
                <span><i class="fa-solid fa-chart-simple"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="page_item">
              <a href="./users.php">
                <span><i class="fa-solid fa-user"></i></span>
                <span>users</span>
              </a>
            </li>
            <li class="page_item">
              <a href="./articles.php">
                <span><i class="fa-solid fa-newspaper"></i></span>
                <span>Articles</span>
              </a>
            </li>
            <li class="page_item ">
              <a href="./tags.php">
                <span><i class="fa-solid fa-tag"></i></span>
                <span>tags</span>
              </a>
            </li>
            <li class="page_item active">
              <a href="./categories.php">
                <span><i class="fa-brands fa-dev"></i></span>
                <span>categories</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <main class="main__content">
      <header class="main__header">
                <nav class="navbar__content">
                <a href="../front/index.php">
                    <span><i class="fa-solid fa-house"></i></span>
                </a>
                <a href="../../controllers/Logout.php">
                    <span>
                            <i class="fa-solid fa-right-from-bracket"></i>
                    </span>
                </a>
                </nav>
            </header>

        <div class="cls__content">
          <div class="heading">
            <h1>Add new Category</h1>
          </div>
          <div class="add__cls">
            <form action="categories.php" method="post" class="form__content">
              <div class="form__input">
                <label for="category__name">Category Name</label>
                <input type="text" name="category__name" placeholder="Tag name" />
              </div>
              <div class="submit_btn">
                <button type="submit">Add</button>
              </div>
            </form>
          </div>
        </div>
        <section class="cls__section">
          <div class="heading">
            <h1>Categories list (<?= $total ?>)</h1>
          </div>
          <ul class="cls__list">
            <?php 

              foreach($categories as $category): ?>
                <li class="cls__card">
                  <div class="cls__name">
                    <span><?= $category["categoryName"] ?></span>
                  </div>
                  <div class="cls__management">
                    <span>
                      <a href="./updateCategory.php?id=<?= $category["categoryId"] ?>">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                    </span>
                    <span>
                      <a href="./categories.php?action=deleteCategory&catId=<?= $category["categoryId"] ?>">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
                    </span>
                  </div>
                </li>
                <?php 
                endforeach;
                ?>
          </ul>
        </section>
      </main>
    </div>
  </body>
</html>
