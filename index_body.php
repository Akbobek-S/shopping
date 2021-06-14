<body>
  <nav class="nav">
    <div class="wrapper container">
      <div class="logo"><a href=""><img src="images/logo.png" class="logopng"></a></div>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li>
          <a href="" class="desktop-item">Shop <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showMega" />
          <label for="showMega" class="mobile-item"> Shop <span><i class="fas fa-chevron-down"></i></span></label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <header>Shopping now</header>
                <ul class="mega-links">
                  <li><a href="#new_collection">Order now</a></li>
                  <li><a href="#new_collection">View products</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Filters</header>
                <ul class="mega-links">
                  <li><a href="#our_collection">Try now</a></li>
                  <li><a href="#our_collection">2021 Trends</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Sales</header>
                <ul class="mega-links">
                  <li><a href="#new_collection">Sales for now</a></li>
                  <li><a href="#new_collection">Hit the bomb</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#">Blog</a></li>
        <li>
          <a href="" class="desktop-item">Account <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showdrop1" />
          <label for="showdrop1" class="mobile-item">Account <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu1">
            <li><a href="/CodingLab/log/index.php"><?php echo $name;?></a></li>
            <li><a href="/CodingLab/log/logout.php">Logout</a></li>
          </ul>
        </li>

        <li>
          <a href="" class="desktop-item">Page <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showdrop2" />
          <label for="showdrop2" class="mobile-item">Page <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu2">
            <li><a href="#footer">About</a></li>
            <li><a href="#footer">Contact</a></li>
            <li><a href="#footer">FAQ</a></li>
          </ul>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  <div class="hero">
    <div class="left">
      <span>Exclusive Sales</span>
      <h1 id="hh1">UP TO 50% OFF ON SALES</h1>
      <small>Get all exclusive offers for the season</small>
      <a class="" href="#new_collection">View Collection </a>
      <a href="#" id="hide"> No more sales </a>
    </div>
    <div class="right">
      <img src="./images/hero.png" alt="" />
    </div>
  </div>
