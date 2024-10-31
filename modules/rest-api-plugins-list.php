<?php

// add endpoint to get list of plugins
add_action('rest_api_init', function () {
    register_rest_route('orbi', '/plugins', [
        'methods' => 'GET',
        'callback' => 'orbi_getPluginsList',
        'permission_callback' => function ($request) {
            return is_user_logged_in();
        },
    ]);
});

function orbi_getPluginsList()
{
    return [
        'postTypes' => array_values(get_post_types([ '_builtin' => false, 'show_in_rest' => true ])),
        'active' => get_option('active_plugins'),
        'plugins' => get_plugins(),
    ];
}
