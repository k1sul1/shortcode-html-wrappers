<?php
/*
Plugin name: Shortcode HTML wrappers
Author: Christian Nikkanen
Author URI: http://kisu.li
*/

namespace k1sul1;

function column_func($atts, $content) {
  return "<div class='column'>$content</div>";
}
add_shortcode("column", "\\k1sul1\\column_func");

