<?php 
require __DIR__ . "/../../../controllers/ArticleController.php";
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: /deV.io/src/views/front/login.php");
  exit();
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../../assets/css/front/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/f01941449c.js"
      crossorigin="anonymous"
    ></script>
    <title>Dev.to platform</title>
  </head>
  <body>
  <header class="header_content">
      <div class="left__side-nav">
        <div class="logo">
          <a href="../index.php">

            <h1>Medium</h1>
          </a>
        </div>
      </div>
      <nav class="navbar_content">
        <ul class="links_list">
          <?php 

          if(isset($_SESSION["user"])): ?>
          
          <!-- <li class="page_link">
            <a href="../article/new.php">
              <button class="button__comp">Create Article</button>
            </a>
          </li> -->
          <li class="page_link">
            <div class="user_picture user__pic-nav">
            <div class="u__pic">
                <?php 
                if(isset($_SESSION["user"]["userPic"])):?>
                <img src="../../<?= $_SESSION["user"]["userPic"] ?>" alt="<?= $_SESSION["user"]["fullName"] ?>">
                <?php 
                else:
                  ?>
                  <span><?= substr($_SESSION["user"]["fullName"], 0, 1) ?></span>
                  <?php 
                  endif;
                  ?>
              </div>
            </div>
            <div class="acc_menu">
              <ul class="menu_list">
                <li class="menu_item">
                  <a href="../profile/user.php" class="acc_us">
                    <span> Ali Yara </span>
                    <span> @aliyara29 </span>
                  </a>
                </li>
                <div class="acc__line"></div>

                <li class="menu_item"><a href="../setting/profile.php">
                <span><i class="fa-solid fa-gear"></i></span>
                <span>Setting</span>
                </a></li>
                <li class="menu_item"><a href="./new.php">
                  <span><i class="fa-solid fa-newspaper"></i></span>
                  <span>Create post</span>
                  
                </a></li>
                <!-- <li class="menu_item"><a href="./statistic/statistic.php">
                <span><i class="fa-solid fa-chart-simple"></i></span>
                <span>Statistic</span>
                </a></li> -->



                <div class="acc__line"></div>
                <li class="menu_item">
                  <a href="../../../controllers/Logout.php">
                    <button class="logout_us">
                      <i class="fa-solid fa-right-from-bracket"></i>
                      <span>Log out</span>
                    </button>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <?php else: ?>
            <div class="logs_buttons">
            <li class="page_link">
              <a href="../login.php">
                <button class="button__comp button__border">Sign in</button>
              </a>
            </li>
            <li class="page_link">
              <a href="../register.php">
                <button class="button__comp">Sign up</button>
              </a>
            </li>
          </div>
          <?php 
          endif;
          ?>
        </ul>
      </nav>
    </header>
    <main class="create__article">

      <div class="create__article-content">
        <form action="../../../controllers/ArticleController.php" method="post" class="article__form" enctype="multipart/form-data">

          <!-- <div class="art_pic">
              <img src="../../../../assets/images/by.gif" alt="" />
            </div> -->
            <input type="hidden" name="author__id" value="<?= $_SESSION['user']['userId'] ?>">
            <div class="custom-file-input">
                <label for="file-upload" class="file-label">
                  <button class="file-button">Upload File</button>
                  <span class="file-name">No file chosen</span>
                </label>
                <input type="file" id="file-upload" name="featuredImage" class="file-input"/>
              </div>
              <div class="create_article-title">
                <textarea name="new_post_title" autocomplete="off" id="new_post_title" placeholder="New post title here..."></textarea>
              </div>
              <div class="create_article-description">
              <div class="art_heading">
                  <h4>Content</h4>
                </div>
                <textarea name="art__content-d" id="art__content-d" placeholder="Type your article content here..."></textarea>
              </div>
              <h1>Tags</h1>
              <select name="artcl__tags[]" multiple>
              <option disabled selected>Select Tags</option>
                <?php
                foreach($tags as $tag): ?>
                  <option value=<?= $tag["tagId"] ?>><?= $tag["tagName"] ?></option>
                <?php 
                  endforeach;
                ?>
              </select>
              <h1>Categories</h1>
              <select name="category_id" id="artcl__tags">
              <option disabled selected>Select Category</option>
              <?php
                  
                  foreach($categories as $category): ?>
                    <option value=<?= $category["categoryId"] ?>><?= $category["categoryName"] ?></option>
                  <?php 
                    endforeach;
                  ?>
              </select>
              

              <div class="button__style">
                <button type="submit" name="create_article">
                  Post
                </button>
              </div>
        </form>
      </div>
    </main>
    <script src="../../../../assets/js/main.js"></script>
  </body>
</html>