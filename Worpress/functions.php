<?php 

// CPT - CUSTOM POST TYPES
foreach ($criar_cpt as $cpt) {
    function create_post_type_profissional() {
        register_post_type(
            '', 
            array( 
                '', 
                '' 
            ), 
            'public' => true
        );
    }
    add_action( 'init', 'create_post_type_profissional' );
}

?>
