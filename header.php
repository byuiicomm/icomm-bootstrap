<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8"> 
  <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <!-- Le styles --> 
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"> 

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --> 
  <!--[if lt IE 9]> 
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> 

  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?> 
</head> 
<body> 
  <div class="container">
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">

                <?php wp_nav_menu (array('theme_location' => 'primary-menu', 'menu_class' => 'nav'));?>

                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
