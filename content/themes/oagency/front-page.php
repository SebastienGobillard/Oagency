<?php get_header(); ?>

<section class="slider">
  <div id="slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

<?php
  $display_slides = true;

  if (get_theme_mod('oagency_slides_active') == 'disabled') {
    $display_slides = false;
  }

  if ($display_slides) {

    $i = 0; 
    $posts_per_page = 3;

    if (get_theme_mod('oagency_slides_nbr_slides')) {
      $posts_per_page = get_theme_mod('oagency_slides_nbr_slides');
    }

    $slide_args = [
      'category_name' => 'slide',
      'order' => 'ASC',
      'posts_per_page' => $posts_per_page,
    ];

    $slides = new WP_Query($slide_args);

    if ($slides -> have_posts()) : while ($slides -> have_posts()) : $slides -> the_post(); 
?>

      <div class="carousel-item <?php if($i==0)echo 'active'; ?>">
        <div class="slide-content" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: 50% 90%;"></div>
          <div class="carousel-caption d-none d-md-block">
            <h3 class="carrousel__title"><?php the_title(); ?></h3>
            <button type="button" class="btn btn-info"><a href="<?php the_permalink(); ?>">Découvrir</a></button>
          </div>
        </div>  
            
<?php 
    $i++;
    endwhile; endif; 
    wp_reset_postdata(); 
  }
?>
      </div>
      <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
      
<?php
  $display_articles = true;

  if (get_theme_mod('oagency_articles_active') == 'disabled') {
    $display_articles = false;
  }

  if ($display_articles) { 
?>

<section class="posts" id="posts">
  <div class="posts__intro">
    <h1>Nos actualités</h1>
    <p>Découvrez nos dernières actualités:</p>
    <h2><i class="fa fa-th-large" aria-hidden="true"></i>Actualités</h2>
  </div>
  <div class="posts__content">

<?php
    $posts_per_page = 3;
    $posts_category = "news";

    if (get_theme_mod('oagency_articles_nbr_articles')) {
      $posts_per_page = get_theme_mod('oagency_articles_nbr_articles');
    }

    if (get_theme_mod('oagency_articles_info_category')){
      $posts_category = get_theme_mod('oagency_articles_info_category');
    }

    $article_args = [
      'category_name' => $posts_category,
      'orderby'  => 'rand',
      'posts_per_page' => $posts_per_page,
    ];

    $articles = new WP_Query($article_args);

    if ($articles->have_posts()): while($articles->have_posts()): $articles->the_post(); 
?>

    <article class="post">
      <hr>
      <div class="post__thumbnail" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover;"></div>
      <h2 class="post__title"><?php the_title(); ?></h2>
      <p class="post__content"><?php the_excerpt(); ?></p>
      <button type="button" class="btn btn-light">
        <a href="<?php the_permalink(); ?>">
          <i class="fa fa-link" aria-hidden="true"></i>
          Lire l'article
        </a>
      </button>
    </article>

<?php 
    endwhile; endif; 
    wp_reset_postdata(); 
  } 
?>

  </div>
</section>

<?php
  $display_banner = true;

  if (get_theme_mod('oagency_banner_active') == 'disabled') {
    $display_banner = false;
  }

  if ($display_articles) { 

    $banner_args = [
      'post_type' => 'post',
      'category_name' => 'banner',
      'orderby'  => 'rand',
      'posts_per_page' => 1
    ];

    $banners = new WP_Query($banner_args);

    if ($banners -> have_posts()) : while ($banners -> have_posts()) : $banners -> the_post(); 
?>
            
<section class="banner">
  <div class="calltoaction" id="banner" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: bottom; background-repeate: no-repeate;"></div>
  <div class="banner__info">
    <h1><?php the_title(); ?></h1>
    <p>
      <?php the_excerpt(); ?>
    </p>
    <button type="button" class="btn btn-warning"><a href="<a href="<?php the_permalink(); ?>">Button click</a></button>
    <button type="button" class="btn btn-success"><a href="<a href="<?php the_permalink(); ?>"></a>Another button</a></button>
  </div>
</section>

<?php 
    endwhile; endif; 
    wp_reset_postdata();
  }
?>

<?php get_footer(); ?>