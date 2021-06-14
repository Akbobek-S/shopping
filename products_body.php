<body>
    <nav class="nav">
    <div class="wrapper container">
      <div class="logo"><a href="index.php"><img src="images/logo.png" class="logopng"></a></div>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="products.php">Shop</a></li>
        <li><a href="">Blog</a></li>
        <li>
          <a href="" class="desktop-item">Account <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showdrop1" />
          <label for="showdrop1" class="mobile-item">Account<span><i class="fas fa-chevron-down"></i></span></label>
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
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Faq</a></li>
            <li><a href="">Page 404</a></li>
          </ul>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
