<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Neogym</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/' ?>css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo get_template_directory_uri() . '/assets/' ?>css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/hero-bg.jpg')">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <span>
              Neogym
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/menu.png);" class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <?php 
                $args = [
                  'theme_location'  => 'main_menu',
                  'menu_class'        => 'navbar-nav',
                ];
                wp_nav_menu($args);
              ?>
              <div class="user_option">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/search-icon.png);" class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
