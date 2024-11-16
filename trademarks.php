<?php
$page_title =  'Собственные торговые марки';
$header_style = 'page-header-bg-grey';

$breadcrumbs = [
    ['name' => 'Главная', 'url' => './'],
    ['name' => $page_title, 'url' => './trademarks.php']
  ];

include_once('./template-parts/header-page.php');
include_once('./template-parts/trademarks-block.php')?>

<?php include_once("./template-parts/cta-block.php");?>

<?php include_once("./template-parts/footer.php");?>
