<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title><?= $page_title;?> - Alliance Production</title>
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg width="24px" height="24px">
          <use href="./img/sprite.svg#mark"></use>
        </svg>
        <address class="mobile-info-address">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>

      <div class="mobile-info">
        <svg width="24px" height="24px">
          <use href="./img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email"
          >a.dragunov@tdaliance.ru</a
        >
      </div>

      <a href="#">
        <svg class="social-icon" width="24px" height="24px">
          <use href="./img/sprite.svg#vk"></use>
        </svg>
      </a>

      <a href="#">
        <svg class="social-icon" width="24px" height="24px">
          <use href="./img/sprite.svg#inst"></use>
        </svg>
      </a>
    </div>

    <nav class="navbar navbar-light">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>

      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="./img/sprite.svg#logo-light"></use>
        </svg>

        <svg class="logo-svg logo-dark">
          <use href="./img/sprite.svg#logo"></use>
        </svg>
      </a>

      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>

      <div class="header-phone">
        <svg class="phone-icon" width="24px" height="24px">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>

      <button class="button navbar-button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="24px" height="24px">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>

    <header class="page-header <?= $header_style ?>">
      <div class="container">
          <div class="separator"></div>
          <h1 class="page-header-title">
            <?= $page_title ?>
          </h1>

          <picture class="header-content-image">
            <source type="image/webp" srcset="./img/avtoHim.webp">
            <source type="image/png" srcset="./img/avtoHim.png">
            <img src="./img/avtoHim.png" alt="avtoHim" class="header-content-image">
          </picture>

          <ul class="breadcrumbs">

            <?php 
              foreach ($breadcrumbs as $key => $crumb) {
                if ($key < count($breadcrumbs) - 1) {
                  echo "<li class='breadcrumbs-item'>
                          <a href='{$crumb['url']}' class='breadcrumbs-link'>{$crumb['name']}</a>
                        </li>";
                } else {
                  echo "<li class='breadcrumbs-item active'>
                        <a href='{$crumb['url']}' class='breadcrumbs-link'>{$crumb['name']}</a>
                        </li>";
                }
              }
              ?>
            
          </ul>
      </div>
    </header>