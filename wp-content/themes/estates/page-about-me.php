<?php
/*
Template Name: About Me
*/
?>

<div id="about-me"></div>

<section class="container-fluid" id="about-me">
  <div class="row">
    <!--<?php while (have_posts()) : the_post(); ?>
      <div class="col-lg-8 col-lg-offset-2 col-md-10 content col-md-offset-1 content">
        <?php get_template_part('templates/content', 'page'); ?>
      </div>
    <?php endwhile; ?>-->

    <div class="col-lg-8 col-lg-offset-2 col-md-10 content col-md-offset-1 content">
      <h2>Please call me Jen.</h2>
      <p>
        My mother called me Jen. When our family faced her Alzheimer's diagnosis in early 2001 at the age of 71, there was no plan. The crisis was at that very moment. All kinds of loss loomed. Moreover, they do not teach this stuff in school. We figured it out, but it was not always pretty.
      </p>

      <p>
        I would say my mother lived as successfully as possible with her progressive loss. When she passed away in 2006, I was inspired to leave my longtime business career and seek a new role providing legal protection and advocacy for elders and their families.
      </p>

        <div class="bordered-wrapper">
          <img src="<?= get_template_directory_uri(); ?>/dist/images/MaryLouHedges.jpg" class="img-responsive portrait bordered" alt="Mary Lou Hedges">
        </div>
        <p class="portrait-label remove-indent">Mary Lou Hedges, 1930-2006</p>

      <p>
        I was no longer a young person when I moved to Spokane and started law school at Gonzaga University. However, life experience as a daughter, sister, wife, mother and grandmother was the perfect preparation. I had the good fortune to hone my skills working for Gonzaga's University Legal Assistance and a local elder law firm. I graduated in 2014, joined the Washington Bar in 2015 and founded Estates and Elders Law PLLC in 2016.
      </p>

      <div class="quote">
        <p>I was inspired to leave my longtime business career and seek a new role providing legal protection and advocacy for elders and their families</p>
      </div>

      <p>
        I develop expertise through membership in the National Academy of Elder Law Attorneys and its Washington chapter, as well as the Washington and Spokane County Bar Associations. I give back through Board membership for the Senior Action Network of Eastern Washington and volunteer work with the Alzheimer's Association and Wills Clinics for First Responders and Veterans.
      </p>

      <p>
        I could be such a better advocate for my mother now. But that is not the way life works. I am inspired to know that every day I get to help families like ours with the legal and social needs that often arise with aging. I consider this the 'peace of mind' business. It would be my pleasure to help your family find peace of mind and an easier way.
      </p>

    </div>
  </div>
</section>
<?php get_template_part('templates/contact-me-now', 'contact-me-now'); ?>
