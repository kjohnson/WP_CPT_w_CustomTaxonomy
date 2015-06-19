<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Plugin Name: Example Custom Post Type
 * Plugin URI: http://kylebjohnson.me
 * Description: An example custom post tpye (CPT) with an example custom taxonomy.
 * Version: 0.0.0.0.1
 * Author: Kyle B. Johnson
 */

class KBJ_Example_CPT
{
  public function __construct()
  {
    add_action( 'init', array( $this, 'custom_post_type' ), 0 );
    add_action( 'init', array( $this, 'custom_taxonomy' ), 0 );  
  }
  
    /**
     * Register Custom Post Type
     *
     * http://generatewp.com/post-type/
     */
    public function custom_post_type() {

        $labels = array(
            'name'                => _x( 'Custom Post Types', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Custom Post Type', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Custom Post Type', 'text_domain' ),
            'name_admin_bar'      => __( 'Custom Post Type', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
            'all_items'           => __( 'All Items', 'text_domain' ),
            'add_new_item'        => __( 'Add New Item', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'new_item'            => __( 'New Item', 'text_domain' ),
            'edit_item'           => __( 'Edit Item', 'text_domain' ),
            'update_item'         => __( 'Update Item', 'text_domain' ),
            'view_item'           => __( 'View Item', 'text_domain' ),
            'search_items'        => __( 'Search Item', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'custom_post_type', 'text_domain' ),
            'description'         => __( 'Custom Post Type Description', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( ),
            'taxonomies'          => array( ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );
        register_post_type( 'custom_post_type', $args );

    }

    /**
     * Register Custom Taxonomy
     *
     * http://generatewp.com/taxonomy/
     */
    public function custom_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Custom Taxonomies', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Custom Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Custom Taxonomy', 'text_domain' ),
            'all_items'                  => __( 'All Items', 'text_domain' ),
            'parent_item'                => __( 'Parent Item', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
            'new_item_name'              => __( 'New Item Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Item', 'text_domain' ),
            'edit_item'                  => __( 'Edit Item', 'text_domain' ),
            'update_item'                => __( 'Update Item', 'text_domain' ),
            'view_item'                  => __( 'View Item', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
            'popular_items'              => __( 'Popular Items', 'text_domain' ),
            'search_items'               => __( 'Search Items', 'text_domain' ),
            'not_found'                  => __( 'Not Found', 'text_domain' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true, //Hierarchical
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'custom_taxonomy', array( 'custom_post_type' ), $args );

    }  
}
