<?php
/**
* ウィジェットの登録
*
* @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
*/
function my_widget_init() {
    register_sidebar(
    array(
    'name' => 'サイドバー', //表示するエリア名
    'id' => 'sidebar', //id
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title">',
    'after_title' => '</div>',
    )
    );
    }
    add_action( 'widgets_init', 'my_widget_init' );
    


function my_enqueue_style () {
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/css/style.css'
    );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_style');

/**
* カスタムフィールドを使ってアクセス数を取得する（特定記事のアクセス数確認用）
*
* @param integer $id 投稿id.
* @return void
*/
//アクセス数を取得
function get_post_views( $id = 0 ){
    global $post;
    //引数が渡されなければ投稿IDを見るように設定
    if ( 0 === $id ) {
    $id = $post->ID;
    }
    $count_key = 'view_counter';
    $count = get_post_meta($id, $count_key, true);
    
    if($count === ''){
    delete_post_meta($id, $count_key);
    add_post_meta($id, $count_key, '0');
    }
    return $count;
    }
    
    /**
    * アクセスカウンター
    *
    * @return void
    */
    function set_post_views() {
    global $post;
    $count = 0;
    $count_key = 'view_counter';
    
    if($post){
    $id = $post->ID;
    $count = get_post_meta($id, $count_key, true);
    }
    
    if($count === ''){
    delete_post_meta($id, $count_key);
    add_post_meta($id, $count_key, '1');
    }elseif( $count > 0 ){
    if(!is_user_logged_in()){ //管理者（自分）の閲覧を除外
    $count++;
    update_post_meta($id, $count_key, $count);
    }
    }
    //$countが0のままの場合（404や該当記事の検索結果が0件の場合）は何もしない。
    }
    add_action( 'template_redirect', 'set_post_views', 10 );


    /**
* メニューの登録
*
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
*/
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
)
);
}
add_action('init', 'my_menu_init');

// アイキャッチ画像
add_theme_support('post-thumbnails');

?>




