<?php wp_footer(); ?>

      <div class="footer appear up">
        <div class="logo item">
          <img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
          <span class="logo__stay">Stay</span>
          <span class="logo__world">World</span>
        </div>
        <nav class="footer__nav">
          <ul>
            <li class="footer__list item"><a href="#">Service</a></li>
            <li class="footer__list item"><a href="#">Contact</a></li>
            <li class="footer__list item"><a href="#">Company</a></li>
            <li class="footer__list item"><a href="#">Sitemap</a></li>
          </ul>
          <div class="footer__copyright item">&copy;Code Mafia</div>
        </nav>
      </div>
    </div>

    <nav class="mobile-menu">
      <div class="logo">
        <img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
        <span class="logo__stay">Stay</span>
        <span class="logo__world">World</span>
      </div>
      <ul class="mobile-menu__main">
        <li class="mobile-menu__item">
          <a class="mobile-menu__link" href="#">
            <span class="main-title">Our Service</span>
            <span class="sub-title">サービスについて</span>
          </a>
        </li>
        <li class="mobile-menu__item">
          <a class="mobile-menu__link" href="#">
            <span class="main-title">About Us</span>
            <span class="sub-title">私たちについて</span>
          </a>
        </li>
        <li class="mobile-menu__item">
          <a class="mobile-menu__link" href="#">
            <span class="main-title">Contact Us</span>
            <span class="sub-title">お問い合わせ方法</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</body>

</html>