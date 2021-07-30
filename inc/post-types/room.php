<?php
function room_init()
{
    register_post_type('room', array(
        'labels'             => array(
            'name'               => 'Rooms', // Основное название типа записи
            'singular_name'      => 'Room', // отдельное название записи типа Book
            'add_new'            => 'Add Room',
            'add_new_item'       => 'Add new Room',
            'edit_item'          => 'Edit Room',
            'new_item'           => 'New Room',
            'view_item'          => 'View Room',
            'search_items'       => 'Search Room',
            'not_found'          => 'No Rooms found',
            'not_found_in_trash' => 'Trash is empty',
            'parent_item_colon'  => '',
            'menu_name'          => 'Rooms'
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
        'supports'           => array('title',),
        'menu_icon'          => 'dashicons-admin-multisite'
    ) );
}
add_action('init', 'room_init');