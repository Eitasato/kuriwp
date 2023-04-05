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
<?php
function twpp_enqueue_scripts() {
  wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/js/script.js',
    array(),
    false,
    true
  );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );

// 固定カスタムフィールドボックス
function add_cd_fields() {
	//add_meta_box(表示される入力ボックスのHTMLのID, ラベル, 表示する内容を作成する関数名, 投稿タイプ, 表示方法)
	//第4引数のpostをpageに変更すれば固定ページにオリジナルカスタムフィールドが表示されます(custom_post_typeのslugを指定することも可能)。
	//第5引数はnormalの他にsideとadvancedがあります。
	add_meta_box( 'cd_setting', '作品情報', 'insert_cd_fields', 'post', 'normal');
}
add_action('admin_menu', 'add_cd_fields');


// カスタムフィールドの入力エリア
function insert_cd_fields() {
	global $post;

	//下記に管理画面に表示される入力エリアを作ります。「get_post_meta()」は現在入力されている値を表示するための記述です。
	echo '製作年： <input type="text" name="year_of_paint" value="'.get_post_meta($post->ID, 'year_of_paint', true).'" size="50" /><br>';
	echo '依頼主： <input type="text" name="client" value="'.get_post_meta($post->ID, 'client', true).'" size="50" /><br>';
}

// カスタムフィールドの値を保存
function save_cd_fields( $post_id ) {
	if(!empty($_POST['year_of_paint'])){ //題名が入力されている場合
		update_post_meta($post_id, 'year_of_paint', $_POST['year_of_paint'] ); //値を保存
	}else{ //題名未入力の場合
		delete_post_meta($post_id, 'year_of_paint'); //値を削除
	}

	if(!empty($_POST['cd_author'])){
		update_post_meta($post_id, 'cd_author', $_POST['cd_author'] );
	}else{
		delete_post_meta($post_id, 'cd_author');
	}

	if(!empty($_POST['cd_price'])){
		update_post_meta($post_id, 'cd_price', $_POST['cd_price'] );
	}else{
		delete_post_meta($post_id, 'cd_price');
	}
}
add_action('save_post', 'save_cd_fields');

?>
