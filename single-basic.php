<?php get_header(); ?>
<!--メインエリア-->
<main id="main">
	<article class="content">
		<div class="content-area">
			<div class="topimg" style="text-align: center">
				<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail(); ?>
				<?php endif; ?>
			</div>
      <section>
		  <h2><?php the_title(); ?></h2>
		  <span class="info"><?php echo get_post_meta($post->ID, 'year_of_paint', true); ?>
		  <?php echo get_post_meta($post->ID, 'client', true); ?></span>
		  <?php the_content(); ?>
    </section>
<!--レコメンドエリア-->
 <section>
<!--同一タグの記事一覧-->
	 <?php
	 	$tags = wp_get_post_tags($post->ID); //記事の投稿タグを取得する
		 if($tags):
		$tagID = array(); //$tagIDに現在のIDを代入
		 foreach($tags as $tag){
			 array_push($tagID, $tag -> term_id);
		 }
		$args = array(
			'tag__in' => $tagID,
			'post__not_in' => array($post->ID),
			'posts_per_page' => 3,
			'ignore_sticky_posts'=>1,
			'orderby'=>'rand',
		);
		$my_query = new WP_Query($args);

		if($my_query-> have_posts()):
	?>
	<h3>Recommend</h3>
		 <div class="recommend">
			<?php while($my_query->have_posts()): $my_query->the_post(); ?>
			 <div class="cell">
				 <a href="<?php the_permalink(); ?>">
					 <?php if(has_post_thumbnail()): the_post_thumbnail('shop_thumbnail');
					else: ?>
					 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimg-125.png" alt="<?php the_title(); ?>">
					 <?php endif; ?></a>
				 <div class="post-title">
					 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				 </div>
			 </div>
			 <?php endwhile; ?>
	 </div>
	<?php endif;?>
	 <?php endif;
	 wp_reset_postdata(); ?>
<!--/同一タグの記事一覧-->
			</section>
		</div>
<!--/レコメンドエリア-->
</article>
<!--/メインエリア-->
<!--サイドバー-->
<?php get_sidebar(); ?>
<!--/サイドバー-->
</main>
<?php get_footer(); ?>
