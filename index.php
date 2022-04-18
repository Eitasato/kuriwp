<?php get_header(); ?>
<!--メインイメージ-->
  <div class="mainimg" style="text-align:center">
      <img src="images/baigetsu.jpg" width="720" height="445" alt="">
  </div>
<!--/メインイメージ-->
<!--メインエリア-->
<div id="wrapper">
  <div class="container">
    <div class="row">
      <?php $args = array(
      'posts_per_page' => 9
    );
      ?>
      <?php $posts = get_posts($args); ?>
      <?php foreach ($posts as $post) : ?>
        <?php setup_postdata($post); ?>
        <!--ここから再開 -->
      <div class="col">
        <a href="<?php the_permalink(); ?>">
        <img src="<?php the_post_thumbnail_url('full'); ?>" width="281" height="281" alt="">
      </div>
      <?php endforeach; ?>
      <!--画像のアーカイブを表示（まずはbootstrapで）-->
    </div>
<!--/メインエリア-->
  </div>
</div>
<?php get_footer(); ?>
