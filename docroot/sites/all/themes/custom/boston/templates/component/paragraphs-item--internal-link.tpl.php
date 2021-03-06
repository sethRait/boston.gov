<?php
/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
$field_title = $content['field_title'][0]['#markup'];
?>
<?php if (isset($link_icon["classes"]["icon"])) { ?>
  <a href="<?php print $internal_link_path; ?>" title="Go to <?php print ((!empty($field_title) ? $field_title : $internal_link_title)); ?>" class="<?php print $link_icon["classes"]["container"]; ?>">
    <div class="p-a300 p-a600--xl">
      <span<?php print((isset($link_icon["classes"]["icon"]) ? ' class="' . $link_icon["classes"]["icon"] . '"' : '')); ?>><img src="<?php print $link_icon["image"] ?>" class="lwi-i" role="presentation" alt="<?php print ((!empty($field_title) ? $field_title : $internal_link_title)); ?>" /></span>
      <span<?php print((isset($link_icon["classes"]["text"]) ? ' class="' . $link_icon["classes"]["text"] . '"' : '')); ?>><?php print ((!empty($field_title) ? $field_title : $internal_link_title)); ?></span>
    </div>
  </a>
<?php } else { ?>
  <div class="link-wrapper internal-link">
    <a href="<?php print $internal_link_path; ?>" title="Go to <?php if (!empty($field_title)): ?><?php print $field_title; ?><?php else: ?><?php print $internal_link_title; ?><?php endif; ?>">
    <?php if (!empty($field_title)): ?>
      <?php print $field_title; ?>
    <?php else: ?>
      <?php print $internal_link_title; ?>
    <?php endif; ?>
    </a>
  </div>
<?php } ?>
