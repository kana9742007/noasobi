<?php get_header(); ?>
<div class="share-house-wrapper">
  <div class="share-house-inner">
    <h1 class="share-house-title wow animate__animated animate__fadeIn"><?= the_title(); ?></h1>
    <?php get_template_part('parts/top/gallery'); ?>
    <p class="share-house-gallery-detail">荒尾市初の独立型シェアハウスです。<br>
      木材をふんだんに利用したリノベーション済の６部屋を準備しております。<br>
      高速wifi、シェアキッチン、ルーフトップ、キャンプ道具の貸し出しなど入居者特典が様々あります。<br>
      一人暮らしとして、セカンドハウスとして、個人デスクとしてご利用ください。
    </p>
    <?php get_template_part('parts/price'); ?>
    <?php get_template_part('parts/service'); ?>
    <?php get_template_part('parts/access'); ?>
  </div>
</div>
<?php get_footer(); ?>