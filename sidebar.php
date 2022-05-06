<div id="side">
  <div class="profile_img" style="text-align: center">
    <img src="<?php  echo get_template_directory_uri() ?>/images/Side_Profile.jpg" width="235.2" height="235.2" alt="">
  </div>

  <h3>栗谷さと子</h3>
  <p>1988年福井県生まれ。神奈川県出身。
2007年、長野県松本市に移住し、信州大学理学部で生物科学を専攻。
動植物の観察スケッチが得意だった。
卒業後の現在も松本に残り、カンデラゲストハウスを営みつつ、イラストレーターとしても活動。</p>
  <div class="tag">
	  <h3>Tag</h3>
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
  <div class="recentry">
    <h3>Recentry</h3>
	  <ul>
		  <?php $args = array('posts_per_page' => 5 ); // 表示件数の指定。get_postsで使うパラメーターの配列をここで作っている。
		  $posts = get_posts( $args );
		  foreach ( $posts as $post ): // ループの開始
		  setup_postdata( $post ); // 記事データの取得
		  ?>
		  <li>
			  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		  </li>
		  <?php
		  endforeach; // ループの終了
		  wp_reset_postdata(); // 直前のクエリを復元する
		  ?>
</ul>
  </div>
</div>
