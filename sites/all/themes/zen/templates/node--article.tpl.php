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

<?php if ($page): ?>
  <?php if ($title): ?>
    <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
  <?php endif; ?>
  <article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php if ($display_submitted): ?>
      <p class="submitted">
        Posted on <?php print $formatted_date ?> by <?php print render($content['field_article_author'][0]['#markup']); ?>
      </p>
    <?php endif; ?>
    <div class="article-image">
      <?php print render($content['field_image']); ?>
      <?php print render($content['field_image_source']); ?>
    </div>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['field_article_author']);
      hide($content['field_image']);
      hide($content['field_image_source']);
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>

  </article>
<?php else: ?>
  <article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
      <header>
        <?php print render($title_prefix); ?>
        <?php if (!$page && $title): ?>
          <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php if ($display_submitted): ?>
          <p class="submitted">
            <?php print $formatted_date ?>
          </p>
        <?php endif; ?>

        <?php if ($unpublished): ?>
          <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
        <?php endif; ?>
      </header>
    <?php endif; ?>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>

  </article>
<?php endif; ?>
