<?php
$page_title =  'О компании';
$header_style = 'page-header-bg-grey';

include_once('header-page.php');?>

<section class="section experts">
  <div class="container">
    <div class="experts-wrapper">
      <img src="./img/experts-logo.png" alt="" class="experts-image">
      <div class="experts-content">
      <div class="separator"></div>
        <h2 class="section-title experts-title">
        мы - эксперты в области производства химии
        </h2>
        <p class="experts-text">Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
<?php include_once('./template-parts/features-swiper.php')?>
</div>

<section class="section mission">
  <div class="container">
    <div class="mission-wrapper">
      <div class="mission-content">
      <div class="separator"></div>
        <h2 class="section-title mission-title">
        Наше производство
        </h2>
        <p class="mission-text">Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.</p>
        <p class="mission-text">Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.</p>
        <ul class="clients-list">
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="./img/sprite.svg#car"></use>
            </svg>
              Автомобильная химия
          </li> 
           <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="./img/sprite.svg#home"></use>
                </svg>
                Бытовая химия
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="./img/sprite.svg#dis"></use>
                </svg>
                Дезинфицирующие средства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="./img/sprite.svg#aerozol"></use>
                </svg>
                Пищевые аэрозоли
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="./img/sprite.svg#cosmetic"></use>
                </svg>
                Косметическая продукция
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="./img/sprite.svg#brush"></use>
                </svg>
                Краски аэрозольные
              </li>
            </ul>    
      </div>
      <img src="./img/worker.jpg" alt="worker" class="mission-img">
      </div>
  </div>
</section>

<?php include_once('./template-parts/founder-block.php')?>

<?php include_once('./template-parts/study-center-block.php')?>

<?php include_once('./template-parts/clients-block.php')?>

<?php include_once('footer.php');?>
