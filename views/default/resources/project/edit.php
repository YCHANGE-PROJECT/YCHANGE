<?php

elgg_gatekeeper();

$page_type = elgg_extract('page_type', $vars);
$guid = elgg_extract('guid', $vars);

$params = ychange_project_get_page_content_edit('edit', $guid);

if ( isset($params['sidebar']) )
{
	$params['sidebar'] .= elgg_view('project/sidebar', ['page' => $page_type]);
}
else
{
	$params['sidebar'] = elgg_view('project/sidebar', ['page' => $page_type]);
}

$body = elgg_view_layout('content', $params);

echo elgg_view_page($params['title'], $body);
