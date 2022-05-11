<?php get_header(); ?>
<main id="main">
  <article class="content">
    <div class="news-area">
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
  </section>
  </div>
  </article>
<!--/メインエリア-->
<!--サイドバー-->
<div id="side">
<div class="side-content">
<div class="recentry">
  <h4 class="top-heading">個展のお知らせ</h4>
  <ul>
    <li>思い出の風景</li>
    <li>結婚式似顔絵</li>
    <li>梅月菓子舗</li>
    <li>MOTOツーリング連載</li>
    <li>M'sLIFE表紙絵</li>
  </ul>
</div>
<div class="recentry">
  <h4>過去のお知らせ</h4>
  <ul>
    <li>思い出の風景</li>
    <li>結婚式似顔絵</li>
    <li>梅月菓子舗</li>
    <li>MOTOツーリング連載</li>
    <li>M'sLIFE表紙絵</li>
  </ul>
</div>

</div>
</div>
<!--/サイドバー-->
</main>
<?php get_footer(); ?>
