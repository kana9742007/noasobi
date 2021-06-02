<header>
  <a id="js-btn">
    <span class="inner_line" id="line1"></span>
    <span class="inner_line" id="line2"></span>
    <span class="inner_line" id="line3"></span>
  </a>
  <nav id="nav">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'header-menu'
      ));
    ?>
  </nav>
</header>