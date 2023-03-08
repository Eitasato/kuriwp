<?php get_header(); ?>
<!--メインエリア-->
  <div id="wrapper">
    <div class="container">
      <div class="row">
<?php
$paged = get_query_var('paged', 1); // ページ送り用記述
$args = array(
    'post_status' => 'publish',
    'post_type' => 'post',
    'category_name' => 'works',
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
	  </div>
  </div>
<?php get_footer(); ?>
