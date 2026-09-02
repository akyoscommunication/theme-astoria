<?php
class MenuItemAnimation_Walker extends Walker_Nav_Menu
{
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $has_children = !empty($item->classes) && in_array('menu-item-has-children', $item->classes);

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $title = $item->title;

        if(!$has_children) {
            $output .= '<li' . $class_names . '>';
            $output .= '<a href="' . esc_url($item->url) . '">';
            $output .= '<span>' . $title . '</span>';
//            $output .= '<span>' . $title . '</span>';
            $output .= '</a>';
            $output .= '</li>';
        } else {
            parent::start_el( $output, $item, $depth, $args, $id );
        }
    }
}

?>
