<?php

// add meta fields to rest api
add_action('rest_api_init', 'orbi_restApiMeta');

// todo: orbi meta auch für Taxonomien und Categories exportieren

function orbi_restApiMeta()
{
//   if (!is_user_logged_in()) return;

    // get custom post types and add default post and page type, then add new meta field
    $postTypes = array_values(get_post_types([ '_builtin' => false, 'show_in_rest' => true ]));
    array_push($postTypes, 'post', 'page', 'category', 'tag');
    foreach ($postTypes as $postType) {
        register_rest_field($postType, 'orbi_meta', [
            'get_callback' => function ($data) {
                $metaAll = get_post_meta($data['id'], '', '');

                $metaPublic = [];
                foreach ($metaAll as $key => $value) {
//           if ($key[0] !== '_' || in_array($key, $metaWhitelist)) // sort out thirdparty meta
                    $metaPublic[ $key ] = $value[0];
                }
                return $metaPublic; // public meta fields and whitelisted private meta fields
            },
            'update_callback' => function ($payload, $object, $fieldName) {
                $orbi_meta = json_decode($payload, true);
                foreach ($orbi_meta as $key => $value) {
                    update_post_meta($object->ID, $key, $value);
                }
                return true;
            }
        ]);
    }
}
