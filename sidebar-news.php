<div id="side">
<div class="side-content">
<div class="recentry">
  <h4 class="top-heading">個展のお知らせ</h4>
  	<ul>
		<?php $args = array('category_name' => 'solo', // カテゴリをスラッグで指定する場合
							'posts_per_page' => 5 ); // 表示件数の指定。get_postsで使うパラメーターの配列をここで作っている。
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
<div class="recentry">
  <h4>過去のお知らせ</h4>
	<ul>
	  <?php $args = array('category_name' => 'news', // カテゴリをスラッグで指定する場合
						  'posts_per_page' => 5 ); // 表示件数の指定。get_postsで使うパラメーターの配列をここで作っている。
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
</div>
<!--/サイドバー-->
