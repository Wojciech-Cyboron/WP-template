<?php
function university_post_types()
{
    // event post type
    register_post_type('event', array(
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'show_in_rest' => true,

        'supports' => array(
            'title', 'editor', 'excerpt',
            // 'custom-fields', (na razie nie potrzebne-wtyczka zajmie się za nas tym)
        ),

        'rewrite' => array('slug' => 'wydarzenia'),

        'labels' => array( // to co wyświetla nam wp
            'name' => 'Wydarzenia',
            'add_new_item' => 'Dodaj Nowe Wydarzenie', // opcjonalne, w polskiej wersji i tak jest "Dodaj Nowy"
            'edit_item' => 'Edytuj wydarzenie',
            'all_items' => 'Wszystkie wydarzenia',
            'singular_name' => 'Wydarzenie',
        )
    ));

    // program post type
    register_post_type('program', array(
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-money',
        'show_in_rest' => true,

        'supports' => array(
            'title', 'editor',
        ),

        'rewrite' => array('slug' => 'programs'),

        'labels' => array(
            'name' => 'Programy',
            'add_new_item' => 'Dodaj Nowy Program',
            'edit_item' => 'Edytuj Program',
            'all_items' => 'Wszystkie Programy',
            'singular_name' => 'Program',
        )
    ));

    // professor post type
    register_post_type('professor', array(
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_in_rest' => true,

        'supports' => array(
            'title', 'editor', 'excerpt', 'thumbnail',
            // 'custom-fields', (na razie nie potrzebne-wtyczka zajmie się za nas tym)
        ),

        'labels' => array( // to co wyświetla nam wp
            'name' => 'Wykładowcy',
            'add_new_item' => 'Dodaj Nowego Wykładowce', // opcjonalne, w polskiej wersji i tak jest "Dodaj Nowy"
            'edit_item' => 'Edytuj Wykładowce',
            'all_items' => 'Wszyscy Wykładowcy',
            'singular_name' => 'Wydładowca',
        )
    ));
}

add_action('init', 'university_post_types');
// akcja dodaje nowy typy postów - events(wydarzenia) itd.