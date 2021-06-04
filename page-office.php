<?php get_header(); ?>
<div class="share-house-wrapper">
  <div class="share-house-inner">
    <h1 class="share-house-title wow animate__animated animate__fadeIn"><?= the_title(); ?></h1>
    <?php get_template_part('parts/top/gallery'); ?>
    <p class="share-house-gallery-detail">収容人数最大１０人の多目的ルームは会議室、シアタールームとして利用できます。<br>
    またそれぞれにトイレとシャワールームがついた３つの個室、荒尾市を一望できる自慢のルーフトップガーデンをレンタルスペースとしてお貸出し致します。
    </p>
    <?php get_template_part('parts/price'); ?>
  </div>
  <?php get_template_part('parts/rent'); ?>
</div>
<?php get_footer(); ?>