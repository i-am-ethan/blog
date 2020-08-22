
<meta charset="<?php bloginfo('charset'); ?>">
<!-- スタイルシートを呼び出す -->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
<!-- ヘッダーを呼び出す -->
<?php wp_head(); ?>
<h1>My PlayGround</h1>
<h2>Written by Ethan</h2>

<!-- ナビメニュー================================ -->
<div class="nav">
     
<!-- header-nav -->
<div class="nav1">
      <ul id="nav1">
            <li id="nav1nav1">
                  <?php
                  wp_nav_menu();
                  ?>
            </li>
      </ul>
</div><!-- /inner -->


</div>
<!-- ナビメニュー================================ -->