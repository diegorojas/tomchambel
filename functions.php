<?php

/* ADD THEME SETUP
------------------------------------------------ */
		
// Add nav menu
register_nav_menu( 'social-menu', __( 'Social Menu', 'hamilton' ) );

/* ADD DASHBOARD CUSTOMIZED LABELS
------------------------------------------------ */

function customize_post_admin_menu_labels() {
 global $menu;
 global $submenu;
 $menu[5][0] = 'Projects';
 $submenu['edit.php'][5][0] = 'Projects';
 $submenu['edit.php'][10][0] = 'Add Project';
 echo '';
 }
 add_action( 'admin_menu', 'customize_post_admin_menu_labels' );

function customize_admin_labels() {
 global $wp_post_types;
 $labels = &$wp_post_types['post']->labels;
 $labels->name = 'Projects';
 $labels->singular_name = 'Project';
 $labels->add_new = 'Add Project';
 $labels->add_new_item = 'Add Project';
 $labels->edit_item = 'Edit Project';
 $labels->new_item = 'Project';
 $labels->view_item = 'View Project';
 $labels->search_items = 'Search Projects';
 $labels->not_found = 'No Projects found';
 $labels->not_found_in_trash = 'No Projects found in Trash';
 }
 add_action( 'init', 'customize_admin_labels' );

?>