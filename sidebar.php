<div id="side">
	<div class="profile_img" style="text-align: center">
		<img src="<?php  echo get_template_directory_uri() ?>/images/Side_Profile.jpg" width="" height="" alt="">
	</div>
  <h3>Kuriya Satoko</h3>
  <p>Japanese artist.
Born in 1988.
Live in New Zealand since 2022.
Love nature, travel, creativity.</p>
<p>
	<a href="https://www.facebook.com/illustrator.kuri">Facebook</a> / <a href="https://www.instagram.com/illustrator.kuri/">Instagram</a><br>
	@illustrator.kuri</p>
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
  <div class="recently">
    <h3>Recently</h3>
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
