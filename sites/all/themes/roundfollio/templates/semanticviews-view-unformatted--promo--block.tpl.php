<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <<?php print $group_element; ?><?php print drupal_attributes($group_attributes); ?>>
    <?php print $title; ?>
  </<?php print $group_element; ?>>
<?php endif; ?>
<?php if (!empty($list_element)): ?>
  <<?php print $list_element; ?><?php print drupal_attributes($list_attributes); ?>>
<?php endif; ?>

<span id="slider-shadow"></span>
<div id="slider" class="nivoSlider">


<?php foreach ($rows as $id => $row): ?>
  <?php if (!empty($row_element)): ?>
  <<?php print $row_element; ?><?php print drupal_attributes($row_attributes[$id]); ?>>
  <?php endif; ?>

<?php print $view->style_plugin->rendered_fields[$id]['field_image']; ?>


  <?php if (!empty($row_element)): ?>
  </<?php print $row_element; ?>>
  <?php endif; ?>
<?php endforeach; ?>

</div>

<?php foreach ($rows as $id => $row): ?>
  <?php if (!empty($row_element)): ?>
  <<?php print $row_element; ?><?php print drupal_attributes($row_attributes[$id]); ?>>
  <?php endif; ?>


<div id="htmlcaption<?php print $view->style_plugin->rendered_fields[$id]['nid']; ?>" class="nivo-html-caption">
<?php print $view->style_plugin->rendered_fields[$id]['field_promo_text']; ?></div>


  <?php if (!empty($row_element)): ?>
  </<?php print $row_element; ?>>
  <?php endif; ?>
<?php endforeach; ?>



<?php if (!empty($list_element)): ?>
  </<?php print $list_element; ?>>
<?php endif; ?>