<section class="question" id="question">
  <div class="container">
    <h2>Остались вопросы?</h2>
    <a id="manager-call" href="#question">Задайте их менеджеру</a>
  </div>
</section>

<!-- Popup -->
<div class="popup popup-call">
  <!-- Само (белое) модальное окно -->
  <div class="popup-dialog">
    <!-- Содежримое -->
    <div class="popup-content">
      <button type="submit" class="popup-close">&times;</button>
      <h4 class="popup-header">
        Заинтересовало?
      </h4>
      <p>Оставьте свои контактные данные <br>для связи</p>

      <form method="post" name="third-form" action="mailer/smart.php" class="form">
        <?php echo do_shortcode( '[contact-form-7 id="214" title="Форма в модальном окне"]' ); ?>
      </form>

    </div>
  </div>
</div>

<!-- Popup -->
<div class="popup popup-thanks">
  <!-- Само (белое) модальное окно -->
  <div class="popup-dialog">
    <!-- Содежримое -->
    <div class="popup-content">
      <button type="submit" class="popup-close">&times;</button>
      <h2 class="popup-header">
        Спасибо за заявку
        </h4>
        <p>В течение 5 минут мы Вам перезвоним</p>
        <button class="thanks-btn button-small">Вернуться на сайт</button>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Popup -->
<script>
  $(document).ready(function ($) {
    $('.popup-btn').on('click', function (event) {
      $('.popup-call').fadeIn();
    });
    $('.popup-close').on('click', function (event) {
      $('.popup-call').fadeOut();
      $('.popup-thanks').fadeOut();
    });
    $('.thanks-btn').on('click', function (event) {
      $('.popup-thanks').fadeOut();
    });
    $('#manager-call').on('click', function (event) {
      $('.popup-call').fadeIn();
    })
  });
</script>
<!-- Формы -->
<script>
  $(function () {
    $('form').submit(function (e) {
      var $form = $(this);
      $.ajax({
        type: $form.attr('method'),
        url: $form.attr('action'),
        data: $form.serialize()
      }).done(function () {
        $('.popup-call').fadeOut();
        $('.popup-thanks').fadeIn();
        $('form[name=first-form]').trigger('reset');
        $('form[name=second-form]').trigger('reset');
        $('form[name=third-form]').trigger('reset');
      }).fail(function () {
        alert('Заявка не отправлена по тех причинам');
      });
      //отмена действия по умолчанию для кнопки submit
      e.preventDefault();
    });
  });
</script>
<!-- Маска -->
<script>
  jQuery(function ($) {
    $("#phone-1").mask("+7 (999) 999-9999");
    $("#phone-2").mask("+7 (999) 999-9999");
    $("#phone-3").mask("+7 (999) 999-9999");
    $("#phone-4").mask("+7 (999) 999-9999");
  });
</script>
<!-- Слайдер -->
<script>
  $(document).ready(function () {
    $('.slider_ex').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: '<button type="submit" class="prev"></button>',
      nextArrow: '<button type="submit" class="next"></button>',
      responsive: [{
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 767,
          settings: {
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  });
</script>
<!-- Скрипт для магазина -->
<script>
  $(function () {
    $('#a-1').click(function () {
      $('#shop-cards-1').addClass('active');
      $('#shop-cards-2').removeClass('active');
      $('#shop-cards-3').removeClass('active');
      $('#shop-cards-4').removeClass('active');
      $('#shop-cards-5').removeClass('active');
      $('#a-1').addClass('active-color');
      $('#a-2').removeClass('active-color');
      $('#a-3').removeClass('active-color');
      $('#a-4').removeClass('active-color');
      $('#a-5').removeClass('active-color');
      // $('html, body').animate({scrollTop:$('#shop-cards-1').position().top}, 800);
    });
    $('#a-2').click(function () {
      $('#shop-cards-2').addClass('active');
      $('#shop-cards-1').removeClass('active');
      $('#shop-cards-3').removeClass('active');
      $('#shop-cards-4').removeClass('active');
      $('#shop-cards-5').removeClass('active');
      $('#a-2').addClass('active-color');
      $('#a-1').removeClass('active-color');
      $('#a-3').removeClass('active-color');
      $('#a-4').removeClass('active-color');
      $('#a-5').removeClass('active-color');
      // $('html, body').animate({scrollTop:$('#shop-cards-2').position().top}, 800);
    });
    $('#a-3').click(function () {
      $('#shop-cards-3').addClass('active');
      $('#shop-cards-2').removeClass('active');
      $('#shop-cards-1').removeClass('active');
      $('#shop-cards-4').removeClass('active');
      $('#shop-cards-5').removeClass('active');
      $('#a-3').addClass('active-color');
      $('#a-2').removeClass('active-color');
      $('#a-1').removeClass('active-color');
      $('#a-4').removeClass('active-color');
      $('#a-5').removeClass('active-color');
      // $('html, body').animate({scrollTop:$('#shop-cards-3').position().top}, 800);
    });
    $('#a-4').click(function () {
      $('#shop-cards-4').addClass('active');
      $('#shop-cards-2').removeClass('active');
      $('#shop-cards-3').removeClass('active');
      $('#shop-cards-1').removeClass('active');
      $('#shop-cards-5').removeClass('active');
      $('#a-4').addClass('active-color');
      $('#a-2').removeClass('active-color');
      $('#a-3').removeClass('active-color');
      $('#a-1').removeClass('active-color');
      $('#a-5').removeClass('active-color');
      // $('html, body').animate({scrollTop:$('#shop-cards-4').position().top}, 800);
    });
    $('#a-5').click(function () {
      $('#shop-cards-5').addClass('active');
      $('#shop-cards-2').removeClass('active');
      $('#shop-cards-3').removeClass('active');
      $('#shop-cards-4').removeClass('active');
      $('#shop-cards-1').removeClass('active');
      $('#a-5').addClass('active-color');
      $('#a-2').removeClass('active-color');
      $('#a-3').removeClass('active-color');
      $('#a-4').removeClass('active-color');
      $('#a-1').removeClass('active-color');
      // $('html, body').animate({scrollTop:$('#shop-cards-5').position().top}, 800);
    });
  });
</script>

<script>
  $(function () {
    $('#menu').slicknav({
      label: '',
      duration: 1000,
    });
  });
</script>
<?php wp_footer(); ?>

</body>

</html>