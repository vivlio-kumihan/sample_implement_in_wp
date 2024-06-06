<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kameron:wght@400..700&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js" defer></script>
  <script src="./scripts/libs/mobile-menu.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
  <script src="./scripts/libs/hero-slider.js" defer></script>
  <script src="./scripts/vendors/gsap.min.js" defer></script>
  <script src="./scripts/libs/text-animation.js" defer></script>
  <script src="./scripts/libs/scroll.js" defer></script>
  <script src="./scripts/main.js" defer></script>

</head>

<body <?php body_class(); ?>>
  <div id="global-container">
    <div id="container">
      <div class="mobile-menu__cover"></div>
      <div class="nav-trigger"></div>
      <div class="header">
        <div class="header-bg"></div>
        <div class="header__inner appear up">
          <div class="logo item">
            <img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
            <span class="logo__stay">Stay</span>
            <span class="logo__world">World</span>
          </div>

          <nav class="header__nav">
            <ul>
              <li class="header__list item"><a href="#">Service</a></li>
              <li class="header__list item"><a href="#">Company</a></li>
              <!-- 部品を作ってクラスに定義しておいて、本文で適用する威力をまざまざと感じる。 -->
              <li class="header__list item"><a class="btn filled" href="#">Contact</a></li>
            </ul>
          </nav>

          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <?php wp_head(); ?>