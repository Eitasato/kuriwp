<?php
function my_scripts() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
?>

<?php
	// サイトナビゲーションメニュー
	register_nav_menus(array(
							'nav' => 'グロナビ',
							'snav' => 'サイドナビ'));
	register_nav_menus(array('fnav' => 'フッターナビ'));

	//エディタ用スタイルシート
	add_editor_style();
?>

<?php add_theme_support('post-thumbnails'); ?>
