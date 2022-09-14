<?php get_header(); ?>
<!--メインエリア-->
  <div id="wrapper">
    <div class="container">
      <div class="row">
        <?php $args = array(
        'posts_per_page' => 9
      );
        ?>
		  <?php if(have_posts()): while(have_posts()):the_post(); ?>
		 <!--ここから再開 -->
  		<div class="col-md-4 col-sm-6">
          <a href="<?php the_permalink(); ?>">
  			<img src="<?php the_post_thumbnail_url('full'); ?>"  alt=""></a>
        </div>
		  <?php endwhile; endif; ?>
		</div>
		<!--/メインエリア-->
	  </div>
  </div>
<?php get_footer(); ?>
