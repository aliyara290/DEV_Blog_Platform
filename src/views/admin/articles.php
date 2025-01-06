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
                    <li class="page_item ">
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
                    <li class="page_item active">
                        <a href="./articles.php">
                            <span><i class="fa-solid fa-newspaper"></i></span>
                            <span>Articles</span>
                            
                        </a>
                    </li>
                    <li class="page_item">
                        <a href="./tags.php">
                            <span><i class="fa-solid fa-tag"></i></span>
                            <span>tags</span>
                            
                        </a>
                    </li>
                    <li class="page_item">
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
                    <span><i class="fa-solid fa-right-from-bracket"></i></span>
                </nav>
            </header>
            
            <div class="pending__articles">
                <div class="heading">
                    <h1>Pending articles</h1>
                </div>

                <div class="pend__articles-content">
                    <ul class="pend__articles-list">
                        <li class="pend__articles-card">
                            <div class="pend__article-cover">
                                <img src="../../../assets/images/by.gif" alt="">
                            </div>
                            <div class="pend__article-title">
                                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            </div>
                        </li>
                        <li class="pend__articles-card">
                            <div class="pend__article-cover">
                                <img src="../../../assets/images/by.gif" alt="">
                            </div>
                            <div class="pend__article-title">
                                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            </div>
                        </li>
                        <li class="pend__articles-card">
                            <div class="pend__article-cover">
                                <img src="../../../assets/images/by.gif" alt="">
                            </div>
                            <div class="pend__article-title">
                                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            </div>
                        </li>
                        <li class="pend__articles-card">
                            <div class="pend__article-cover">
                                <img src="../../../assets/images/by.gif" alt="">
                            </div>
                            <div class="pend__article-title">
                                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            </div>
                        </li>
                        <li class="pend__articles-card">
                            <div class="pend__article-cover">
                                <img src="../../../assets/images/by.gif" alt="">
                            </div>
                            <div class="pend__article-title">
                                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
  </body>
</html>
