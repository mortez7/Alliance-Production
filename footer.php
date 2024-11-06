<section class="cta">
      <div class="bg-grey section-cta">
        <img src="./img/cta.png" alt="call to action" class="cta-image" />
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
              ответит на все интересующие вопросы и поможем даже в самых сложных
              случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                  id="user-name"
                  type="text"
                  class="input"
                  name="username"
                  placeholder=" "
                  maxlength="100"
                  required
                />
                <label class="input-group-label" for="user-name">Имя</label>
              </div>

              <div class="input-group">
                <input
                  id="user-phone"
                  type="tel"
                  class="input phone-mask"
                  name="userphone"
                  placeholder=" "
                  maxlength="30"
                  required
                />
                <label class="input-group-label" for="user-phone"
                  >Номер телефона</label
                >
              </div>
            </div>

            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg width="15" height="15" class="notify-icon">
                  <use href="./img/sprite.svg#shield"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную
                  работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo">
            <use href="./img/sprite.svg#logo"></use>
          </svg>
          <a href="tel:+74996861014" class="footer-phone">+7 (999) 686-10-14</a>
          <div class="footer-info">
            <svg width="24px" height="24px">
              <use href="./img/sprite.svg#mark"></use>
            </svg>
            <address class="footer-info-address">
              г. Москва, Холодильный пер. 4к1с8
            </address>
          </div>

          <div class="footer-info">
            <svg width="24px" height="24px">
              <use href="./img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email"
              >a.dragunov@tdaliance.ru</a
            >
          </div>

          <div class="footer-social">
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon" width="24px" height="24px">
                <use href="./img/sprite.svg#vk"></use>
              </svg>
            </a>

            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon" width="24px" height="24px">
                <use href="./img/sprite.svg#inst"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <hr color="#ebebf0" class="footer-separator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link"
                  >Дезинфицирующие средства</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>

          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>

          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr color="#ebebf0" class="footer-separator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">
              &copy; <?php echo date('d.m.Y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg width="52" height="11">
              <use href="./img/sprite.svg#ruso"></use>
            </svg>
          </div>
        </div>
      </div>
    </footer>

    <div class="modal">
      <div class="modal-dialog phone-modal">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal">
          <svg class="close-icon" width="24px" height="24px">
            <use href="./img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input
                id="modal-user-name"
                name="username"
                type="text"
                class="input modal-input"
                placeholder=" "
                required
              />
              <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
            </div>

            <div class="input-group modal-input-group">
              <input
                id="modal-user-phone"
                name="userphone"
                type="tel"
                class="input modal-input phone-mask"
                placeholder=" "
                required
              />
              <label class="input-group-label modal-input-label" for="modal-user-phone"
                >Номер телефона</label
              >
            </div>
          </div>

          <div class="modal-form-footer">
            <button type="submit" class="button cta-form-button modal-form-button">
              Отправить заявку
            </button>
            <div class="notify">
              <svg width="15" height="15" class="notify-icon">
                <use href="./img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную
                работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>

      <div class="modal-dialog modal-success">
        <img src="./img/thanks_illu.png" alt="thanks" class="modal-success-image">
      <h2 class="modal-title">Спасибо за заявку!</h2>
        <a href="#" class="modal-close" data-toggle="modal">
          <svg class="close-icon" width="24px" height="24px">
            <use href="./img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
        Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <div class="modal-form-footer">
          <button class="button cta-form-button success-button">
            Вернуться на главную
          </button>
        </div>
      </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>