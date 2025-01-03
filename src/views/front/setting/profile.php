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
                  <a href="../profile/user.php" class="acc_us">
                    <span> Ali Yara </span>
                    <span> @aliyara29 </span>
                  </a>
                </li>
                <div class="acc__line"></div>

                <li class="menu_item"><a href="../profile/user.php">Setting</a></li>
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
    <main class="setting__content">
      <div class="setting__pages">
        <div class="pages__links">
          <ul class="a_pages-links">
            <li class="a_page-link active">
              <a href="./profile.php">
                <span>
                  <i class="fa-solid fa-face-smile" style="color: #ffc800"></i>
                </span>
                <span>Profile</span>
              </a>
            </li>
            <li class="a_page-link ">
              <a href="./account.php">
                <span>
                  <i class="fa-solid fa-user-gear" style="color: #e713f6"></i>
                </span>
                <span>Account</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="profile__setting">
        <form action="" method="post" class="setting__form">
          <section class="set__prof-content">
            <div class="set__heading">
              <h2>User</h2>
            </div>
            <div class="grid__rows">
              <div class="inp__row">
                <label for="user__fisrtname">First name</label>
                <input
                  type="text"
                  name="user__fisrtname"
                  id="user__fisrtname"
                  placeholder="First name"
                />
              </div>
              <div class="inp__row">
                <label for="user__lastname">Last name</label>
                <input type="text" name="user__lastname" id="user__lastname" placeholder="Last name"/>
              </div>
              <div class="inp__row">
                <label for="user__email">Email</label>
                <input type="text" name="user__email" id="user__email" placeholder="Email"/>
              </div>
              <div class="inp__row">
                <label for="user__username">Username</label>
                <input type="text" name="user__username" id="user__username" placeholder="Username" />
              </div>
            </div>
            <div class="user__up-pic">
              <label for="user__profile-pic">Profile image</label>
              <div class="set__pic-row">
                <div class="profile__picture-preview">
                  <img
                    src="../../../../assets/images/users/me.jpg"
                    alt="Ali Yara"
                  />
                </div>
                <div class="custom-file-input">
                  <label for="file-upload" class="file-label">
                    <span class="file-button">Upload File</span>
                    <span class="file-name">No file chosen</span>
                  </label>
                  <input type="file" id="file-upload" class="file-input" />
                </div>
              </div>
            </div>
          </section>

          <section class="set__prof-content">
            <div class="set__heading">
              <h2>Basic</h2>
            </div>
            <div class="grid__rows">
              <div class="inp__row">
                <label for="user__fisrtname">Website Link</label>
                <input
                  type="text"
                  name="user__fisrtname"
                  id="user__fisrtname"
                  placeholder="Website link"
                />
              </div>
              <div class="inp__row">
                <label for="user__lastname">Work</label>
                <input type="text" name="user__lastname" id="user__lastname" placeholder="Work"/>
              </div>
            </div>
            <div class="user__up-pic">
              <label for="user__biography">Bio</label>
              <textarea name="user__biography" id="user__biography" placeholder="bio..."></textarea>
            </div>
          </section>
          <div class="submit_btn">
            <button class="button__comp">Save Profile Information</button>
          </div>


        </form>
      </div>
    </main>
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
    
    <script src="../../../../assets/js/main.js"></script>
  </body>
</html>
