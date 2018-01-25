<?php
/**
 * Ychange settings page
 */
?>
<div class="mtm">
    <label>
        <?php echo elgg_echo('ychange:setting:google:analytics:key'); ?>
    </label>
    <?php echo elgg_view('input/text', ['name' => 'params[google_analytics_key]', 'value' => $vars['entity']->google_analytics_key]); ?>
</div>

<div class="mtm">
    <label>
        <?php echo elgg_echo('ychange:setting:recaptcha:key'); ?>
    </label>
    <?php echo elgg_view('input/text', ['name' => 'params[recaptcha_key]', 'value' => $vars['entity']->recaptcha_key]); ?>
</div>

<div class="mtm">
    <label>
        <?php echo elgg_echo('ychange:setting:recaptcha:secret'); ?>
    </label>
    <?php echo elgg_view('input/text', ['name' => 'params[recaptcha_secret]', 'value' => $vars['entity']->recaptcha_secret]); ?>
</div>

<div class="mtm">
    <label>
        <?php echo elgg_echo('ychange:setting:google:maps:key'); ?>
    </label>
    <?php echo elgg_view('input/text', ['name' => 'params[google_maps_key]', 'value' => $vars['entity']->google_maps_key]); ?>
</div>
