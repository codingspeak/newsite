<?php 
    $page_url = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Custom Packaging</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/header.css" />
      <link rel="stylesheet" href="css/footer.css" />

      <?php 
        if($page_url == 'category.php'){
            // $canonical = 'category/';
            // $title = 'Get Rush Order Luxury Custom Boxes Fast & Affordable';
            // $description = 'Now you can order Rush Order Luxury Custom Boxes online at a low price and have them delivered to your location within a short time period.';
            // $keywords = 'get rush order quote,fastest quote,beat my quote,affordable quote';
            // $og_type = 'website';
        ?>
         <link rel="stylesheet" href="./css/category.css">
      <?php 
         }
      ?>

      <?php 
        if($page_url == 'blogs.php'){
            // $canonical = 'blogs/';
            // $title = 'Get Rush Order Luxury Custom Boxes Fast & Affordable';
            // $description = 'Now you can order Rush Order Luxury Custom Boxes online at a low price and have them delivered to your location within a short time period.';
            // $keywords = 'get rush order quote,fastest quote,beat my quote,affordable quote';
            // $og_type = 'website';
        ?>
         <link rel="stylesheet" href="./css/blogs.css">
      <?php 
         }
      ?>

      <?php 
        if($page_url == 'product.php'){
            // $canonical = 'category/';
            // $title = 'Get Rush Order Luxury Custom Boxes Fast & Affordable';
            // $description = 'Now you can order Rush Order Luxury Custom Boxes online at a low price and have them delivered to your location within a short time period.';
            // $keywords = 'get rush order quote,fastest quote,beat my quote,affordable quote';
            // $og_type = 'website';
      ?>
         <link rel="stylesheet" href="./css/product.css">
      <?php 
         }
      ?>

      <?php 
        if($page_url == 'contact-us.php'){
            // $canonical = 'category/';
            // $title = 'Get Rush Order Luxury Custom Boxes Fast & Affordable';
            // $description = 'Now you can order Rush Order Luxury Custom Boxes online at a low price and have them delivered to your location within a short time period.';
            // $keywords = 'get rush order quote,fastest quote,beat my quote,affordable quote';
            // $og_type = 'website';
        ?>
         <link rel="stylesheet" href="./css/contact-us.css">
      <?php 
         }
      ?>
   </head>
   <body>
      <!-- Top Bar -->
      <div class="top-bar">
         <div class="container inner-container">
            <div class="d-flex justify-content-between dflex100">
               <a href="#"><img src="./images/logo.webp" alt="Logo" class="logo" /></a>
               <a href="#" class="mobile-nav"><img src="./images/menu-bars.webp" class="img-fluid" /></a>
            </div>
            <div class="contact-info">
               <a href="tel:5105009533">
               <img class="icon" src="https://cdn-icons-png.flaticon.com/512/159/159832.png" alt="Phone" />
               (510) 500-9533
               </a>
               <a href="mailto:sales@newsite.com">
               <img class="icon" src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Email" />
               sales@newsite.com
               </a>
               <a href="https://wa.me/15105009533" target="_blank" class="whatsapp-link">
               <img class="icon2" src="./images/walogo.webp" alt="WhatsApp" />
               </a>
               <a class="btn btn-danger" href="#">Get Quote</a>
            </div>
         </div>
      </div>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg">
         <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                  <!-- Boxes by Industry -->
                  <li class="nav-item dropdown mega-dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Boxes by Industry</a>
                     <div class="dropdown-menu mega-menu">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="list-unstyled">
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Apparel Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Auto Parts</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Bakery Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Bottle Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Candle Boxes</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="list-unstyled">
                                 <li><a href="#"><img src="./images/menu-icon.png" /> CBD Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Chocolate Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Cosmetic Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Electronics Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Christmas Boxes</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="list-unstyled">
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Gift Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Hardware Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Jewelry Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Retail Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Shipping Boxes</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="list-unstyled">
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Pharma Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Stationery Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Soap Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Vape Boxes</a></li>
                                 <li><a href="#"><img src="./images/menu-icon.png" /> Sports Boxes</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!-- Boxes By Material -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Boxes By Material</a>
                     <ul class="dropdown-menu simple-dropdown">
                        <li><a class="dropdown-item" href="#">Cardboard Boxes</a></li>
                        <li><a class="dropdown-item" href="#">Corrugated Boxes</a></li>
                        <li><a class="dropdown-item" href="#">Rigid Boxes</a></li>
                        <li><a class="dropdown-item" href="#">Kraft Boxes</a></li>
                        <li><a class="dropdown-item" href="#">Tin Packaging</a></li>
                        <li><a class="dropdown-item" href="#">Poly Bags</a></li>
                     </ul>
                  </li>
                  <!-- Boxes By Style -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Boxes By Style</a>
                     <ul class="dropdown-menu simple-dropdown long-dropdown">
                        <li><a class="dropdown-item" href="#">Custom Mylar Bags</a></li>
                        <li><a class="dropdown-item" href="#">Custom Tote Bag</a></li>
                        <li><a class="dropdown-item" href="#">Display Boxes</a></li>
                        <li><a class="dropdown-item" href="#">Gable Boxes</a></li>
                        <li><a class="dropdown-item" href="#">Hang Tags</a></li>
                        <li><a class="dropdown-item" href="#">Labels & Stickers</a></li>
                        <li><a class="dropdown-item" href="#">Mailer Boxes</a></li>
                        <li><a class="dropdown-item" href="#">Paper Bags</a></li>
                        <li><a class="dropdown-item" href="#">Pillow Boxes</a></li>
                        <li><a class="dropdown-item" href="#">Spouted Pouches</a></li>
                        <li><a class="dropdown-item" href="#">Trays and Sleeves</a></li>
                        <li><a class="dropdown-item" href="#">Tuck Boxes</a></li>
                        <li><a class="dropdown-item" href="#">Window Packaging Boxes</a></li>
                     </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="blogs.php">Blog</a></li>
               </ul>
               <button class="btn btn-warning">Portfolio</button>
            </div>
         </div>
      </nav>
      <!-- Full-Screen Mobile Menu Overlay -->
      <div class="mobile-overlay">
         <div class="close-btn">&times;</div>
         <ul class="mobile-menu">
            <li><a href="#">Home</a></li>
            <li class="has-submenu">
               <span>Boxes By Industry</span>
               <ul class="submenu">
                  <li><a href="#">Apparel Boxes</a></li>
                  <li><a href="#">Auto Parts</a></li>
                  <li><a href="#">Bakery Boxes</a></li>
                  <li><a href="#">Bottle Boxes</a></li>
                  <li><a href="#">Candle Boxes</a></li>
                  <li><a href="#">CBD Boxes</a></li>
                  <li><a href="#">Chocolate Boxes</a></li>
                  <li><a href="#">Cosmetic Boxes</a></li>
                  <li><a href="#">Electronics Boxes</a></li>
                  <li><a href="#">Christmas Boxes</a></li>
                  <li><a href="#">Gift Boxes</a></li>
                  <li><a href="#">Hardware Boxes</a></li>
                  <li><a href="#">Jewelry Boxes</a></li>
                  <li><a href="#">Retail Boxes</a></li>
                  <li><a href="#">Shipping Boxes</a></li>
                  <li><a href="#">Pharma Boxes</a></li>
                  <li><a href="#">Stationery Boxes</a></li>
                  <li><a href="#">Soap Boxes</a></li>
                  <li><a href="#">Vape Boxes</a></li>
                  <li><a href="#">Sports Boxes</a></li>
               </ul>
            </li>
            <!-- Boxes By Material -->
            <li class="has-submenu">
               <span>Boxes By Material</span>
               <ul class="submenu">
                  <li><a href="#">Cardboard Boxes</a></li>
                  <li><a href="#">Corrugated Boxes</a></li>
                  <li><a href="#">Rigid Boxes</a></li>
                  <li><a href="#">Kraft Boxes</a></li>
                  <li><a href="#">Tin Packaging</a></li>
                  <li><a href="#">Poly Bags</a></li>
               </ul>
            </li>
            <!-- Boxes By Style -->
            <li class="has-submenu">
               <span>Boxes By Style</span>
               <ul class="submenu">
                  <li><a href="#">Custom Mylar Bags</a></li>
                  <li><a href="#">Custom Tote Bag</a></li>
                  <li><a href="#">Display Boxes</a></li>
                  <li><a href="#">Gable Boxes</a></li>
                  <li><a href="#">Hang Tags</a></li>
                  <li><a href="#">Labels & Stickers</a></li>
                  <li><a href="#">Mailer Boxes</a></li>
                  <li><a href="#">Paper Bags</a></li>
                  <li><a href="#">Pillow Boxes</a></li>
                  <li><a href="#">Spouted Pouches</a></li>
                  <li><a href="#">Trays and Sleeves</a></li>
                  <li><a href="#">Tuck Boxes</a></li>
                  <li><a href="#">Window Packaging Boxes</a></li>
               </ul>
            </li>
            <li><a href="#">Blog</a></li>
         </ul>
      </div>