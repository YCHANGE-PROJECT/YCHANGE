<?php
/**
 * Ychange front page view
 */

$mod_params = ['class' => 'elgg-module-highlight'];
?>

<div class="ychange-index elgg-main elgg-grid clearfix">
    <div class="elgg-col elgg-col-1of3 ychange-index-col1">
        <div class="elgg-inner pvm">
            <?php echo elgg_view_module('featured', elgg_echo('ychange:index:about'), elgg_view('output/longtext', ['value' => $vars['pages']['about']]), $mod_params); ?>
        </div>
    </div>

    <div class="elgg-col elgg-col-1of3 ychange-index-col2">
        <div class="elgg-inner pvm">
            <?php echo elgg_view_module('featured', elgg_echo('ychange:index:goal'), elgg_view('output/longtext', ['value' => $vars['pages']['goal']]), $mod_params); ?>
        </div>
    </div>

    <div class="elgg-col elgg-col-1of3 ychange-index-col3">
        <div class="elgg-inner pvm">
            <?php echo elgg_view_module('featured', elgg_echo('ychange:index:participate'), elgg_view('output/longtext', ['value' => $vars['pages']['participate']]), $mod_params); ?>
        </div>
    </div>

    <div class="elgg-col elgg-col-1of1 ychange-index-partners">
        <div class="elgg-inner pvm">
            <?php echo elgg_view_module('featured', elgg_echo('ychange:index:partners'), $vars['partners'], $mod_params); ?>
        </div>
    </div>

    <div class="elgg-col elgg-col-1of1 ychange-index-contact">
        <div class="elgg-inner pvm">
            <?php echo elgg_view_module('featured', elgg_echo('ychange:index:contact'), $vars['contact'], $mod_params); ?>
        </div>
    </div>
</div>
