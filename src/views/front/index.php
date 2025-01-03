<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../assets/css/front/style.css" />
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
          <a href="./index.php">

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
              <a href="./login.php">
                <button class="button__comp button__border">Sign in</button>
              </a>
            </li>
            <li class="page_link">
              <a href="./register.php">
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
                <img src="../../../assets/images/users/me.jpg" alt="" />
              </div>
            </div>
            <div class="acc_menu">
              <ul class="menu_list">
                <li class="menu_item">
                  <a href="./profile/user.php" class="acc_us">
                    <span> Ali Yara </span>
                    <span> @aliyara29 </span>
                  </a>
                </li>
                <div class="acc__line"></div>

                <li class="menu_item"><a href="./setting/profile.php">Setting</a></li>
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
    <div class="blog__content">
      <aside class="left__side">
        <div class="left__side-content">
          <div class="pages__links">
            <ul class="a_pages-links">
              <li class="a_page-link active">
                <a href="#">
                  <span>
                    <i class="fa-solid fa-house"></i>
                  </span>
                  <span>Home</span>
                </a>
              </li>
              <li class="a_page-link">
                <a href="#">
                  <span>
                    <i class="fa-solid fa-code color_1"></i>
                  </span>
                  <span>DEV++</span>
                </a>
              </li>
              <li class="a_page-link">
                <a href="#">
                  <span>
                    <i class="fa-solid fa-microchip color_3"></i>
                  </span>
                  <span>Back-end</span>
                </a>
              </li>
              <li class="a_page-link">
                <a href="#">
                  <span>
                    <i class="fa-solid fa-heart-circle-check color_2"></i>
                  </span>
                  <span>Front-end</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="follow_us">
            <div class="heading-a">
              <h2>Follow us:</h2>
            </div>
            <ul class="social_links">
              <li class="social_link">
                <a href="#">
                  <i class="fa-brands fa-facebook-square"></i>
                </a>
              </li>
              <li class="social_link">
                <a href="#">
                  <i class="fa-brands fa-instagram-square"></i>
                </a>
              </li>
              <li class="social_link">
                <a href="#">
                  <i class="fa-brands fa-twitter-square"></i>
                </a>
              </li>
              <li class="social_link">
                <a href="#">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
              </li>
              <li class="social_link">
                <a href="#">
                  <i class="fa-brands fa-twitch"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>
      <main class="main__content">
        <div class="articles__list">
          <div class="article__post">
            <div class="art_pic">
              <img src="../../../assets/images/posts/post_img.png" alt="" />
            </div>
            <div class="art_details">
              <div class="art__author">
                <div class="author__pic">
                  <img src="../../../assets/images/users/me.jpg" alt="" />
                </div>
                <div class="author__det">
                  <div class="author__name">
                    <a href="">
                      <h5>Ali Yara</h5>
                    </a>
                  </div>
                  <div class="art__date">
                    <span>5min ago</span>
                  </div>
                </div>
              </div>
              <div class="art__title">
                <a href="./article.php">
                  <h1>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                    cumque dolores, illum consequatur eaque nulla!
                  </h1>
                </a>
              </div>
              <div class="art__tags">
                <ul class="tags__list">
                  <li class="tag__item">
                    <a href="">
                      <span>#PHP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#MySQL</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#OOP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#PDO</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="article__post">
            <div class="art_pic">
              <img src="../../../assets/images/posts/post_img.png" alt="" />
            </div>
            <div class="art_details">
              <div class="art__author">
                <div class="author__pic">
                  <img src="../../../assets/images/users/me.jpg" alt="" />
                </div>
                <div class="author__det">
                  <div class="author__name">
                    <a href="">
                      <h5>Ali Yara</h5>
                    </a>
                  </div>
                  <div class="art__date">
                    <span>5min ago</span>
                  </div>
                </div>
              </div>
              <div class="art__title">
                <a href="./article.php">
                  <h1>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                    cumque dolores, illum consequatur eaque nulla!
                  </h1>
                </a>
              </div>
              <div class="art__tags">
                <ul class="tags__list">
                  <li class="tag__item">
                    <a href="">
                      <span>#PHP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#MySQL</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#OOP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#PDO</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="article__post">
            <div class="art_pic">
              <img src="../../../assets/images/posts/post_img.png" alt="" />
            </div>
            <div class="art_details">
              <div class="art__author">
                <div class="author__pic">
                  <img src="../../../assets/images/users/me.jpg" alt="" />
                </div>
                <div class="author__det">
                  <div class="author__name">
                    <a href="">
                      <h5>Ali Yara</h5>
                    </a>
                  </div>
                  <div class="art__date">
                    <span>5min ago</span>
                  </div>
                </div>
              </div>
              <div class="art__title">
                <a href="./article.php">
                  <h1>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                    cumque dolores, illum consequatur eaque nulla!
                  </h1>
                </a>
              </div>
              <div class="art__tags">
                <ul class="tags__list">
                  <li class="tag__item">
                    <a href="">
                      <span>#PHP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#MySQL</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#OOP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#PDO</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="article__post">
            <div class="art_pic">
              <img src="../../../assets/images/posts/post_img.png" alt="" />
            </div>
            <div class="art_details">
              <div class="art__author">
                <div class="author__pic">
                  <img src="../../../assets/images/users/me.jpg" alt="" />
                </div>
                <div class="author__det">
                  <div class="author__name">
                    <a href="">
                      <h5>Ali Yara</h5>
                    </a>
                  </div>
                  <div class="art__date">
                    <span>5min ago</span>
                  </div>
                </div>
              </div>
              <div class="art__title">
                <a href="./article.php">
                  <h1>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                    cumque dolores, illum consequatur eaque nulla!
                  </h1>
                </a>
              </div>
              <div class="art__tags">
                <ul class="tags__list">
                  <li class="tag__item">
                    <a href="">
                      <span>#PHP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#MySQL</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#OOP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#PDO</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="article__post">
            <div class="art_pic">
              <img src="../../../assets/images/posts/post_img.png" alt="" />
            </div>
            <div class="art_details">
              <div class="art__author">
                <div class="author__pic">
                  <img src="../../../assets/images/users/me.jpg" alt="" />
                </div>
                <div class="author__det">
                  <div class="author__name">
                    <a href="">
                      <h5>Ali Yara</h5>
                    </a>
                  </div>
                  <div class="art__date">
                    <span>5min ago</span>
                  </div>
                </div>
              </div>
              <div class="art__title">
                <a href="./article.php">
                  <h1>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                    cumque dolores, illum consequatur eaque nulla!
                  </h1>
                </a>
              </div>
              <div class="art__tags">
                <ul class="tags__list">
                  <li class="tag__item">
                    <a href="">
                      <span>#PHP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#MySQL</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#OOP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#PDO</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="article__post">
            <div class="art_pic">
              <img src="../../../assets/images/posts/post_img.png" alt="" />
            </div>
            <div class="art_details">
              <div class="art__author">
                <div class="author__pic">
                  <img src="../../../assets/images/users/me.jpg" alt="" />
                </div>
                <div class="author__det">
                  <div class="author__name">
                    <a href="">
                      <h5>Ali Yara</h5>
                    </a>
                  </div>
                  <div class="art__date">
                    <span>5min ago</span>
                  </div>
                </div>
              </div>
              <div class="art__title">
                <a href="./article.php">
                  <h1>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                    cumque dolores, illum consequatur eaque nulla!
                  </h1>
                </a>
              </div>
              <div class="art__tags">
                <ul class="tags__list">
                  <li class="tag__item">
                    <a href="">
                      <span>#PHP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#MySQL</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#OOP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#PDO</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="article__post">
            <div class="art_pic">
              <img src="../../../assets/images/posts/post_img.png" alt="" />
            </div>
            <div class="art_details">
              <div class="art__author">
                <div class="author__pic">
                  <img src="../../../assets/images/users/me.jpg" alt="" />
                </div>
                <div class="author__det">
                  <div class="author__name">
                    <a href="">
                      <h5>Ali Yara</h5>
                    </a>
                  </div>
                  <div class="art__date">
                    <span>5min ago</span>
                  </div>
                </div>
              </div>
              <div class="art__title">
                <a href="./article.php">
                  <h1>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                    cumque dolores, illum consequatur eaque nulla!
                  </h1>
                </a>
              </div>
              <div class="art__tags">
                <ul class="tags__list">
                  <li class="tag__item">
                    <a href="">
                      <span>#PHP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#MySQL</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#OOP</span>
                    </a>
                  </li>
                  <li class="tag__item">
                    <a href="">
                      <span>#PDO</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
         
        </div>
      </main>
      <aside class="right__side">
        <div class="right__side-content">
          <div class="heading-a">
            <h2>Most Viewed Posts</h2>
          </div>
          <div class="posts_r-side">
            <ul class="posts_list">
              <li class="post_details">
                <a href="" class="post__link">
                  <div class="post_title">
                    <h3>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit
                      consectetur adipisicing.
                    </h3>
                  </div>
                  <div class="post__views">
                    <span>
                      <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>1234</span>
                  </div>
                </a>
              </li>
              <li class="post_details">
                <a href="" class="post__link">
                  <div class="post_title">
                    <h3>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit
                      consectetur adipisicing.
                    </h3>
                  </div>
                  <div class="post__views">
                    <span>
                      <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>1234</span>
                  </div>
                </a>
              </li>
              <li class="post_details">
                <a href="" class="post__link">
                  <div class="post_title">
                    <h3>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit
                      consectetur adipisicing.
                    </h3>
                  </div>
                  <div class="post__views">
                    <span>
                      <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>1234</span>
                  </div>
                </a>
              </li>
              <li class="post_details">
                <a href="" class="post__link">
                  <div class="post_title">
                    <h3>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit
                      consectetur adipisicing.
                    </h3>
                  </div>
                  <div class="post__views">
                    <span>
                      <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>1234</span>
                  </div>
                </a>
              </li>
              <li class="post_details">
                <a href="" class="post__link">
                  <div class="post_title">
                    <h3>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit
                      consectetur adipisicing.
                    </h3>
                  </div>
                  <div class="post__views">
                    <span>
                      <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>1234</span>
                  </div>
                </a>
              </li>
              <li class="post_details">
                <a href="" class="post__link">
                  <div class="post_title">
                    <h3>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit
                      consectetur adipisicing.
                    </h3>
                  </div>
                  <div class="post__views">
                    <span>
                      <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>1234</span>
                  </div>
                </a>
              </li>
              <li class="post_details">
                <a href="" class="post__link">
                  <div class="post_title">
                    <h3>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit
                      consectetur adipisicing.
                    </h3>
                  </div>
                  <div class="post__views">
                    <span>
                      <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>1234</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>
    </div>
    <footer class="footer">
      <div class="footer-container">
        <p class="footer-text">&copy; 2025 <span class="footer-brand">Medium</span>. All rights reserved.</p>
        <div class="footer-links">
          <a href="#" class="footer-link">Privacy Policy</a>
          <span class="footer-divider">|</span>
          <a href="#" class="footer-link">Terms of Service</a>
          <span class="footer-divider">|</span>
          <a href="#" class="footer-link">Contact</a>
        </div>
        <div class="footer-social">
          <ul class="social_links">
            <li class="social_link">
              <a href="#">
                <i class="fa-brands fa-facebook-square"></i>
              </a>
            </li>
            <li class="social_link">
              <a href="#">
                <i class="fa-brands fa-instagram-square"></i>
              </a>
            </li>
            <li class="social_link">
              <a href="#">
                <i class="fa-brands fa-twitter-square"></i>
              </a>
            </li>
            <li class="social_link">
              <a href="#">
                <i class="fa-brands fa-linkedin"></i>
              </a>
            </li>
            <li class="social_link">
              <a href="#">
                <i class="fa-brands fa-twitch"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <script src="../../../assets/js/main.js"></script>
  </body>
</html>
