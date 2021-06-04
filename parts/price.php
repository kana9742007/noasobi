<?php
if(is_page('share-house')):
  $cat = 'share_house';
endif;
if (is_page('office')) :
  $cat = 'rental_office';
endif;

$args = array(
  'post_type' => 'price',
  'order' => 'ASC',
  'post_status' => 'publish',
  'tax_query' => array(
    array(
      'taxonomy' => 'price_type',
      'field' => 'slug',
      'terms' => $cat,
    ),
  ),
);
$the_query = new WP_Query($args);
?>
<section class="price">
  <h2 class="section-title">price-賃貸空き状況と料金</h2>
  <ul class="price-ul">
    <li class="price-list-title">
      <div class="price-list-title-flex">
        <p class="child">部屋番号</p>
        <p class="child">家賃（光熱費込み）</p>
        <p class="child"></p>
        <p class="child">キャンペーン価格</p>
      </div>
    </li>
    <?php
    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
        $meta = get_post_meta(get_the_ID());
        $title = get_the_title();
        $price = get_field('rent');
        $campaign = get_field('campaign');

        $price = str_replace('　', '<br>', $price);
        $campaign = str_replace('　', '<br>', $campaign);
        $longTextFlug = get_field('long_text_flug');
        $campaignFlug = false;
        if ($campaign !== '') {
          $campaignFlug = true;
        }
    ?>
        <li class="price-list <?php if ($campaignFlug) : echo 'campaign_flug'; endif; ?>">
          <div class="price-list-flex">
            <p class="price-list-room"><?= $title ?></p>
            <p class="price-list-price"><?= $price ?></p>
            <?php if ($campaignFlug) : ?>
              <p class="price-list-campaign weight-normal">→</p>
              <p class="price-list-campaign"><?= $campaign ?></p>
            <?php endif; ?>
          </div>
        </li>
    <?php endwhile;
    endif; ?>
  </ul>
</section>
<?php wp_reset_query(); ?>