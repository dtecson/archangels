<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> container_12"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>

<?php
//print field_get_items('node', $node, 'field_callsign')[0]['value'];

$imageone = $node->field_headshot['und'][0]['uri'];
$style = 'bio_headshot';
?>
    <div class="grid_3"> <img src="<?php print image_style_url($style, $imageone) ?>"></div>
    <div class="grid_9">
      <?php print $title; ?>
      <?php //print field_get_items('node', $node, 'field_rank')[0]['value']; ?>
    </div>

    <?php
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print views_embed_view('events', 'block_1', $node->nid); ?>


  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <div class="links clearfix"><?php print render($content['links']); ?></div>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>

</div>
<?php //print_r(render($node)) ?>