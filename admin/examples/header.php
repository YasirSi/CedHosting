<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Admin Panel</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="l.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">
              <i class="fa fa-product-hunt " ></i>
                <span class="nav-link-text">Products</span>
                <ul class="dropdown-menu">
					<li><a href="linuxhosting.php">Linux hosting</a></li>
			 	    <li><a href="wordpresshosting.php">WordPress Hosting</a></li>
					<li><a href="windowshosting.php">Windows Hosting</a></li>
					<li><a href="cmshosting.php">CMS Hosting</a></li>
				</ul>		
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orders.php">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="nav-link-text">Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Services</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Users</span>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="blogs.php">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Blogs</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="account.php">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Account</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newproduct.php">
              <i class="fa fa-product-hunt " ></i>
                <span class="nav-link-text">New Product</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>