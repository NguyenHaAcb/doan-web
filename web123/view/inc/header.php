   <nav class="navbar navbar-expand-lg navbar-light shadow">
       <div class="container d-flex justify-content-between align-items-center">

           <a class="navbar-brand text-success logo h1 align-self-center" href="home.html">
               OrangesFood
           </a>

           <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
               <div class="flex-fill">
                   <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                       <li class="nav-item">
                           <a class="nav-link" href="index.php">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="category.php">Shop</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
                       </li>
                       </li>
                       <?php if (isset($_SESSION['user'])) { ?>
                           <a class="" href="<?php echo BASE_URL . '/admin/product'; ?>" class="text-gray-200 hover:text-white transition " style="margin-top: 5px;">Admin</a>

                       <?php } ?>
                       </li>
                   </ul>
               </div>

               <div class="d-flex">
                   <?php if (isset($_SESSION['user'])) { ?>
                       <a class="dropdown-item" href="logout.php" class="text-gray-200 hover:text-white transition" style="padding: 10px;">Logout</a>
                   <?php } else { ?>
                       <a class="dropdown-item" href="login.php" class="text-gray-200 hover:text-white transition">Login</a></li>
                       <a class="dropdown-item" href="register.php" class="text-gray-200 hover:text-white transition">Register</a>
                   <?php } ?>
               </div>
               <!-- <a class="nav-icon position-relative text-decoration-none" href="cart.php">
                       <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                       <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                   </a> -->
               <form action="search.php" method="get" class="d-flex">
                   <input type="text" name="search" class="form-control" placeholder="Search" style="width:200px;  height: 30px ; margin-top:20px;">
                   <button class="btn btn-outline-dark " style=" width:8px; height: 33px; margin-top:18px">
                       <i class="fa-solid fa-magnifying-glass"></i>
                   </button>
               </form>
               <a class="nav-icon position-relative text-decoration-none " href="cart.php">
                   <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1" style="padding: 10px;"></i>
                   <span style="font-size:15px; color:crimson"> <?php echo number_cart_product() ?></span>

                   <!-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span> -->
               </a>

           </div>

       </div>
   </nav>