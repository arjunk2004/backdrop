<?php
// $Id$
/**
 * @file views-ui-display-tab-setting.tpl.php
 * Template for each row inside the "boxes" on the display query edit screen.
 */
?>
<div class="views-display-setting <?php print $classes; ?> <?php print $zebra; ?> clearfix">
  <?php if ($description): ?>
    <span class="label"><?php print $description; ?></span>
  <?php endif; ?>
  <?php print $link; ?>
  <?php if ($settings): ?>
    <span class="views-ajax-link">&nbsp;|&nbsp;</span> <?php print $settings; ?>
  <?php endif; ?>
</div>
