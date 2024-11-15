<section class="section blog">
      <div class="container">
        <div class="separator"></div>

        <?php echo '<h2 class="section-title blog-title">' . $block_title . '</h2>'?>

        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="./blog_more.html" class="swiper-slide blog-card">
              <img
                src="./img/blog/blog-photo.jpg"
                alt=""
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="./blog_more.html" class="swiper-slide blog-card">
              <img
                src="./img/blog/blog-post.jpg"
                alt=""
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="./blog_more.html" class="swiper-slide blog-card">
              <img
                src="./img/blog/blog-photo.jpg"
                alt=""
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
          </div>

          <div class="blog-slider-footer">
            
            <?php if($block_title == "Блог экспертов в области производства") {
              echo '<a href="./blog.php" class="button-link">Весь блог</a>';
              }?>

            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg width="36" height="24" class="slider-arrow-prev" fill="#fff">
                  <use href="./img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg width="36" height="24" class="slider-arrow-next" fill="#fff">
                  <use href="./img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>