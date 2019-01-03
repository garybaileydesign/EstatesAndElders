<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */

$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function send_email($data){
  $to = "jen@estatesandelders.com";
  $subject = "Contact Form Submition";
  $body = "There has been an submition to the contact-form. See http://estatesandelders.com/wp-admin/admin.php?page=CF7DBPluginSubmissions for more details.";
  wp_mail($to, $subject, $body/*, $headers*/);
}

function contact_form(){
  $data = (object)  array(
    'title' => 'contact',
    'posted_data' => array(
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'message' => $_POST['message'],
      'phone' => $_POST['phone']
      )
  );


  send_email($data);

  do_action_ref_array( 'cfdb_submit', array( &$data ) );
  header("Location: /");
  die();
}

add_action('admin_post_contact_form', 'contact_form');
add_action('admin_post_nopriv_contact_form', 'contact_form');
