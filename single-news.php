<?php get_header(); ?>
<main id="main">
<!--コンテンツエリア-->
  <article class="content">
    <div class="news-area">
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
<!--サイドバー-->
<?php get_sidebar('news'); ?>
</main>
<?php get_footer(); ?>
