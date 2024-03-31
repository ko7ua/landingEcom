<?php
require("mail.php");
?>
<?php
if (isset($_POST['submit'])) {
  if (empty($_POST['name']) || empty($_POST['phone'])) {
    $response = "Вкажіть ім'я та номер телефону";
  } else {
    $response = sendMail($_POST['name'], $_POST['phone']);
    header('Location: done.html');
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <title>Rainberg - Відпарювач</title>
  <!-- Meta Pixel Code -->
  <script>
    !(function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) :
          n.queue.push(arguments);
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = "2.0";
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s);
    })(
      window,
      document,
      "script",
      "https://connect.facebook.net/en_US/fbevents.js"
    );
    fbq("init", "828332982448762");
    fbq("track", "PageView");
  </script>
  <noscript><img height="1" width="1" style="display: none" src="https://www.facebook.com/tr?id=828332982448762&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
</head>

<body>
  <div class="container">
    <header>
      <div class="name">
        <h1>
          Ручний відпарювач
          <span class="titleCentr">
            <center>
              <h1>Rainberg</h1>
            </center>
          </span>
          для усіх типів тканин
        </h1>
      </div>
    </header>
    <div class="firstSect">
      <img src="./img/firstImg.png" alt="" class="firstSectImg" />
      <div class="priceSect">
        <div class="oldPrice">
          <span>Звичайна ціна</span><strong>1299</strong><small> грн</small>
        </div>
        <div class="newPrice">
          <span>Акційна ціна</span><strong>899</strong><small> грн</small>
        </div>
      </div>
    </div>
    <div class="bigButton">
      <a href="#toOrder">Замовити зі знижкою</a>
    </div>
    <div class="timer">
      <h4 class="countTitle">До кінця акції залишилось:</h4>
      <div id="countdown" class="countdown">
        <div class="countdown-number" style="display: none">
          <span class="days countdown-time"></span>
          <span class="countdown-text">Days</span>
        </div>
        <div class="countdown-number">
          <span class="hours countdown-time"></span>
          <span class="countdown-text">Годин</span>
        </div>
        <div class="countdown-number">
          <span class="minutes countdown-time"></span>
          <span class="countdown-text">Хвилин</span>
        </div>
        <div class="countdown-number">
          <span class="seconds countdown-time"></span>
          <span class="countdown-text">Секунд</span>
        </div>
      </div>
      <div class="countAbout">
        <p>
          <br />
          <b>* Акція триває з
            <script>
              dayMs = 86400000 * 3;
              Data = new Date(new Date() - dayMs);
              Year = Data.getFullYear();
              Month = Data.getMonth() + 1;
              Day = Data.getDate();
              if (Day < 10) {
                Day = "0" + Day;
              }
              if (Month < 10) {
                Month = "0" + Month;
              }
              document.write("" + Day + "." + Month + "." + Year + "");
            </script>
            по
            <script>
              dayMs = 86400000 * 0;
              Data = new Date(new Date() - dayMs);
              Year = Data.getFullYear();
              Month = Data.getMonth() + 1;
              Day = Data.getDate();
              if (Day < 10) {
                Day = "0" + Day;
              }
              if (Month < 10) {
                Month = "0" + Month;
              }
              document.write("" + Day + "." + Month + "." + Year + "");
            </script>
          </b>
        </p>
      </div>
      <div class="countAbout">
        <p>
          * Ціну знижено через випуск нової моделі. Більш детальну інформацію
          надасть наш менеджер при оформленні замовлення.
        </p>
      </div>
    </div>
    <!-- 1st sect about -->
    <div class="descriptions">
      <h2 class="title">ПРАСУВАННЯ РЕЧЕЙ БЕЗ ЗАЙВИХ ЗУСИЛЬ</h2>
      <div class="presintation">
        <p>
          Відпарювач - надійний помічник у догляді за одягом та прибиранні
          будинку. Це більш функціональний та універсальний пристрій, ніж
          праска. Крім відпарювання одягу, він також ідеально підходить для
          обробки штор, м'яких меблів, матраців та ліжка. Гаряча пара не лише
          розгладжує складки, а й ефективно дезінфікує поверхні, усуваючи
          пилових кліщів та інші мікроорганізми. Для ще кращого результату
          можна скористатися ворсовою щіткою.
        </p>
      </div>
      <h3>Rainberg RB - 6316</h3>
      <div class="presintation">
        <p>
          Вертикальний відпарювач - незамінний помічник у домашніх умовах, в
          подорожі, в офісі або на дачі, що дозволить економити ваш час та
          зусилля.
        </p>
      </div>
      <h2 class="title">Безпечний для будь-якої тканини!</h2>
      <img src="./img/secondImg.png" alt="" />
      <p>
        Відпарювач дозволяє прасувати речі, які дуже складно випрасувати
        праскою, наприклад, пишні сукні, шуби, куртки, дублянки, можна чистити
        мʼякі меблі. Пара відмінно видаляє сторонній запах з одягу. Готовність
        до роботи через 35 секунд. Обсяг знімного резервуара для води - 320
        мл. Насадка виготовлена з керамічного покриття.
      </p>
    </div>
    <div class="bigButton" style="background-color: white">
      <a href="#toOrder">Замовити</a>
    </div>
    <!-- advantages -->
    <div>
      <h2 class="title" style="text-transform: uppercase">
        Переваги ручного відпарювача Rainberg
      </h2>
      <div class="feature-item-wrap">
        <div class="feature-item">
          <div class="feature-image">
            <img src="./img/5.webp" alt="" />
          </div>
          <div class="feature-text">
            <h4 class="feature-title">
              Готовий до використання за 35 секунд
            </h4>
            <div class="feature-description">
              <p>
                Готовий почати працювати всього за 35 секунд. Показник показує
                готовність до роботи, щоб можна було швидко обробити одяг. Без
                зайвих зусиль і очікування.
              </p>
            </div>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-image">
            <img src="./img/4.webp" alt="" />
          </div>
          <div class="feature-text">
            <h4 class="feature-title">2500 Вт, до 20 г/хв</h4>
            <div class="feature-description">
              <p>
                Наш ручний відпарювач забезпечує безперервну подачу пари до 20
                г/хв завдяки потужності 2500 Вт. Для швидкого та легкого
                відпарювання.
              </p>
            </div>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-image">
            <img src="./img/2.jpg" alt="" />
          </div>
          <div class="feature-text">
            <h4 class="feature-title">
              Знімний резервуар для води об'ємом 320 мл
            </h4>
            <div class="feature-description">
              <p>
                Ручний відпарювач має знімний резервуар для води об'ємом 320
                мл, що дозволяє відпарювати цілий комплект одягу без
                доливання. Резервуар можна легко зняти з відпарювача і
                наповнити водою.
              </p>
            </div>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-image">
            <img src="./img/3.jpg" alt="" />
          </div>
          <div class="feature-text">
            <h4 class="feature-title">Безпечний для всіх тканин</h4>
            <div class="feature-description">
              <p>
                Наш відпарювач підходить для всіх видів одягу з будь-якої
                тканини. Відпарювач можна безпечно притиснути до будь-якої
                тканини . Відмінне рішення для делікатних тканин, наприклад,
                шовку.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- char -->
    <div class="char">
      <h2 class="title" style="text-transform: uppercase">ХАРАКТЕРИСТИКИ</h2>
    </div>
    <div class="charImg">
      <img src="./img/char.png" alt="" />
    </div>
    <ul role="list" class="characteristics__list">
      <li>
        <b>Виробник:</b>
        <span>Rainberg;</span>
      </li>
      <li>
        <b>Потужність:</b>
        <span>2500 ВТ;</span>
      </li>
      <li>
        <b>Напруга:</b>
        <span>AC220-240 В/50-60 Гц; </span>
      </li>
      <li>
        <b>Підошва:</b>
        <span>керамічне покриття.</span>
      </li>
      <li>
        <b>Об'єм резервуару:</b>
        <span>320 мл</span>
      </li>
      <li>
        <b>Подача пари: </b>
        <span>20 г/хв; </span>
      </li>
      <li>
        <b>Час нагрівання:</b>
        <span>35 секунд; </span>
      </li>
      <li>
        <b>Довжина кабелю:</b>
        <span>1,9 м; </span>
      </li>
      <li>
        <b>Габарити: </b>
        <span>27х11х14 см.</span>
      </li>
    </ul>
    <div class="bigButton" style="background-color: white">
      <a href="#toOrder">Замовити зі знижкою</a>
    </div>
    <h2 class="title" style="text-transform: uppercase">Відгуки покупців</h2>
    <!-- rew -->
    <div class="contSw">
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="rev-text">
              <p>
                Відмінній помічник! Зручний, компактний, гарно вирівнює м'ятий
                одяг
              </p>

              <div class="rev-name">
                <div class="rev-author">
                  Висоцька Ксенія
                  <br />

                  м. Львів
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="rev-text">
              <p>
                Знахідна для тих хто не вміє або лінується користуватися
                праскою. Дружині менше роботи
              </p>

              <div class="rev-name">
                <div class="rev-author">
                  Сотніков Олексій
                  <br />

                  м. Одеса
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="rev-text">
              <p>
                Досить компактний і зручний у використанні відпарювач, працює
                без нарікань, однозначно вартий придбання.
              </p>

              <div class="rev-name">
                <div class="rev-author">
                  Боднарь Марія
                  <br />

                  м. Дніпро
                </div>
              </div>
            </div>
          </div>
          ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>

    <!-- ship -->
    <h2 class="title" style="text-transform: uppercase">Як замовити?</h2>
    <div class="order_steps1">
      <div class="step_item">
        <div class="image">
          <div class="bg_icon">
            <img src="./img/choices.png" width="32" alt="" />
          </div>
          <img src="./img/order_steps1__step1_image.png" class="decor" alt="Заявка" />
        </div>
        <div class="text">
          <h4>Заявка</h4>
          <p>Заповніть контактну форму на сайті</p>
        </div>
      </div>

      <div class="step_item">
        <div class="image">
          <div class="bg_icon">
            <img src="./img/customer-service.png" width="32" alt="" />
          </div>
          <img src="./img/order_steps1__step2_image.png" class="decor" alt="Заявка" />
        </div>
        <div class="text">
          <h4>Дзвінок</h4>
          <p>Наш менеджер передзвонить для уточнення деталей</p>
        </div>
      </div>

      <div class="step_item">
        <div class="image">
          <div class="bg_icon">
            <img src="./img/shipped.png" width="32" alt="" />
          </div>
          <img src="./img/order_steps1__step3_image.png" class="decor" alt="Заявка" />
        </div>
        <div class="text">
          <h4>Відправлення</h4>
          <p>Доставляємо ваш товар протягом 1-2 днів</p>
        </div>
      </div>

      <div class="step_item">
        <div class="image">
          <div class="bg_icon">
            <img src="./img/card-machine.png" width="32" alt="" />
          </div>
          <img src="./img/order_steps1__step4_image.png" class="decor" alt="Заявка" />
        </div>
        <div class="text">
          <h4>Отримання</h4>
          <p>Оплачуєте при отриманні на пошті</p>
        </div>
      </div>
    </div>
    <!-- lastSect -->
    <div class="name">
      <h1>Ручний відпарювач Rainberg</h1>
    </div>
    <div class="firstSect">
      <img src="./img/firstImg.png" alt="" class="firstSectImg" />
      <div class="priceSect">
        <div class="oldPrice">
          <span>Звичайна ціна</span><strong>1299</strong><small> грн</small>
        </div>
        <div class="newPrice">
          <span>Акційна ціна</span><strong>899</strong><small> грн</small>
        </div>
      </div>
    </div>
    <!-- contactForm -->
    <div class="contact-form" id="order_form">
      <div class="products_count">
        Акційного товару залишилось: <strong>11</strong> шт
      </div>

      <div class="oreder-form" id="toOrder">
        <div role="form" class="wpcf7" id="wpcf7-f97-o1" lang="uk" dir="ltr">
          <div class="screen-reader-response">
            <p role="status" aria-live="polite" aria-atomic="true"></p>
            <ul></ul>
          </div>
          <form id="order_form" class="order_form wpcf7-form init" enctype="multipart/form-data" method="post">
            <input class="field" type="text" name="name" placeholder="Введіть Ваше ПІБ" required="" />
            <input class="field" type="text" name="phone" placeholder="Введіть Ваш телефон" required="" />
            <br />
            <div class="bigButton" style="padding: 0; width: 100%">
              <button type="submit" name="submit">Зробити замовлення</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- footer -->
    <footer class="footer">
      <div class="images">
        <!--<img width="910" height="1200" src="images/0303.png" class="attachment-full size-full" alt=""
                decoding="async" loading="lazy" />-->
      </div>
      <!-- footer -->
      <div class="section footer" style="padding: 0">
        <div class="footer_text" style="text-align: center">
          <div id="iframe"></div>
          <section class="copyright" style="padding-bottom: 0; padding-top: 20px">
            <center>
              <p>Україна, м. Кривий Ріг</p>
              <p>Графік праці:<strong> Пн-Нд 9:00 - 22:00</strong></p>

              <div style="
                    background-color: #ffffff;
                    padding: 2px;
                    margin-top: 22px;
                  "></div>
            </center>
          </section>
        </div>

        <!-- /footer -->
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".swiper", {
      // Optional parameters
      direction: "horizontal",
      loop: true,

      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      // And if we need scrollbar
      // scrollbar: {
      //   el: ".swiper-scrollbar",
      // },
    });
  </script>
  <script src="countdow.js"></script>
</body>

</html>