>? php
/*
   Plugin Name: Date Shortcode
   Author     : Popoiu Sanda
*/
function displayDate($atts)
  {
    return date(get_option('date_format'));
  }
add_shortcode('date today','displayDate');
?>
/*Styling of the date will be the result of styling the shortcode itself*/
