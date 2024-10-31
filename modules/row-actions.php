<?php

// custom row actions
add_filter('post_row_actions', 'orbi_rowActionsPosts', 10, 2);
add_filter('page_row_actions', 'orbi_rowActionsPages', 10, 2);

function orbi_rowActionsPosts($actions, $post)
{
    if ($post->post_type === 'post')
        $actions['orbi_link'] = '<a href="' . orbi_URL_BASE . '/website/posts/' . $post->ID . '">Open in Orbitype</a>';
    else
        $actions['orbi_link'] = '<a href="' . orbi_URL_BASE . '/website/customs/' . $post->post_type . '/' . $post->ID . '">Open in Orbitype</a>';
    return $actions;
}


function orbi_rowActionsPages($actions, $page)
{
    $actions['orbi_link'] = '<a href="' . orbi_URL_BASE . '/website/pages/' . $page->ID . '">Open in Orbitype</a>';
    return $actions;
}
