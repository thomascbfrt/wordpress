

<?php


// Register Portfolio Custom Post Type
 function portfolio_custom_post_type() {
 
     $labels = array(
         'name'                  => _x( 'Portfolio', 'Post Type General Name', 'thomas-child' ),
         'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'thomas-child' ),
         'menu_name'             => __( 'Portfolio', 'thomas-child' ),
         'name_admin_bar'        => __( 'Portfolio Item', 'thomas-child' ),
         'archives'              => __( 'Portfolio Archives', 'thomas-child' ),
         'attributes'            => __( 'Portfolio Attributes', 'thomas-child' ),
         'parent_item_colon'     => __( 'Parent Item:', 'thomas-child' ),
         'all_items'             => __( 'All Portfolio Items', 'thomas-child' ),
         'add_new_item'          => __( 'Add New Portfolio Item', 'thomas-child' ),
         'add_new'               => __( 'Add New', 'thomas-child' ),
         'new_item'              => __( 'New Portfolio Item', 'thomas-child' ),
         'edit_item'             => __( 'Edit Portfolio Item', 'thomas-child' ),
         'update_item'           => __( 'Update Portfolio Item', 'thomas-child' ),
         'view_item'             => __( 'View Portfolio Item', 'thomas-child' ),
         'view_items'            => __( 'View Portfolio Items', 'thomas-child' ),
         'search_items'          => __( 'Search Portfolio Item', 'thomas-child' ),
         'not_found'             => __( 'Not found', 'thomas-child' ),
         'not_found_in_trash'    => __( 'Not found in Trash', 'thomas-child' ),
         'featured_image'        => __( 'Featured Image', 'thomas-child' ),
         'set_featured_image'    => __( 'Set featured image', 'thomas-child' ),
         'remove_featured_image' => __( 'Remove featured image', 'thomas-child' ),
         'use_featured_image'    => __( 'Use as featured image', 'thomas-child' ),
         'insert_into_item'      => __( 'Insert into portfolio item', 'thomas-child' ),
         'uploaded_to_this_item' => __( 'Uploaded to this portfolio item', 'thomas-child' ),
         'items_list'            => __( 'Portfolio items list', 'thomas-child' ),
         'items_list_navigation' => __( 'Portfolio items list navigation', 'thomas-child' ),
         'filter_items_list'     => __( 'Filter portfolio items list', 'thomas-child' ),
     );
     $args = array(
         'label'                 => __( 'Portfolio Item', 'thomas-child' ),
         'description'           => __( 'Portfolio projects and works', 'thomas-child' ),
         'labels'                => $labels,
         'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
         'taxonomies'            => array( 'portfolio_category' ),
         'hierarchical'          => false,
         'public'                => true,
         'show_ui'               => true,
         'show_in_menu'          => true,
         'menu_position'         => 5,
         'menu_icon'             => 'dashicons-portfolio',
         'show_in_admin_bar'     => true,
         'show_in_nav_menus'     => true,
         'can_export'            => true,
         'has_archive'           => true,
         'exclude_from_search'   => false,
         'publicly_queryable'    => true,
         'capability_type'       => 'page',
         'rewrite'               => array( 'slug' => 'portfolio' ),
     );
     register_post_type( 'portfolio', $args );



     //pour catégories pas les archives.
 
     // Register custom taxonomy for Portfolio Categories
     $taxonomy_labels = array(
         'name'                       => _x( 'Portfolio Categories', 'Taxonomy General Name', 'thomas-child' ),
         'singular_name'              => _x( 'Portfolio Category', 'Taxonomy Singular Name', 'thomas-child' ),
         'menu_name'                  => __( 'Portfolio Categories', 'thomas-child' ),
         'all_items'                  => __( 'All Categories', 'thomas-child' ),
         'parent_item'                => __( 'Parent Category', 'thomas-child' ),
         'parent_item_colon'          => __( 'Parent Category:', 'thomas-child' ),
         'new_item_name'              => __( 'New Category Name', 'thomas-child' ),
         'add_new_item'               => __( 'Add New Category', 'thomas-child' ),
         'edit_item'                  => __( 'Edit Category', 'thomas-child' ),
         'update_item'                => __( 'Update Category', 'thomas-child' ),
         'view_item'                  => __( 'View Category', 'thomas-child' ),
         'separate_items_with_commas' => __( 'Separate categories with commas', 'thomas-child' ),
         'add_or_remove_items'        => __( 'Add or remove categories', 'thomas-child' ),
         'choose_from_most_used'      => __( 'Choose from the most used', 'thomas-child' ),
         'popular_items'              => __( 'Popular Categories', 'thomas-child' ),
         'search_items'               => __( 'Search Categories', 'thomas-child' ),
         'not_found'                  => __( 'Not Found', 'thomas-child' ),
         'no_terms'                   => __( 'No categories', 'thomas-child' ),
         'items_list'                 => __( 'Categories list', 'thomas-child' ),
         'items_list_navigation'      => __( 'Categories list navigation', 'thomas-child' ),
     );
     $taxonomy_args = array(
         'labels'                     => $taxonomy_labels,
         'rewrite' => array('slug' => 'portfolio-category'),
         'hierarchical'               => true,
         'public'                     => true,
         'show_ui'                    => true,
         'show_admin_column'          => true,
         'show_in_nav_menus'          => true,
         'show_tagcloud'              => true,
     );
     register_taxonomy( 'portfolio_category', array( 'portfolio' ), $taxonomy_args );
 }
 add_action( 'init', 'portfolio_custom_post_type', 0 );



//pour details

 //SCF : 

function register_portfolio_acf_fields() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_portfolio_details',
            'title' => 'Portfolio Details',
            'fields' => array(
                array(
                    'key' => 'field_client',
                    'label' => 'Client',
                    'name' => 'client',
                    'type' => 'text',
                    'instructions' => 'Enter the client name',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_completion_date',
                    'label' => 'Date de réalisation',
                    'name' => 'completion_date',
                    'type' => 'date_picker',
                    'instructions' => 'Sélectionnez la date de réalisation du projet',
                    'required' => 1,
                    'display_format' => 'd/m/Y',
                    'return_format' => 'd/m/Y',
                ),
                array(
                    'key' => 'field_project_url',
                    'label' => 'Lien du projet',
                    'name' => 'project_url',
                    'type' => 'url',
                    'instructions' => 'Entrez l\'URL du projet',
                    'required' => 0,
                ),
                array(
                    'key' => 'field_project_gallery',
                    'label' => 'Galerie d\'images',
                    'name' => 'project_gallery',
                    'type' => 'gallery',
                    'instructions' => 'Ajoutez des images du projet',
                    'required' => 0,
                    'min' => 0,
                    'max' => '',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => 'jpg, jpeg, png',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'portfolio',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => 'Custom fields for portfolio projects',
        ));
    }
}
add_action('acf/init', 'register_portfolio_acf_fields');