<?php
/**
 * Template for the front-end page
 */

get_header();

?>

<div class="body-bubble"></div>
<div class="body-bubble-2"></div>
<div class="body-bubble-3"></div>

<svg class="body-spline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080" preserveAspectRatio="none">
  <path class="spline-path-1" d="M200,0 Q300,200 400,400 T600,800 Q700,950 800,1080" />
</svg>

<svg class="body-spline-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080" preserveAspectRatio="none">
  <path class="spline-path-2" d="M800,0 Q900,250 1000,500 T1200,850 Q1300,1000 1400,1080" />
</svg>

<svg class="body-spline-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080" preserveAspectRatio="none">
  <path class="spline-path-3" d="M1400,0 Q1500,300 1600,600 T1800,950 Q1850,1050 1920,1080" />
</svg>

<?php
    the_content();
?>

<?php
    get_footer();
?>