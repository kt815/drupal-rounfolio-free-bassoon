<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix post"<?php print $attributes; ?>>
  <?php print $user_picture; ?>

  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>">
        <?php print $title; ?>
      </a>
    </h2>
  <?php endif; ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>

<?php print render($content); ?>


  </div>

</div>