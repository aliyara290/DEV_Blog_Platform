<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/front/style.css" />
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
                <button>Sign in</button>
              </a>
            </li>
            <li class="page_link">
              <a href="./register.php">
                <button>Sign up</button>
              </a>
            </li>
          </div>
          <li class="page_link">
            <a href="#">
              <button>Create Article</button>
            </a>
          </li>
          <li class="page_link">
            <div class="user_picture">
              <div class="u__pic">
                <img src="../../../assets/images/users/me.jpg" alt="" />
              </div>
            </div>
            <div class="acc_menu">
              <ul class="menu_list">
                <li class="menu_item"><a href="#">My Profile</a></li>
                <li class="menu_item"><a href="#">My Articles</a></li>
                <li class="menu_item"><a href="#">Statistic</a></li>
                <li class="menu_item"><a href="#">Log out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <section class="form__section">
      
          <div class="form__content">
            <div class="section__heading">
                <h1>
                    Sign in to your account
                </h1>
            </div>
              <form class="log__form" action="login.php">
                  <div class="inp__frm">
                      <label for="login_email">Email</label>
                      <input type="email" name="login_email" id="login_email" class="" placeholder="email" required="">
                  </div>
                  <div class="inp__frm">
                      <label for="login_password" class="">Password</label>
                      <input type="password" name="login_password" id="login_password" placeholder="password" class="" required="">
                  </div>
                  <div class="sit__prg">
                      <a href="#" class="">Forgot password?</a>
                  </div>
                  <div class="submit__btn">
                    <button type="submit" class="">Sign in</button>
                  </div>
                  <div class="sit__prg">
                    <p>
                        Don’t have an account yet? <a href="./register.php" class="">Sign up</a>
                    </p>
                  </div>
              </form>
          </div>
      
</section>

</body>
</html>