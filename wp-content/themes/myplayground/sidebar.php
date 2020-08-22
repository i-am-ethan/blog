<!-- プロフィール：widget_custom_html -->
<div class="widget widget_text widget_custom_html">
<div class="widget-title"><h1>Profile</h1></div>

<div class="wprofile">
<div class="wprofile-img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt=""></div>
<div class="wprofile-content">
<h2>Ethan</h2>
<p>Hi! My name is Ethan.<br>
Nice to meet you.<br>
I'm trying system engineering<br>
thank you for visit My PlayGround!
</p>
</div>
<!-- /wprofile-content -->
<nav class="wprofile-sns">
<div class="wprofile-sns-item m_twitter"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-twitter"></i></a></div>
<div class="wprofile-sns-item m_facebook"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-facebook-f"></i></a></div>
<div class="wprofile-sns-item m_instagram"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-instagram"></i></a></div>
</nav>
</div><!-- /wprofile -->
</div><!-- /widget_custom_html -->

<!-- 検索：widget_search -->
<div class="widget widget_search">
<div class="widget-title"><h2>Search Posts<h2></div>
<!-- search-form -->
<form method="get" class="search-form" action="<?php echo home_url('/'); ?>">
<input type="search" class="search-field" value="" placeholder="keywords" name="s" id="s">
<button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
</form><!-- /search-form -->
</div><!-- /widget_search -->

<!-- <?php get_search_form(); ?> でもデフォルトの検索フォームを表示できる -->


<!-- widget_popular -->
<div class="widget widget_popular">
<div class="widget-title"><h2>Lanking</h2></div>

<div class="wpost-items m_ranking">
<?php
// get_post_viewsで適宜アクセス数を確認
// $counter = get_post_views();
$args = array(
'post_type' => 'post',
'posts_per_page' => 5,
'meta_key' => 'view_counter',
'orderby' => 'meta_value_num',
'order' => 'DESC',
);
$popular_posts = get_posts( $args );
foreach($popular_posts as $post): setup_postdata( $post );
?>

<!-- wpost-item -->
<a class="wpost-item" href="<?php the_permalink(); ?>">
<div class="wpost-item-img">

<!-- サイドバーに画像を出力 -->
<!-- ここに書く -->
<!-- サイドバーに画像を出力 -->

</div>
<div class="wpost-item-body">
<div class="wpost-item-title"><?php the_title(); ?></div>
</div><!-- /wpost-item-body -->
</a><!-- /wpost-item -->

<?php
endforeach; wp_reset_postdata();
?>

</div><!-- /wpost-items -->
</div><!-- /widget_popular -->



<!-- widget_recent -->
<div class="widget widget_recent">
<div class="widget-title"><h2>Latest Posts</h2></div>

<div class="wpost-items">
<?php
$args = array(
'post_type' => 'post',
'posts_per_page' => 5,
'orderby' => 'date',
'order' => 'DESC',
);
$new_posts = get_posts($args);
foreach($new_posts as $post): setup_postdata( $post );
?>

<!-- wpost-item -->
<a class="wpost-item" href="<?php the_permalink(); ?>">
<div class="wpost-item-img">
  


</div>
<div class="wpost-item-body">
<div class="wpost-item-title"><?php the_title(); ?></div>
</div><!-- /wpost-item-body -->
</a><!-- /wpost-item -->

<?php endforeach; wp_reset_postdata(); ?>

</div><!-- /wpost-items -->
</div><!-- /widget_recent -->



<!-- widget_archive -->
<div class="widget widget_archive">
<div class="widget-title"><h2>calendar</h2></div>
<ul>
<?php
//初期値なので$argsは書かなくてもOK
$args = array(
'type' => 'monthly',
'limit' => '',
'format' => 'html',
'before' => '',
'after' => '',
'show_post_count' => false,
'echo' => 1,
'order' => 'DESC',
'post_type' => 'post'
);
wp_get_archives( $args );
?>
</ul>
</div><!-- /widget_archive -->