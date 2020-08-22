<!--
いらっしゃいませ。
　　　　∩∩
　　　（´･ω･）
　　 ＿|　⊃／(＿＿_
　／　└-(＿＿＿_／
　￣￣￣￣￣￣￣
-->

<!DOCTYPE html>
<html lang="ja">
<!-- ヘッダーを呼び出す＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
<header>
 <?php get_header(); ?>
</header>
<!-- ヘッダーを呼び出す＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->

<!-- ボディー＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
<body>
 <div class="wrapper">
  <div class="container">

<div class="main">
  <div class="mainmain">
    <h1>Latest Posts</h1>
  <!-- 投稿======================================== -->
    <?php while (have_posts()): the_post(); ?>
    <p href="<?php the_permalink(); ?>">
    <div class="mainpost">
      <h2>
        <?php the_title(); ?>
      </h2>
      <h4>
        <?php the_content();?>
      </h4>
      <p>Written by 
        <?php the_author(); ?>
        <?php the_date(Y-m-d);?>
      </p>
    </div>
      </p>
      <hr>
  <?php endwhile; ?>
  <?php echo paginate_links(); ?>
  <!-- 投稿======================================== -->
  </div>
</div>

<div class="side">
  <div class="sideside">
    <?php get_sidebar(); ?>
  </div>
</div>
</div>
     
<footer>footer</footer>
   <?php wp_footer(); ?>
</div>
</body>
</html>