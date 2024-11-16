<?php
$page_title =  'Контрактное производство';
$header_style = 'page-header-bg-grey';

$breadcrumbs = [
    ['name' => 'Главная', 'url' => './'],
    ['name' => $page_title, 'url' => './contracts.php']
  ];

include_once('./template-parts/header-page.php');?>

<?php include_once('./template-parts/production-block.php')?>

<section class="section seo">
    <div class="container">
        <h2 class="seo-title">SEO Заголовок</h2>
        <p class="seo-text">Также как дальнейшее развитие различных форм деятельности предполагает независимые способы реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: курс на социально-ориентированный национальный проект играет важную роль в формировании как самодостаточных, так и внешне зависимых концептуальных решений. Внезапно, интерактивные прототипы набирают популярность среди определенных слоев населения, а значит, должны быть...</p>
        <a href="#" class="seo-link">
        <svg width="24px" height="24px">
          <use href="./img/sprite.svg#load"></use>
        </svg>
            Читать больше
        </a>
    </div>
</section>

<?php include_once("./template-parts/cta-block.php");?>

<?php include_once("./template-parts/footer.php");?>
