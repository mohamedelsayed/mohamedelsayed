<?php $nodedata = node_load($node->nid);?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php //print $user_picture; ?>
    <?php //print render($title_prefix); ?>
    <?php //if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>" title="<?php print $title; ?>">
            <?php print $title; ?>
        </a>
    </h2>
    <?php //endif; ?>
    <?php //print render($title_suffix); ?>
    <?php /*if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
    <?php endif; */?>
    <div class="content"<?php print $content_attributes; ?>>
        <?php hide($content['comments']);
        hide($content['links']);
        print render($content);?>
    </div>
    <?php //print render($content['links']); ?>
    <?php //print render($content['comments']); ?>
</div>