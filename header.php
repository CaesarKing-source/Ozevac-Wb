<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Ozevac Aeromedical Retrieval Specialists - About Us Ozevac Aeromedical
      Retrieval Specialists
    </title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- font-awesome.. -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  </head>

  <body>


<div class="top-bar">
      <div class="container">
        <div class="top-bar__left">
          <a href="tel:1300 000 000" class="top-bar__phone"
            ><i class="fa fa-phone"></i> 1300 000 000</a>
      </div>
    </div>
    <header>
      <div class="inner-header">
        <div class="container flex justify-content align-center">
          <div class="logo">
            <h1 style="text-align: start; color: white;">KSS IT Group</h1>
            <a href="./homepage.html">
              <figure>
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="" />
              </figure>
            </a>
          </div>
          <div class="nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu') ); ?>
          </div>
          <div class="toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>