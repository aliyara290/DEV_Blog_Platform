<?php 
// session_start();
require __DIR__ . "/../../../controllers/ProfileController.php";
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
          
          <li class="page_link">
            <a href="../article/new.php">
              <button class="button__comp">Create Article</button>
            </a>
          </li>
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

    <main class="profile__content">
      <div class="prof__background">
      </div>
      <div class="user__port-det">
      
        <header class="profile_header">
          <div class="prof__user-pic">
            <?php 
            if(isset($portfolio["picture"])): ?>
            <img src="../../<?= $portfolio["picture"]?>" alt="<?= $portfolio["firstName"] . " " . $portfolio["lastName"]?>" />
            <?php 
            else:
            ?>
             <span><?= substr($portfolio["firstName"], 0, 1) . substr($portfolio["lastName"], 0, 1) ?></span>
             <?php
             endif;
              ?>
          </div>
          <div class="prof__edit-btn">
            <a href="../setting/profile.php?id=<?= $portfolio["id"]?>">
              <button class="button__comp">Edit profile</button>
            </a>
          </div>
          <div class="profile_header-details">
            <div class="prof__header-fullname">
              <h1><?= $portfolio["firstName"] . " " . $portfolio["lastName"]?></h1>
            </div>
              <?php 
              if(isset($portfolio["bio"])): ?>
            <div class="prof__header-bio">
              <p>
              <?= $portfolio["bio"]?>
              </p>
            </div>
            <?php
            endif;
            ?>
            <div class="acc__line"></div>
            <div class="prof__header-bottom">
              <?php 
              if(isset($portfolio["work"])): ?>
              <div class="header__bottom-joi">
                <span><i class="fa-solid fa-user"></i>  </span>
                <span>
                  <span><?= $portfolio["work"] ?></span>
                </span>
              </div>
              <?php 
              endif;
              ?>
              <div class="header__bottom-joi">
                <span><i class="fa-solid fa-calendar-days"></i></span>
                <span>
                  Joined on
                  <span><?= date('Y-m-d', strtotime($portfolio["joined"])) ?></span>
                </span>
              </div>
              <?php 
              if(isset($portfolio["website"])): ?>
              <div class="header__bottom-joi">
                <span><i class="fa-solid fa-earth-americas"></i></span>
                <span>
                  <a href="https://<?=$portfolio["website"] ?>" target="_blank" style="text-decoration: underline;"><?=$portfolio["website"] ?></a>
                </span>
              </div>
              <?php 
              endif;
              ?>
            </div>
          </div>
        </header>
       
        <div class="prof__user-post">
          <div class="prof__statistic">
            <div class="prof__statistic-content">
              <ul class="prof__statistic-list">
                <li>
                  <span><i class="fa-solid fa-signs-post"></i></span>
                  <span><?= count($articles) ?> post published</span>
                </li>
                <div class="acc__line"></div>

                <li>
                  <span><i class="fa-solid fa-eye"></i></span>
                  <span>Total post views</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="prof__user-artcs">
            <div class="user__artcs-content">
              <ul class="user__artcs-list">
                <?php
                foreach($articles as $article): ?>
                <li class="user__artcs-item">
                  <?php 
                  if($_SESSION["user"]["userId"] ==$article["authorId"]): ?>
                  <div class="manage_article-ar">
                    <span class="dots_port">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    </span>
                    <div class="mn_btns">
                      <ul>
                        
                        <li><a href="../article/update.php?action=read&articleId=<?= $article["articleId"]?>&slug=<?= $article["slug"]?>">
                        <i class="fa-solid fa-pen-to-square"></i>
                          <span>Edit Post</span>
                          
                        </a></li>
                        <div class="acc__line"></div>

                        <li><a href="./user.php?action=deleteArticle&articleId=<?= $article["articleId"]?>">
                        <i class="fa-solid fa-trash"></i>
                        <span>Delete Post</span>
                          
                        </a></li>
                      </ul>
                    </div>
                  </div>
                  <?php 
                  endif; 
                  ?>
                  <div class="post__content-pr">
                    <div class="art__author">
                      <div class="author__pic">
                      <?php 
                        if(isset($article["picture"])): ?>
                        <img src="../../<?= $article["picture"]?>" alt="<?= $article["firstName"] . " " . $article  ["lastName"]?>" />
                        <?php 
                        else:
                        ?>
                        <span><?= substr($article["firstName"], 0, 1) . substr($article["lastName"], 0, 1) ?></span>
                        <?php
                        endif;
                          ?>
                      </div>
                      <div class="author__det">
                        <div class="author__name">
                          <a href="">
                            <h5><?= $article["firstName"] . " " . $article["lastName"]?></h5>
                          </a>
                        </div>
                        <div class="art__date">
                          <span><?= date('Y-m-d', strtotime($article ["createdAt"])) ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="art__title">
                      <a href="../article.php?action=read&slug=<?= $article["slug"] ?>">
                        <h1>
                        <?= $article["title"] ?>
                        </h1>
                      </a>
                    </div>
                  </div>
                </li>
                <?php 
                endforeach;
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </main>

    <script src="../../../../assets/js/main.js"></script>
  </body>
</html>
