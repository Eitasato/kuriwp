<?php get_header(); ?>
<!--メインエリア-->
  <div id="wrapper">
    <div class="container">
		<div>
			<?php get_the_category(); ?>
			<h3 class="tag-archive"><span class="tag-title">#<?php single_tag_title();?></span>の作品一覧</h3>
		</div>
		<div class="row">
		<?php
		$paged = get_query_var('paged', 1); // ページ送り用記述
		$tag = get_queried_object();
		$args = array(
			'post_status' => 'publish',
			'post_type' => 'post',
			'tag' => $tag->slug,
			'posts_per_page' => 9,
			'paged' => $paged, // ページ送り用記述
			'orderby' => 'date',
			'order' => 'DESC'
		 );
		$wp_query = new WP_Query($args);
		if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();
		?>

		<div class="col-md-4 col-sm-6">
		  <a href="<?php the_permalink(); ?>">
			<img src="<?php the_post_thumbnail_url('full'); ?>"  alt=""></a>
		</div>

		<?php endwhile; else: ?>

		  /* 投稿が無い場合 */

		  <?php endif; ?>
		</div>
<!-- pagination -->
	<div class="pagi-nation">
	<?php
	if ($wp_query->max_num_pages > 1) {
		echo paginate_links(array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => 'page/%#%/',
			'current' => max(1, $paged),
			'mid_size' => 1,
			'total' => $wp_query->max_num_pages ,
			'prev_text' => '＜',
			'next_text' => '＞',
			'type'    => 'list'
		));
	}
	wp_reset_postdata();?>
	</div><!-- /pagination -->
	  <!--/メインエリア-->
      <!--/ここにタグ一覧を追加-->
			   <div class="tag">
	  <h3>Tag</h3>
	<p>下記のタグをクリックすると作品を絞込検索できます - Click on a tag below to see other types of work - </p>
	  <ul>
		  <?php
		  $term_list = get_terms('post_tag');
		  $result_list = [];
		  foreach ($term_list as $term) {
			  $u = (get_term_link( $term, 'post_tag' ));
			  echo "<li><a href='".$u."'>".$term->name."</a></li>";
		  }
		  ?>
	  </ul>
  </div>
</div>
</div>
<?php get_footer(); ?>
