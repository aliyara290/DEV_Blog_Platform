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
                    <li class="page_item active">
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
            <div class="project__statistics">
                <div class="heading">
                    <h1>Website statistics</h1>
                </div>
                <div class="statistics__cards">
                    <ul class="statistics__list">
                        <li class="statistic__card">
                            <span><i class="fa-solid fa-user"></i> Users: </span>
                            <span>123</span>
                        </li>
                        <li class="statistic__card">
                            <span><i class="fa-solid fa-newspaper"></i> Articles: </span>
                            <span>123</span>
                        </li>
                        <li class="statistic__card">
                            <span><i class="fa-solid fa-hourglass-start"></i> Pending: </span>
                            <span>123</span>
                        </li>
                        <li class="statistic__card">
                            <span><i class="fa-solid fa-user"></i> Users: </span>
                            <span>123</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="statistics_charts">
                <div class="chart__card"></div>
                <div class="chart__card"></div>
                <div class="chart__card"></div>
                <div class="chart__card"></div>
            </div>
        </main>
    </div>
  </body>
</html>
