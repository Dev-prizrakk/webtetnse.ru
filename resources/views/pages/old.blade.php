@extends('layouts.app')

@section('content')

  <header>
    <div class="logo">
      <img src="{{ asset('images/logo.svg') }}" alt="WEBTENSE">
      <span class="slogan">Веб-разработка и поддержка для вашего успеха в интернете</span>
    </div>
    <nav>
      <ul>
        <li><a href="#">Разработка</a></li>
        <li><a href="#">Поддержка</a></li>
        <li><a href="#">Интеграции</a></li>
        <li><a href="#">Битрикс24</a></li>
        <li><a href="#">Портфолио</a></li>
        <li><a href="#">Блог</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-bg" style="background-image: url('{{ asset('images/background.png') }}');"></div>
    <h1>Разработка и поддержка сайтов под ключ</h1>
    <p>С 2019 года решаем задачи бизнеса по веб-разработке. Делаем сайты и веб-сервисы от идеи до запуска.</p>
    <div class="links">
      <a href="#">Разработка</a>
      <a href="#">Поддержка</a>
      <a href="#">Интеграции</a>
      <a href="#">Битрикс24</a>
    </div>
    <div class="contact-buttons">
      <a href="#">📞</a>
      <a href="#">💬</a>
    </div>
  </section>


  <section id="services" class="services">
    <div class="container">
      <h2 class="section-title">Услуги</h2>
      <div class="services__list">
        <article class="service-card">
          <h3>Создание сайтов под ключ</h3>
          <p>Комплекс работ от ТЗ до готового сайта. Agile/Waterfall.</p>
        </article>

        <article class="service-card">
          <h3>Обслуживание веб сайтов</h3>
          <p>Тех. поддержка: нормо-час 3 000 ₽, персональный менеджер.</p>
        </article>

        <article class="service-card">
          <h3>Интеграции</h3>
          <p>Bitrix24, RetailCRM, 1С, МойСклад и др. по запросу.</p>
        </article>

        <article class="service-card">
          <h3>Bitrix24</h3>
          <p>Настройка, внедрение и сопровождение портала.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="estimate">
    <div class="container estimate__wrap">
      <div class="estimate__left">
        <h2>Запросить расчет сметы</h2>

        <form action="{{ route('contact.send') }}" method="POST" class="estimate__form">
          @csrf
          <label class="label">Выберите услугу</label>
          <div class="estimate__services">
            <button type="button" class="tag active">Разработка сайтов</button>
            <button type="button" class="tag">Тех. поддержка</button>
            <button type="button" class="tag">Интеграции</button>
          </div>

          <div class="two-cols">
            <div>
              <label>Имя*</label>
              <input name="name" required placeholder="Введите ваше имя">
            </div>
            <div>
              <label>Телефон*</label>
              <input name="phone" required placeholder="Введите ваш телефон">
            </div>
          </div>

          <label>E-mail*</label>
          <input name="email" required placeholder="Введите ваш E-mail">

          <div class="estimate__submit">
            <button class="btn btn-primary" type="submit">Отправить заявку</button>
            <p class="small-note">Нажимая на кнопку "Оставить заявку", Вы даёте согласие на обработку персональных данных.
            </p>
          </div>
        </form>
        <img src="{{ asset('images/calc-decor.svg') }}" alt="Декор">
      </div>

      <div class="estimate__right">

      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio">
    <div class="container">
      <h2 class="section-title">Портфолио</h2>

      <div class="portfolio__grid">
        <div class="portfolio__item gradient">
          <img src="{{ asset('images/portfolio1.jpg') }}" alt="">
          <p>Интернет-магазин NEMIFIST</p>
        </div>
        <div class="portfolio__item">
          <img src="{{ asset('images/portfolio2.jpg') }}" alt="">
          <p>Корпоративный сайт «Сфера безопасности»</p>
        </div>
        <!-- add more items -->
      </div>

      <a class="btn btn-ghost portfolio__more" href="#portfolio">В портфолио</a>
    </div>
  </section>

  <section class="booklet">
    <div class="container booklet__wrap">
      <div class="booklet__left">
        <h2>Скачать сборник идей для разработки сайта</h2>
        <p class="accent">50 «лайфхаков», которые могут быть полезны при проектировании сайта</p>
        <form action="#" class="booklet__form">
          <input placeholder="Имя" required>
          <input placeholder="Телефон" required>
          <input placeholder="Email" required>
          <button class="btn btn-gradient" type="submit">Скачать книгу</button>
        </form>
      </div>
      <div class="booklet__right">
        <img src="{{ asset('images/booklet.png') }}" alt="">
      </div>
    </div>
  </section>

  <section class="company">
    <div class="container">
      <h2>Коротко о компании</h2>
      <p>Мы создаём сайты и веб-сервисы, решающие задачи клиентов. От идеи и прототипа — до внедрения, поддержки и
        аналитики.</p>

      <div class="stats">
        <div class="stat"><strong>4.7</strong><span>Средняя оценка</span></div>
        <div class="stat"><strong>115</strong><span>Проектов завершено</span></div>
        <div class="stat"><strong>10 140</strong><span>Часов работы</span></div>
        <div class="stat"><strong>30</strong><span>Партнёров</span></div>
      </div>
    </div>
  </section>

  <section class="front-reviews">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="front-reviews__heading">
            <h2 class="heading heading__h2">Отзывы о нашей работе</h2>
          </div>
          <div class="front-reviews__footer d-none d-lg-block">
            <a href="/reviews/" class="button-outlined">Читать все отзывы</a>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="front-reviews__slider-wrapper">
            <!-- Первый отзыв -->
            <div class="front-reviews__item">
              <div class="front-reviews__item-row">
                <div class="front-reviews__image">
                  <a href="/upload/iblock/b35/fuitxjmc12c9efvqqgzfrew32lmd3x7l.jpg" data-fancybox="">
                    <img src="/upload/resize_cache/iblock/b35/300_415_1/fuitxjmc12c9efvqqgzfrew32lmd3x7l.jpg" alt="">
                  </a>
                </div>
                <div class="front-reviews__body">
                  <span class="front-reviews__image-quote">
                    <svg width="61" height="44">
                      <use xlink:href="/local/templates/webtense/build/img/sprite.svg#quote-icon"></use>
                    </svg>
                  </span>
                  <div class="front-reviews__company">
                    <span class="front-reviews__company-name">ООО «Сфера Безопасности»</span>
                  </div>
                  <div class="front-reviews__content review-content">
                    <div class="review-content__text">
                      <p>Компания ООО «Сфера Безопасности» выражает благодарность команде веб-студии WEBTENSE за
                        профессиональную работу по созданию сайта <a href="https://ptu-sb.ru/"
                          class="link_theme_purple_underline" rel="nofollow" target="_blank">ptu-sb.ru</a></p>
                      <p>Сайт получился с дружелюбным интерфейсом, приятным дизайном и, главное, конверсионным!</p>
                      <p>Спасибо лично Александру Андрееву за чуткое отношение к ТЗ, к нашим пожеланиям, за гибкость,
                        проявленную при внесении корректировок. Также благодарим за оперативность на всех этапах создания
                        проекта.</p>
                      <p>При интеграции сайта в нашу CRM-систему также были учтены все наши пожелания.</p>
                      <p>Спасибо за отличные инструменты по продвижению нашего бизнеса! Желаем команде WEBTENSE
                        дальнейшего процветания и надеемся на дальнейшее сотрудничество!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Второй отзыв -->
            <div class="front-reviews__item">
              <div class="front-reviews__item-row">
                <div class="front-reviews__image">
                  <a href="/upload/iblock/056/mnwrq95tqyggxc3z5t0dqo7mr0njp8rg.jpg" data-fancybox="">
                    <img src="/upload/resize_cache/iblock/056/300_415_1/mnwrq95tqyggxc3z5t0dqo7mr0njp8rg.jpg" alt="">
                  </a>
                </div>
                <div class="front-reviews__body">
                  <span class="front-reviews__image-quote">
                    <svg width="61" height="44">
                      <use xlink:href="/local/templates/webtense/build/img/sprite.svg#quote-icon"></use>
                    </svg>
                  </span>
                  <div class="front-reviews__company">
                    <span class="front-reviews__company-name">ООО «ГК РЕСУРС»</span>
                  </div>
                  <div class="front-reviews__content review-content">
                    <div class="review-content__text">
                      <p>Компания ООО «ГК РЕСУРС» выражает благодарность компании WebTense за осуществление технической
                        поддержки сайта <a href="https://gkresurs.ru/" rel="nofollow" target="_blank">www.gkresurs.ru</a>
                        и оперативное решение всех поставленных задач.</p>
                      <p>Ценно то, что специалисты WebTense имеют не только высокую техническую компетенцию, но и
                        осуществляют консультации о целесообразности исполняемой задачи.</p>
                      <p>Искренне благодарим её руководителя - Андреева Александра Андреевича, высококлассного
                        специалиста, в честности и порядочности которого нет никаких сомнений.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Третий отзыв -->
            <div class="front-reviews__item">
              <div class="front-reviews__item-row">
                <div class="front-reviews__image">
                  <a href="/upload/iblock/4b2/am4htb8df8q32oo8s0vsrz9hhp4ma3hh.jpg" data-fancybox="">
                    <img src="/upload/resize_cache/iblock/4b2/300_415_1/am4htb8df8q32oo8s0vsrz9hhp4ma3hh.jpg" alt="">
                  </a>
                </div>
                <div class="front-reviews__body">
                  <span class="front-reviews__image-quote">
                    <svg width="61" height="44">
                      <use xlink:href="/local/templates/webtense/build/img/sprite.svg#quote-icon"></use>
                    </svg>
                  </span>
                  <div class="front-reviews__company">
                    <span class="front-reviews__company-name">АЭРОДИНАМИКА</span>
                  </div>
                  <div class="front-reviews__content review-content">
                    <div class="review-content__text">
                      <p>Центр Динамических Развлечений АЭРОДИНАМИКА выражает благодарность компании WebTense за создание
                        и обслуживание сайта <a href="https://www.aerodynamika.ru/" rel="nofollow"
                          target="_blank">www.aerodynamika.ru</a></p>
                      <p>Налаживание и поддержка всех бизнес процессов происходящих через сеть интернет. Помощь в
                        настройке работы систем оплат, эквайринга. Для компании нет невыполнимых задач.</p>
                      <p>Удачи и процветания от коллектива АЭРОДИНАМИКИ!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Остальные отзывы аналогично -->

          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="blog">
    <div class="container">
      <div class="blog__header">
        <h2>Блог</h2>

      </div>

      <div class="blog__grid">
        <!-- Карточка 1 -->
        <article class="blog__card">
          <img src="{{ asset('images/blog1.svg') }}" alt="7 трендов веб-разработки 2025 года">
          <div class="blog__content">
            <h3>7 трендов веб-разработки 2025 года</h3>
            <p class="blog__meta">13.02.2025 17:14</p>

            <div class="blog__author">
              <img src="{{ asset('images/blog-author.png') }}" alt="Автор">
              <span>Команда WEBTENSE</span>
            </div>

            <div class="blog__stats">
              <div class="stat"><img src="{{ asset('images/icons/view.svg') }}" alt=""> 5353</div>
              <div class="stat"><img src="{{ asset('images/icons/like.svg') }}" alt=""> 6</div>
              <div class="stat"><img src="{{ asset('images/icons/share.svg') }}" alt=""> 3</div>
            </div>

            <div class="blog__tags">
              <a href="#">#маркетинг</a>
              <a href="#">#домен</a>
              <a href="#">#seo</a>
            </div>
          </div>
        </article>

        <!-- Карточка 2 -->
        <article class="blog__card">
          <img src="{{ asset('images/blog2.svg') }}" alt="Как выбрать домен для сайта?">
          <div class="blog__content">
            <h3>Как выбрать домен для сайта?</h3>
            <p class="blog__meta">11.11.2024 17:29</p>
            <div class="blog__author">
              <img src="{{ asset('images/blog-author.png') }}" alt="Автор">
              <span>Команда WEBTENSE</span>
            </div>
            <div class="blog__stats">
              <div class="stat"><img src="{{ asset('images/icons/view.svg') }}" alt=""> 4388</div>
              <div class="stat"><img src="{{ asset('images/icons/like.svg') }}" alt=""> 10</div>
              <div class="stat"><img src="{{ asset('images/icons/share.svg') }}" alt=""> 5</div>
            </div>
            <div class="blog__tags">
              <a href="#">#домен</a>
              <a href="#">#seo</a>
            </div>
          </div>
        </article>

        <!-- Карточка 3 -->
        <article class="blog__card">
          <img src="{{ asset('images/blog3.svg') }}" alt="Техническое SEO продвижение">
          <div class="blog__content">
            <h3>Техническое SEO продвижение</h3>
            <p class="blog__meta">07.11.2024 08:54</p>
            <div class="blog__author">
              <img src="{{ asset('images/blog-author.png') }}" alt="Автор">
              <span>Команда WEBTENSE</span>
            </div>
            <div class="blog__stats">
              <div class="stat"><img src="{{ asset('images/icons/view.svg') }}" alt=""> 3896</div>
              <div class="stat"><img src="{{ asset('images/icons/like.svg') }}" alt=""> 3</div>
              <div class="stat"><img src="{{ asset('images/icons/share.svg') }}" alt=""> 2</div>
            </div>
            <div class="blog__tags">
              <a href="#">#seo</a>
              <a href="#">#поисковая оптимизация</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>



  <section class="contact">
    <div class="container contact__container">
      <div class="contact__text">
        <h2>Оставьте заявку</h2>
        <p>Не смогли определиться? Заполните форму, и мы проконсультируем вас уже сегодня!</p>
      </div>

      <form action="{{ route('contact.send') }}" method="POST" class="contact__form">
        @csrf
        <div class="form-row">
          <div class="form-group">
            <label for="name">Имя*</label>
            <input type="text" id="name" name="name" placeholder="Ваше имя" required>
          </div>
          <div class="form-group">
            <label for="phone">Телефон*</label>
            <input type="tel" id="phone" name="phone" placeholder="Ваш телефон" required>
          </div>
          <div class="form-group">
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" placeholder="Ваш email" required>
          </div>
        </div>

        <div class="form-group full">
          <label for="message">Дополнительно</label>
          <textarea id="message" name="message" placeholder="Комментарий к заявке"></textarea>
        </div>

        <div class="form-bottom">
          <button type="submit" class="btn">
            Оставить заявку
            <svg width="32" height="8" viewBox="0 0 32 8" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 4H31M31 4L27 1M31 4L27 7" stroke="white" stroke-width="1.5" />
            </svg>
          </button>

          <p class="agreement">
            Нажимая на кнопку «Оставить заявку», Вы даёте согласие на обработку
            <a href="#">персональных данных.</a>
          </p>
        </div>
      </form>

      <div class="contact__image">
        <img src="{{ asset('images/contact.svg') }}" alt="Contact illustration">
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container footer__inner">
      <div class="footer__contacts">
        <a href="tel:+79778973349" class="footer__link">
          <img src="{{ asset('images/icons/phone.svg') }}" alt="phone">
          +7 (977) 897-33-49
        </a>
        <a href="mailto:info@webtense.ru" class="footer__link">
          <img src="{{ asset('images/icons/mail.svg') }}" alt="email">
          info@webtense.ru
        </a>
        <p class="footer__address">
          <img src="{{ asset('images/icons/geo.svg') }}" alt="address">
          Москва, ул. Космонавта Волкова, д. 20, офис 518
        </p>

        <div class="footer__socials">
          <a href="#" class="social vk"><img src="{{ asset('images/icons/vk.svg') }}" alt="vk"></a>
          <a href="#" class="social wa"><img src="{{ asset('images/icons/whatsapp.svg') }}" alt="whatsapp"></a>
          <a href="#" class="social tg"><img src="{{ asset('images/icons/tg.svg') }}" alt="telegram"></a>
        </div>
      </div>

      <div class="footer__nav">
        <div class="footer__column">
          <h4>О нас</h4>
          <ul>
            <li><a href="#">Портфолио</a></li>
            <li><a href="#">Отзывы</a></li>
            <li><a href="#">Блог</a></li>
            <li><a href="#">Вакансии</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>

        <div class="footer__column">
          <h4>Услуги</h4>
          <ul>
            <li><a href="#">Разработка сайтов</a></li>
            <li><a href="#">Техническая поддержка</a></li>
            <li><a href="#">Интеграции</a></li>
            <li><a href="#">Битрикс24</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer__bottom">
      <p>© Digital-агентство WEBTENSE. Все права защищены. 2025 г. (webtense.devprizrakk.ru не является оффициальным
        сайтом Digital-агентства их оффициальный сайт webtense.ru)</p>
      <a href="#">Политика конфиденциальности</a>
    </div>
  </footer>
  <script>
    const container = document.getElementById('reviewsContainer');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    let offset = 0;

    nextBtn.addEventListener('click', () => {
      if (offset > -(container.scrollWidth - container.clientWidth)) {
        offset -= 320; // ширина карточки + gap
        container.style.transform = `translateX(${offset}px)`;
      }
    });

    prevBtn.addEventListener('click', () => {
      if (offset < 0) {
        offset += 320;
        container.style.transform = `translateX(${offset}px)`;
      }
    });
  </script>
@endsection