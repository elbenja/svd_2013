<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
      <div class="four columns"  id="sidebar">
        <div class="mantra">
          <?php if(ICL_LANGUAGE_CODE=='fr' ) { 
            iinclude_page('/fr-mantra');
          } else {
            iinclude_page('/mantra');
          } ?>
        </div>
        <div class="shortabout">
          <?php if(ICL_LANGUAGE_CODE=='fr' ) { 
            iinclude_page('/fr-short-about');
          } else {
            iinclude_page('/short-about');
          } ?>
        </div> 
           <div id="socialnetworks">
              <?php include (TEMPLATEPATH . '/inc/socialmedia.php'); ?>
           </div>
      </div>

<!-- sidr -->
   <div  id="sidr">
        <div class="mantra">
          <?php if(ICL_LANGUAGE_CODE=='fr' ) { 
            iinclude_page('/fr-mantra');
          } else {
            iinclude_page('/mantra');
          } ?>
        </div>
        <div class="shortabout">
          <?php if(ICL_LANGUAGE_CODE=='fr' ) { 
            iinclude_page('/fr-short-about');
          } else {
            iinclude_page('/short-about');
          } ?>
        </div> 
           <div id="socialnetworks">
              <?php include (TEMPLATEPATH . '/inc/socialmedia.php'); ?>
           </div>
  </div>
<!-- / end sidr -->