<!-- Contact Page! -->
<?php
/*
Template Name: Contact
*/
?>

<section id="contact" class="bg-primary ampersand">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2" id="contact-info">
        <div class="row">
          <i class="ion-ios-telephone icon"></i>
          <p>Office: 509-252-5003</p>
          <p>Fax: 509-210-5065</p>
        </div>
        <div class="row">
          <hr/>
        </div>
        <div class="row">
          <a href="mailto:Jen@EstatesandElders.com">
            <i class="ion-android-mail icon"></i>
            <span>Jen@EstatesandElders.com</span>
          </a>
        </div>
      </div>
      <div class="contact-border col-lg-1 col-md-1"></div>
      <div class="col-lg-4 col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-10 col-xs-offset-1">
        <form class="form-horizontal" role="form" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
          <input type="hidden" name="action" value="contact_form">
        	<div class="form-group">
        		<label for="name" class="col-sm-2 control-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="">
        	</div>
        	<div class="form-group">
        		<label for="email" class="col-sm-2 control-label">Email</label>
      			<input type="email" class="form-control" id="email" name="email" value="">
        	</div>
          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" value="">
          </div>
        	<div class="form-group">
        		<label for="message" class="col-sm-2 control-label">Message</label>
      			<textarea class="form-control" rows="4" name="message"></textarea>
        	</div>
        	<div class="form-group">
      			<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
        	</div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
  /*echo "POST: " . $_POST;
  echo "GET: " . $_GET;*/
  function get(){

  }

  function post(){

  }

  switch($_SERVER['REQUEST_METHOD'])
  {
    case 'GET':
      get();
      break;
    case 'POST':
      post();
      break;
  }
?>

<?php get_template_part('templates/map', 'map'); ?>
