<?php

/**
 * @file
 * Display Suite Hover Tile configuration.
 */

function ds_hover_tile() {
  return array(
    'label' => t('Hover Tile'),
    'regions' => array(
      'main' => t('Main'),
      'hover_content' => t('Hover Content'),
    ),
    // Uncomment if you want to include a CSS file for this layout (hover_tile.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (hover_tile.png)
    // 'image' => TRUE,
  );
}
