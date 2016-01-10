<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
  $formatted_date = format_date($node->created, 'custom', 'F j, Y');

?>

<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if (!$page): ?>
    <?php if (!empty($field_team_bio)): ?><a href="<?php print $node_url; ?>"><?php endif; ?>
    <?php print render($content['field_team_image']); ?>
    <div class="team-info">
      <?php print render($title_prefix); ?>
        <h3<?php print $title_attributes; ?>><?php print $title; ?></h3>
        <?php
          // We hide the comments and links now so that we can render them later.
          hide($content['comments']);
          hide($content['links']);
          print render($content);
        ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $formatted_date ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </div>
    <?php if (!empty($field_team_bio)): ?></a><?php endif; ?>
  <?php else: ?>
    <?php print render($content['field_team_image']); ?>
    <div class="team-contact-info">
      <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php print render($content['field_team_title']); ?>
      <?php print render($content['field_team_phone']); ?>
      <?php print render($content['field_team_email']); ?>
    </div>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  <?php endif; ?>


</article>
