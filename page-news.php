<?php get_header(); ?>
<div id="news">
<?php
$paged = get_query_var('paged', 1); // ページ送り用記述
$args = array(
    'post_status' => 'publish',
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 6,
    'paged' => $paged, // ページ送り用記述
    'orderby' => 'date',
    'order' => 'DESC'
 );
$wp_query = new WP_Query($args);
if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();
?>

<!-- ループはじめ -->
<div class="news-content">
    <div class="news-img">
		<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('full'); ?>" width="392px" height="240px" alt=""></a>
    </div>
	<div class="news-summary">
		<h4 class="news-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
		<!-- <p> <//?php the_time('Y/m/d') ?></p>
		<p><//?php the_excerpt(); ?></p> -->
	</div>
	</div>
<!-- ループおわり -->
<?php endwhile; else: ?>
 /* 投稿が無い場合 */
<?php endif; ?>
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
</div>
<?php get_footer(); ?>
