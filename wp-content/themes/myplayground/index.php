<!--
いらっしゃいませ。
　　　　∩∩
　　　（´･ω･）
　　 ＿|　⊃／(＿＿_
　／　└-(＿＿＿_／
　￣￣￣￣￣￣￣
-->

<!DOCTYPE html>
<html lang="en">
<!-- ヘッド＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
<header>
 <?php get_header(); ?>
</header>
<!-- ヘッド＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->

<!-- ボディー＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
<body>
<div class="wrapper">
<div class="container">

<div class="main">
  <div class="mainmain">
    <h1>Latest Posts</h1>
  <!-- 投稿======================================== -->
    <?php while (have_posts()): the_post(); ?>
    <a href="<?php the_permalink(); ?>">
    <div class="mainpost">
    <div class="mainpostcontainer">
      <div class="mainpost_content">
        <h2>
          <?php the_title(); ?>
        </h2>
        <h4>
          <?php the_excerpt();?>
        </h4>
        <div class="mainpost_written">
          <p>Written by 
            <?php the_author(); ?>
            <?php the_date();?>
          </p>
        </div>
      </div>
        <div class="mainpost_thumbnail">
        <?php the_post_thumbnail( array( 150, 150 ) ); ?>
        </div>
    </div>
    </div>
      </a>
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
     
<footer>
  <?php get_footer(); ?>
</footer>
</div>
</body>
</html>