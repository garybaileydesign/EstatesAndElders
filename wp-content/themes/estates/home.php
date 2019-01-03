<header id="home">
  <div class="spacer"></div>

  <div id="title">
    <h1>Solving elders&rsquo; legal issues with skill and compassion</h1>
  </div>

  <div id="mobile-logo">
    <img src="<?= get_template_directory_uri(); ?>/dist/images/navbar.png" class="img-responsive" alt="logo">
  </div>

  <div id="learn-how">
    <a href="#">
      <div>
        <span>Learn how</span>
      </div>
      <div>
        <i class="ion-chevron-down" aria-hidden="true"></i>
      </div>
    </a>
  </div>
</header>
<div class="clear-fix"></div>
<section class="bg-primary contact-me ampersand" id="contact-me">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/portrait.png" class="img-responsive portrait" alt="portrait">

                <h2 class="section-heading">My name is Jennifer Ballantyne. I am an elder law and estate planning attorney. How may I help you?</h2>
                <a href="/contact" class="page-scroll btn btn-default btn-xl sr-button contact-btn">contact me now</a>
            </div>
        </div>
    </div>
</section>

<section class="no-padding" id="steps">
  <div class="container-fluid">
    <div class="row step-wrapper">
      <div class="col-lg-6 col-md-6 no-padding">
        <div class="hollow-box hollow-box-left">
          <div class="step-content">
            <div>
              <h2>Plan.</h2>
              <p>Our work often starts with the need for an estate&nbsp;plan.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 no-padding">
          <div class="solid-box">
            <div class="step-content">
              <p>Really, it starts with your wishes &mdash; for your estate, for decision making when you cannot, for long-term care or for end-of-life treatment.</p>
            </div>
          </div>
      </div>
    </div>
    <div class="row step-wrapper">
      <div class="col-lg-6 col-md-6 no-padding small-show">
        <div class="hollow-box hollow-box-right">
          <div class="step-content">
            <div>
              <h2>Crisis.</h2>
              <p>You have a plan (or you do not), but now there is a crisis</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 no-padding">
        <div class="solid-box">
          <div class="step-content">
            <p>Perhaps an illness or an accident has caused what may be a long-term care crisis.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 no-padding small-hide">
        <div class="hollow-box hollow-box-right">
          <div class="step-content">
            <div>
              <h2>Crisis.</h2>
              <p>You have a plan (or you do not), but now there is a crisis</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row step-wrapper">
      <div class="col-lg-6 col-md-6 no-padding">
        <div class="hollow-box hollow-box-left">
          <div class="step-content">
            <div>
              <h2>Loss.</h2>
              <p>Your family has experienced the loss of a loved one</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 no-padding last-step">
        <div class="solid-box">
          <div class="step-content">
            <p>You want to know your options based on your family's circumstances and need help in choosing your best path to settle the estate quickly and economically.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
(function($){
  $("#learn-how a").click(function() {
      $('html, body').animate({
          scrollTop: $("#contact-me").offset().top - 139
      }, 1000);
  });
})(jQuery);

</script>

<?php get_template_part('templates/contact-me-now', 'contact-me-now'); ?>

<?php get_template_part('templates/map', 'map'); ?>
