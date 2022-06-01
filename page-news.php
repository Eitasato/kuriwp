<?php get_header(); ?>
<div id="news">
<?php
$cat_posts = get_posts(array(
    'post_type' => 'post', // 投稿タイプ
    'category_name' => 'news', // カテゴリをスラッグで指定する場合
    'posts_per_page' => 6, // 表示件数
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC' // 昇順・降順
));
global $post;
if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>

<!-- ループはじめ -->
<div class="news-content">
    <div class="news-img">
		<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('full'); ?>" width="392px" height="240px" alt=""></a>
    </div>
	<div class="news-summary">
		<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
		<p><?php the_time('Y/m/d') ?></p>
		<p><?php the_excerpt(); ?></p>
	</div>
	</div>
<!-- ループおわり -->

<?php endforeach; endif; wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>
