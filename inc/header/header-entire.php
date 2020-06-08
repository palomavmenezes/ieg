<header id="header">
    <div class="container">

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
            <?php wp_nav_menu( array( 'theme_location' => 'entire' ) ); ?>
        </ul>
      </nav><!-- .main-nav -->

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="<?php echo get_site_url(); ?>" class="scrollto logo-ieg"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-ieg.png" alt="" class="img-fluid"></a>
      </div>

  </div><!-- #header -->

  <section class="top-mobile">
    <nav class="navbar navbar-light light-blue lighten-4">
    <!-- Collapse button -->
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
      aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
      <!-- Links -->
      <ul class="mr-auto">
        <?php wp_nav_menu( array( 'theme_location' => 'entire' ) ); ?>
      </ul>
      <!-- Links -->
    </div>
    <!-- Collapsible content -->
  </nav>
  <!--/.Navbar--> 
    </section>