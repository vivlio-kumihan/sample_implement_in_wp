<?php get_header(); ?>

<div id="content">
  <div class="hero">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="hero__title">Enjoy Rich</div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/image-1.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <div class="hero__title">Fantascitc</div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/image-2.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <div class="hero__title">Experience</div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/image-3.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <div class="hero__title">Enjoy Rich</div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/image-1.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <div class="hero__title">Fantascitc</div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/image-2.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <div class="hero__title">Experience</div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/image-3.jpg" alt="">
        </div>
      </div>
      <div class="hero__footer">
        <img class="hero__down-allow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="">
        <span class="hero__scorll-text">scroll</span>
      </div>
    </div>
  </div>
  <div id="main-content">
    <!-- なるほど！　芸が細かい。
    mainコンテンツを挟んで左右にサイド・バーをつけるから
    構造もそれに合わせるというわけだ。徹底している。 -->
    <aside class="side left">
      <div class="side__inner">
        <a class="twitter icon animate-title" href="#">Twitter</a>
        <a class="facebook icon animate-title" href="#">Facebook</a>
      </div>
    </aside>
    <main>
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

      <section class="houses">
        <div>
          <h2 class="main-title animate-title">Find Your HouseFind Your HouseFind Your HouseFind Your HouseFind Your HouseFind Your HouseFind Your House</h2>
          <p class="sub-title animate-title">お気に入りの宿泊先を見つけよう!</p>
        </div>
        <div class="houses__inner">
          <div class="houses__item">
            <div class="cover-slide hover-darken">
              <div class="bg-img-zoom img-bg50"></div>
            </div>
            <p class="houses__title">House 1</p>
          </div>
          <div class="houses__item">
            <div class="cover-slide hover-darken">
              <div class="bg-img-zoom img-bg50 two"></div>
            </div>
            <p class="houses__title">House 2</p>
          </div>
          <div class="houses__item">
            <div class="cover-slide hover-darken">
              <div class="bg-img-zoom img-bg50 three"></div>
            </div>
            <p class="houses__title">House 3</p>
          </div>
          <div class="houses__item">
            <div class="cover-slide hover-darken">
              <div class="bg-img-zoom img-bg50 four"></div>
            </div>
            <p class="houses__title">House 4</p>
          </div>
          <div class="houses__item">
            <div class="cover-slide hover-darken">
              <div class="bg-img-zoom img-bg50 five"></div>
            </div>
            <p class="houses__title">House 5</p>
          </div>
          <div class="houses__item">
            <div class="cover-slide hover-darken">
              <div class="bg-img-zoom img-bg50 six"></div>
            </div>
            <p class="houses__title">House 6</p>
          </div>
          <div class="houses__btn appear up">
            <button class="btn slide-bg item">もっと詳しく</button>
          </div>
        </div>
      </section>

      <section class="popular">
        <div class="popular__header">
          <h2 class="main-title animate-title">Popular Place</h2>
          <p class="sub-title animate-title">
            人気の観光地で宿泊先を見つけましょう!
          </p>
        </div>
        <div class="popular__inner appear up">
          <div class="popular__container">
            <div class="popular__item item">
              <div class="popular__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image-p1.jpg" alt="">
              </div>
              <p class="popular__title">パリ</p>
            </div>
            <div class="popular__item item">
              <div class="popular__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image-p2.jpg" alt="">
              </div>
              <p class="popular__title">ニューヨーク</p>
            </div>
            <div class="popular__item item">
              <div class="popular__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image-p3.jpg" alt="">
              </div>
              <p class="popular__title">香港</p>
            </div>
            <div class="popular__item item">
              <div class="popular__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image-p4.jpg" alt="">
              </div>
              <p class="popular__title">大阪</p>
            </div>
            <div class="popular__btn appear up">
              <!-- ここも大切。 -->
              <!-- 汎用的に効果を運用するクラス作成。 -->
              <button class="btn cover-3d item">
                <span>一覧から探す</span>
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>

    <aside class="side right">
      <div class="side__inner">
        <span class="animate-title">&copy; Code Mafia</span>
      </div>
    </aside>
  </div>
</div>

<?php get_footer(); ?>