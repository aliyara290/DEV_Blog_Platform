<?php 

require __DIR__ . "/../../../controllers/ArticleControl.php";
// require __DIR__ . "/../../../controllers/TagControl.php";
Article::createNewArticle();
// $tags = Tag::showAllTags();
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
        <div class="search__bar">
          <input type="text" placeholder="Search for article..." />
        </div>
      </div>
      <nav class="navbar_content">
        <ul class="links_list">
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
          <li class="page_link">
            <a href="#">
              <button class="button__comp">Create Article</button>
            </a>
          </li>
          <li class="page_link">
            <div class="user_picture user__pic-nav">
              <div class="u__pic">
                <img src="../../../../assets/images/users/me.jpg" alt="" />
              </div>
            </div>
            <div class="acc_menu">
              <ul class="menu_list">
                <li class="menu_item">
                  <a href="./profile/user.html" class="acc_us">
                    <span> Ali Yara </span>
                    <span> @aliyara29 </span>
                  </a>
                </li>
                <div class="acc__line"></div>

                <li class="menu_item"><a href="#">Setting</a></li>
                <li class="menu_item"><a href="#">Create post</a></li>
                <li class="menu_item"><a href="#">Statistic</a></li>
                <div class="acc__line"></div>
                <li class="menu_item">
                  <button class="logout_us">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Log out</span>
                  </button>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <main class="create__article">

      <div class="create__article-content">
        <form action="new.php" method="post" class="article__form">

          <div class="art_pic">
              <img src="../../../../assets/images/by.gif" alt="" />
            </div>
            <div class="custom-file-input">
                <label for="file-upload" class="file-label">
                  <button class="file-button">Upload File</button>
                  <span class="file-name">No file chosen</span>
                </label>
                <input type="file" id="file-upload" name="article__cover" class="file-input" />
              </div>
              <div class="create_article-title">
                <textarea name="new_post_title" autocomplete="off" id="new_post_title" placeholder="New post title here..."></textarea>
              </div>
              <div class="create_article-description">
                <div id="description_editor"></div>
              </div>
              <div class="select__tags">
                <div class="art_heading">
                  <h4>Select Tags</h4>
                </div>
                <div class="tags_list">
                  <?php 

                  foreach($tags as $tag): ?>

                  <label>
                    <input type="checkbox" class="hidden-checkbox">
                    <span class="tag">#<span><?= $tag["tagName"]?></span></span>
                  </label>

                  <?php 
                  endforeach;
                  ?>
                </div>
              </div>  

              <div class="button__style">
                <button type="submit" name="create_article">
                  Post
                </button>
              </div>
        </form>
      </div>
    </main>
    <script>
  const quill = new Quill('#description_editor', {
    theme: 'snow'
  });
</script>
    <script src="../../../../assets/js/main.js"></script>
  </body>
</html>