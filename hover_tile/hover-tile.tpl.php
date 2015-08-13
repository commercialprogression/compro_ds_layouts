<?php
/**
 * @file
 * Display Suite Hover Tile template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $main: Rendered content for the "Main" region.
 * - $main_classes: String of classes that can be used to style the "Main" region.
 *
 * - $hover_content: Rendered content for the "Hover Content" region.
 * - $hover_content_classes: String of classes that can be used to style the "Hover Content" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="hover-tile-container">
    <<?php print $main_wrapper; ?> class="ds-main<?php print $main_classes; ?>">
      <?php print $main; ?>
    </<?php print $main_wrapper; ?>>

    <<?php print $hover_content_wrapper; ?> class="ds-hover-content<?php print $hover_content_classes; ?>">
      <?php print $hover_content; ?>
    </<?php print $hover_content_wrapper; ?>>
  </div>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
