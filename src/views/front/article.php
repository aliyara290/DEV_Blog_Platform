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
    <title>Sign in</title>
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

    <div class="article__page-content">
      <main class="article__content">
        <div class="art_pic">
          <img src="../../../assets/images/posts/post_img.png" alt="" />
        </div>
        <div class="article__content-det">
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
                <h1>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut
                  cumque dolores, illum consequatur eaque nulla!
                </h1>
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
            <div class="article__description">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit nihil voluptates voluptas blanditiis quibusdam delectus ex illum. Sit quia et tempore adipisci architecto eos eaque autem fuga rerum, cumque facilis modi aliquam vero eveniet porro! Quos optio et sit pariatur explicabo minus quis fuga tempora voluptates aspernatur, totam expedita mollitia in eveniet sequi rerum! Facilis, rerum consequuntur! Sint, ea voluptas?</p>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit nihil voluptates voluptas blanditiis quibusdam delectus ex illum. Sit quia et  pariatur explicabo minus quis fuga tempora voluptates aspernatur, totam expedita mollitia in eveniet sequi rerum! Facilis, rerum consequuntur! Sint, ea voluptas?</p>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit nihil voluptates voluptas blanditiis quibusdam delectus ex illum. Sit quia et tempore adipisci architecto eos eaque autem fuga rerum, Facilis, rerum consequuntur! Sint, ea voluptas?</p>
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit nihil voluptates voluptas blanditiis quibusdam delectus ex illum. Sit quia et tempore adipisci architecto eos eaque autem fuga rerum, cumque facilis modi aliquam vero eveniet porro! Quos optio et sit pariatur explicabo minus quis fuga tempora voluptates aspernatur, totam expedita mollitia in eveniet sequi rerum! Facilis, rerum consequuntur! Sint, ea voluptas?</p>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit nihil voluptates voluptas blanditiis quibusdam delectus ex illum. Sit quia et  pariatur explicabo minus quis fuga tempora voluptates aspernatur, totam expedita mollitia in eveniet sequi rerum! Facilis, rerum consequuntur! Sint, ea voluptas?</p>
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit nihil voluptates voluptas blanditiis quibusdam delectus ex illum. Sit quia et tempore adipisci architecto eos eaque autem fuga rerum,  totam expedita mollitia in eveniet sequi rerum! Facilis, rerum consequuntur! Sint, ea voluptas?</p>
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit voluptates aspernatur, totam expedita mollitia in eveniet sequi rerum! Facilis, rerum consequuntur! Sint, ea voluptas?</p>
            </div>
          </div>
        </div>
      </main>
      <aside class="author__details">
        <div class="artc__background"></div>
        <header class="art_user_header">
          <div class="art__user-pic">
            <img src="../../../assets/images/users/me.jpg" alt="Ali Yara" />
          </div>
          <div class="art_header-details">
            <div class="art__header-fullname">
              <a href="">
                <h1>Ali Yara</h1>
              </a>
            </div>
            <div class="acc__line"></div>
            <div class="art__header-bottom">
              <div class="header__bottom-joi">
                <span><i class="fa-solid fa-calendar-days"></i></span>
                <span>
                  Joined on
                  <span>31 Dec 2024</span>
                </span>
              </div>
            </div>
          </div>
        </header>
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
