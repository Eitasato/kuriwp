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

	<div class="news-content">
    <div class="news-img">
    <a href="news-single.html"><img src="images/baigetsu.jpg" width="392px" height="240px" alt=""></a>
    </div>
    <div class="news-summary">
      <h4>個展開催のお知らせ</h4>
      <p>2021/03/04</p>
      <p>日時：〜〜〜</p>
      <p>場所：〜〜〜</p>
      <p>期間：〜〜〜</p>
      <p>ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p>
    </div>
  </div>
  <div class="news-content">
    <div class="news-img">
      <img src="images/baigetsu.jpg" width="392px" height="240px" alt="">
    </div>
    <div class="news-summary">
      <h4>個展開催のお知らせ</h4>
      <p>2021/03/04</p>
      <p>日時：〜〜〜</p>
      <p>場所：〜〜〜</p>
      <p>期間：〜〜〜</p>
      <p>ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p>
    </div>
  </div>
  <div class="news-content">
    <div class="news-img">
      <img src="images/baigetsu.jpg" width="392px" height="240px" alt="">
    </div>
    <div class="news-summary">
      <h4>個展開催のお知らせ</h4>
      <p>2021/03/04</p>
      <p>日時：〜〜〜</p>
      <p>場所：〜〜〜</p>
      <p>期間：〜〜〜</p>
      <p>ダミーテキストです。ダミーテキストです。ダミーテキストです。ダミーテキストです。</p>
    </div>
  </div>
 </div>
<?php get_footer(); ?>
