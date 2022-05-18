<?php get_header(); ?>
<main id="main">
  <article class="content">
    <div class="news-area">
      <!--<div class="topimg" style="text-align: center">
        <img src="images/55.jpg" width="608" height="376" alt="">
      </div>-->
	<div class="topimg" style="text-align: center">
      <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
      <?php endif; ?>
	</div>
      <section>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
  </section>
  </div>
  </article>
<!--/メインエリア-->
<!--サイドバー-->
<?php get_sidebar('news'); ?>
<!--/サイドバー-->
</main>
<?php get_footer(); ?>
