<?php
$page_title =  'Блог';
$header_style = 'page-header-bg-grey header-bg-grey';

$breadcrumbs = [
    ['name' => 'Главная', 'url' => './'],
    ['name' => $page_title, 'url' => './blog.php']
  ];

include_once('./template-parts/header-page.php');?>

<section class="section blog-all">
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper blog-all-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide blog-all-slide">
                <div class="blog-all-slide-wrapper">
                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                </div>
            </div>
            <div class="swiper-slide blog-all-slide">
                <div class="blog-all-slide-wrapper">
                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                </div>
            </div>
            <div class="swiper-slide blog-all-slide">
                <div class="blog-all-slide-wrapper">
                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                </div>
            </div>
            <div class="swiper-slide blog-all-slide">
                <div class="blog-all-slide-wrapper">
                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                </div>
            </div>
            <div class="swiper-slide blog-all-slide">
                <div class="blog-all-slide-wrapper">
                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="./blog_more.php" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-photo.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-photo.jpg">
                            <img src="./img/blog/blog-photo.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text blog-all-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>

                    <a href="#" class="blog-card blog-all-card">
                        <picture>
                            <source type="image/webp" srcset="./img/blog/blog-post.webp">
                            <source type="image/jpeg" srcset="./img/blog/blog-post.jpg">
                            <img src="./img/blog/blog-post.jpg" alt="blog image" class="blog-card-image"/>
                        </picture>
                        <h3 class="blog-card-title blog-all-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text blog-all-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="blog-all-slider-footer">
            <div class="blog-all-pagination"></div>
        </div>
        
        </div>
    </div>
</section>

<?php include_once("./template-parts/cta-block.php");?>

<?php include_once("./template-parts/footer.php");?>