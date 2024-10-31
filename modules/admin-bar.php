<?php

// custom admin bar buttons
add_action('admin_bar_menu', 'orbi_adminBar', 500);

function orbi_adminBar(WP_Admin_Bar $admin_bar)
{
    if (!current_user_can('edit_posts')) return;
    if (!(is_single() || is_page())) return;
    global $post;
    if ($post->post_type === 'post')
        $link = orbi_URL_BASE . '/website/posts/' . $post->ID;
    else if ($post->post_type === 'page')
        $link = orbi_URL_BASE . '/website/pages/' . $post->ID;
    else if ($post->post_type === 'product')
        $link = orbi_URL_BASE . '/shop/product/' . $post->ID;
    else
        $link = orbi_URL_BASE . '/website/customs/' . $post->post_type . '/' . $post->ID;
    $admin_bar->add_menu([
        'title' => 'Open in Orbitype',
        'href' => $link,
    ]);
}
