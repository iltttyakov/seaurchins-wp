<?php
function teacher_init()
{
    register_post_type('teacher', array(
        'labels'             => array(
            'name'               => 'Teachers', // Основное название типа записи
            'singular_name'      => 'Teacher', // отдельное название записи типа Book
            'add_new'            => 'Add teacher',
            'add_new_item'       => 'Add new teacher',
            'edit_item'          => 'Edit teacher',
            'new_item'           => 'New teacher',
            'view_item'          => 'View teacher',
            'search_items'       => 'Search teacher',
            'not_found'          => 'No teachers found',
            'not_found_in_trash' => 'Trash is empty',
            'parent_item_colon'  => '',
            'menu_name'          => 'Teachers'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail',),
        'menu_icon'          => 'dashicons-admin-users'
    ) );
}
add_action('init', 'teacher_init');