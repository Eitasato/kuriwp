<?php get_header(); ?>
<!--メインエリア-->
  <div id="wrapper">
    <div class="container">
      <div class="row">
		<?php
		  $cat_posts = get_posts(array(
			  'post_type' => 'post', // 投稿タイプ
			  'category_name' => 'works', // カテゴリをスラッグで指定する場合
			  'posts_per_page' => 6, // 表示件数
			  'orderby' => 'date', // 表示順の基準
			  'order' => 'DESC' // 昇順・降順
		  ));
		  global $post;
		  if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
		  <div class="col-md-4">
			  <a href="<?php the_permalink(); ?>">
				  <img src="<?php the_post_thumbnail_url('full'); ?>"  alt=""></a>
		  </div>
		  <?php endforeach; endif; wp_reset_postdata(); ?>
		</div>
		<!--/メインエリア-->
	  </div>
  </div>
<?php get_footer(); ?>
