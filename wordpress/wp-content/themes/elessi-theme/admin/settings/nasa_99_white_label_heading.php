<?php
add_action('init', 'elessi_white_label_options_heading', 99999);
if (!function_exists('elessi_white_label_options_heading')) {
    function elessi_white_label_options_heading() {
        // Set the Options Array
        global $of_options;
        if (empty($of_options)) {
            $of_options = array();
        }
        
        $of_options[] = array(
            "name" => __("White Label", 'elessi-theme'),
            "target" => "white-label",
            "type" => "heading",
        );

        $of_options[] = array(
            "name" => __("Use White Label", 'elessi-theme'),
            // "desc" => "Hide Online documentation",
            "id" => "white_lbl",
            "std" => 0,
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => __("Theme Name", 'elessi-theme'),
            "desc" => 'Replace all instances of "Elessi Theme"',
            "id" => "white_lbl_name",
            "std" => "",
            "type" => "text"
        );
    }
}
