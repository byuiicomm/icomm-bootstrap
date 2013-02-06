<?php
/**
 * Template Name: Home-Page + Carousel
 *
 *
 * @package WP-Bootstrap
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */


 get_header(); ?>
<!--
* This is the jumbotron as it appears on the main bootstrap page, I copied/pasted it in and added correct links to make sure I have the formatting right.
* From here we just implement the loop.
* For Clarification purposes, we want to grab the 5 most recent articles and their thumbnails for the carousel at the top right?
* -Shane
-->

<div id="myCarousel" class="carousel slide visible-desktop">
 <div class="carousel-inner">

    <?php query_posts('post_type=post') ?>

    <?php
      $args = array('tag'=>'featured',
              'post_count'=>5);
      $query = new WP_Query($args);
      $i = 0;
      if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        $i++;
    ?>
  
  <div class="item<?php if($i == 1) echo " active"; ?>">
    <?php the_post_thumbnail("large");?>
    <div class="carousel-caption">
      <h4><?php echo the_title(); ?></h4>
      <p>Not quite sure what to put here</p>
      <a class="btn btn-primary" href="<?php echo the_permalink(); ?>">Read More</a>
    </div>
  </div>
  <?php endwhile; endif; ?>

  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>

    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar">
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

                <?php wp_nav_menu (array('theme_location' => 'second-menu', 'menu_class' => 'nav'));?>

              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

<div class="container marketing">
  <hr>
  <div class="row">
    <div class="span9">
      <!-- Top Stories  3 Across-->
      <div class="row">
        <h2 class="feature">Top Stories</h2>

                  <?php
                    $args = array(
                            'post_type' => 'any',
                            'posts_per_page' => 3,
                            'order' => 'DESC',
                            'orderby' => 'meta_value_num',
                            'meta_key' => '_weekly_count',
                            'post_status' => 'publish'
                        );
                    $query = new WP_Query($args);
                    if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                        ?>

                        <div class="span3">
                          <div class="thumnail-wrapper">
                            <?php the_post_thumbnail("medium");?>
                            <div class="description">
                            <p class='description-content'> <?php the_title(); ?>
                            </div>
                          </div>
                        </div>
                  <?php
                    endwhile; endif; 
                  ?>
        </div>
  
      <hr>
      <!-- Latest stories, Endless content, one story per line -->
      <div class="row feature">

        <h2 feature-lead>Latest Stories</h2>
        <div>
          <img class="feature-img pull-left" src="<?php bloginfo('template_directory'); ?>/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
          <h3> All-you-can-eat pie </h3>
          <p class="lead">Body/copy is 12 px. The title of the article is 16 px. The category Latest Stories and Stop Stories is 22 px. It’s all in Arial. It would be one sentence about 2-3 lines.</p>
        </div>
      </div>
      <hr>
      <div class="row feature">
        <div>
          <img class="feature-img pull-left" src="<?php bloginfo('template_directory'); ?>/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
          <h3> Student travel across the country for the holidays </h3>
          <p class="lead">Body/copy is 12 px. The title of the article is 16 px. The category Latest Stories and Stop Stories is 22 px. It’s all in Arial. It would be one sentence about 2-3 lines.</p>
        </div>

      </div>
    </div>

    <!-- Sidebar -->
    <div class="span3">
      <?php get_sidebar(); ?>
    </div>
    
  </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<?php get_footer();?>
