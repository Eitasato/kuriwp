<?php get_header(); ?>
<!--メインイメージ-->
<!-- <div class="mainimg" style="text-align:center">
      <img src="images/baigetsu.jpg" width="720" height="445" alt="">
  </div>-->
<div class="main-slider">
	<div class="carousel">
		<ul class="carousel-area">
			<li class="carousel-list"><img class="carousel-img" src="<?php echo esc_url(get_theme_file_uri('images/1.jpg')); ?>" alt="ハムスターの画像"></li>
			<li class="carousel-list"><img class="carousel-img" src="/images/1.jpg" alt="羊の画像"></li>
			<li class="carousel-list"><img class="carousel-img" src="/images/1.jpg" alt="亀の画像"></li>
			<li class="carousel-list"><img class="carousel-img" src="/images/1.jpg" alt="鳥の画像"></li>
			<li class="carousel-list"><img class="carousel-img" src="/images/1.jpg" alt="ライオンの画像"></li>
		</ul>
		<div class="arow-wrap">
			<div class="arrow-left">
				<button class="arrow-btn js-btn-back" type="button"></button>
			</div>
			<div class="arrow-right">
				<button class="arrow-btn js-btn-next" type="button"></button>
			</div>
		</div>
	</div>
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
		<div class="col-md-4">
        <a href="<?php the_permalink(); ?>">
			<img src="<?php the_post_thumbnail_url('full'); ?>"  alt=""></a>
      </div>
      <?php endforeach; ?>
      <!--画像のアーカイブを表示（まずはbootstrapで）-->
    </div>
<!--/メインエリア-->
  </div>
</div>
<?php get_footer(); ?>
