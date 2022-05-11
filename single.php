<?php
if ( in_category('news') ) {
  include(TEMPLATEPATH . '/single-news.php');
  } else {
  include(TEMPLATEPATH . '/single-basic.php');
  }
?>
