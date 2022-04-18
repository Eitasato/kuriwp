<?php get_header(); ?>
<!--メインエリア-->
  <main id="main">
    <article class="content">
    <div class="content-area">
      <!--<div class="topimg" style="text-align: center">
        <img src="images/55.jpg" width="608" height="376" alt="">
      </div>-->
	<div class="topimg" style="text-align: center">
      <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
      <?php endif; ?>
	</div>
      <section>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
<!--      <div class="sub_img">
              <img src="images/sub1.jpg" width="172" height="172" alt="">
              <img src="images/sub2.jpg" width="172" height="172" alt="">
      </div>-->
    </section>
<!--レコメンドエリア-->
    <section>
        <h3>Reccomend</h3>
<!--同一タグの記事一覧-->
<?php
//記事の投稿タグを取得する
$tags = wp_get_post_tags($post->ID);

if($tags):
//$tagIDに現在のIDを代入
$tagID = array();
foreach($tags as $tag){
	array_push($tagID, $tag -> term_id);
}

$args = array(
	'tag__in' => $tagID,
	'post__not_in' => array($post->ID),
	'posts_per_page' => 6,
	'ignore_sticky_posts'=>1,
	'orderby'=>'rand',
);

$my_query = new WP_Query($args);

if($my_query-> have_posts()):
?>
<div class="recommend">
	<?php while($my_query->have_posts()): $my_query->the_post(); ?>
		<div class="cell">
		<a href="<?php the_permalink(); ?>">
			<?php if(has_post_thumbnail()): the_post_thumbnail('thumbnail');
				else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimg-125.png" alt="<?php the_title(); ?>">
				<?php endif; ?>
				</a>
				<div class="post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
		</a>
	</div>
	<?php endwhile; ?>
</div>
	<?php endif;?>

<?php endif;
	 wp_reset_postdata(); ?>
<!--/同一タグの記事一覧-->
        </div>
    </section>
<!--/レコメンドエリア-->
  </div>
    </article>
<!--/メインエリア-->
<!--サイドバー-->
<div id="side">
  <div class="profile_img" style="text-align: center">
    <img src="images/Side_Profile.jpg" width="235.2" height="235.2" alt="">
  </div>

  <h3>栗谷さと子</h3>
  <p>1988年福井県生まれ。神奈川県出身。
2007年、長野県松本市に移住し、信州大学理学部で生物科学を専攻。
動植物の観察スケッチが得意だった。
卒業後の現在も松本に残り、カンデラゲストハウスを営みつつ、イラストレーターとしても活動。</p>
  <div class="tag">
    <h3>Tag</h3>
    <ul>
      <li><a href="#">似顔絵</a></li>
      <li><a href="#">動物</a></li>
      <li><a href="#">展示</a></li>
      <li><a href="#">建物</a></li>
      <li><a href="#">旅</a></li>
    </ul>
  </div>

  <div class="recentry">
    <h3>Recentry</h3>
    <ul>
      <li>思い出の風景</li>
      <li>結婚式似顔絵</li>
      <li>梅月菓子舗</li>
      <li>MOTOツーリング連載</li>
      <li>M'sLIFE表紙絵</li>
    </ul>
  </div>
</div>
<!--/サイドバー-->
</main>

<?php get_footer(); ?>
