<?php
// inc/classes/mega-menu-walker.php

class Mega_Menu_Walker extends Walker_Nav_Menu {
    private $current_parent = 0;
    private $column_count = 0;

    public function start_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth === 0) {
            $output .= '<div class="mega-menu"><div class="mega-menu-content">';
            $output .= '<div class="menu-columns">';
        } elseif ($depth === 1) {
            $output .= '<div class="column">';
        } else {
            $output .= '<div class="sub-items">';
        }
    }

    public function end_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth === 0) {
            $output .= '</div></div></div>';
        } else {
            $output .= '</div>';
        }
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if ($depth === 0) {
            $output .= '<div class="menu-item" data-menu="' . sanitize_title($item->title) . '">';
            $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
        } elseif ($depth === 1) {
            $output .= '<h4>' . $item->title . '</h4>';
        } else {
            $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = array()) {
        if ($depth === 0) {
            $output .= '</div>';
        }
    }
}
