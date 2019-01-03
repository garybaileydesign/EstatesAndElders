<section id="contact-info">
  <div class="container">
    <div class="">
      <span>E: Jen@EstatesandElders.com P: 509-252-5003 F: 509-210-5065</span>
    </div>
    <div class="">
      <span>23403 East Mission Avenue - Suite 205 - Liberty Lake,&nbsp;WA&nbsp;99019</span>
    </div>
    <div class="">
      <a target="_blank" href="https://www.facebook.com/EstatesandElders/?fref=ts">
        <i class="ion-social-facebook"></i>
      </a>
      <a target="_blank" href="https://www.linkedin.com/in/jeballantyne">
        <i class="ion-social-linkedin"></i>
      </a>
    </div>
  </div>
</section>

<section id="legal">
  <div class="container">
    <div class="row legal">
      <span>&copy;2016 Estates and Elders Law PLLC. All rights reserved. <a>Disclaimer</a></span>
    </div>
    <div class="row hidden" id="hidden-legal">
      <p>Estates and Elders Law PLLC's website is not intended for nor is it to be used as a substitute for legal advice. You should not act, or refrain from acting, based on any information available via this website. We expressly disclaim all liability in respect of actions taken or not taken based on any contents of this website. This website is neither a solicitation nor an offer to represent you. You should not consider the content of this website to be an invitation for an attorney-client relationship, should not rely on the information provided as legal advice for any purpose and should always seek the legal advice of competent counsel in Washington. I will not have an attorney-client relationship with you until and unless you and I conclude a formal agreement of engagement.</p>
    </div>
  </div>
  <script>
    (function($){
      $("section#legal a").click(function(){
        console.log("Clicked!");
        $("#hidden-legal").toggleClass("hidden");
      });
    })(jQuery);
  </script>
</section>


<?
  global $pagename;

  $pagename = get_query_var('pagename');
  if ( !$pagename && $id > 0 ) {
    // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object
    $post = $wp_query->get_queried_object();
    $pagename = $post->post_name;
  }
  if(strcmp($pagename, "") == 0){
    $pagename = "home";
  }


  function get_is_active($page){
    global $pagename;
    if(strcmp($page,$pagename) == 0){
      return "active";
    }

    return "";
  }
?>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix">
  <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
    <div class="row">
      <div class="navbar-header">
          <a class="navbar-brand page-scroll" href="/">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/navbar.png" alt="Brand"/>
          </a>
          <ul class="nav navbar-nav">
              <li>
                  <a id="home-mobile" class="page-scroll <?= get_is_active("home"); ?>" href="/">
                    <div class="row">
                      <i class="ion-home"></i>
                    </div>
                    <div class="row">
                      Home
                    </div>
                  </a>
              </li>
              <li>
                  <a id="about-mobile" class="page-scroll <?= get_is_active("about-me"); ?>" href="/about-me">
                    <div class="row">
                      <i class="ion-android-person"></i>
                    </div>
                    <div class="row">
                      About Me
                    </div>
                  </a>
              </li>
              <li>
                  <a id="how-i-work-mobile" class="page-scroll <?= get_is_active("how-i-work"); ?>" href="/how-i-work">
                    <div class="row">
                      <i class="ion-ios-briefcase"></i>
                    </div>
                    <div class="row">
                      How I Work
                    </div>
                  </a>
              </li>
              <li>
                  <a id="blog-mobile" class="page-scroll <?= get_is_active("blog"); ?>" href="/blog">
                    <div class="row">
                      <i class="ion-ios-copy"></i>
                    </div>
                    <div class="row">
                      Blog
                    </div>
                  </a>
              </li>
              <li>
                <a id="contact-mobile" class="page-scroll <?= get_is_active("contact"); ?>" href="/contact">
                  <div class="row">
                    <i class="ion-ios-telephone"></i>
                  </div>
                  <div class="row">
                    Contact
                  </div>
                </a>
              </li>
          </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </div>
    <!-- /.container-fluid -->
</nav>
