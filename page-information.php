<?php get_header(); ?>

<div id="content" class="informaiton">
  <div class="information__head-line">
    hello
  </div>
  <section class="travel">
    <div class="travel__inner">
      <div class="travel__img cover-slide">
        <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/image-travel.jpg" />
      </div>
      <div class="travel__texts appear left">
        <div class="travel__texts-inner">
          <div class="travel__title main-title item">
            <span class="purple">Travel</span>
            <span>the world</span>
          </div>
          <div class="travel__sub sub-title item">
            世界中を旅しよう
          </div>
          <div class="travel__description item">
            <p>世界１５０ヶ国で<br />利用できる民泊サービスです。</p>
            <p>あなたの望む宿がきっと見つかります。</p>
          </div>
          <div class="travel__btn item">
            <button class="btn filled">もっと詳しく</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>