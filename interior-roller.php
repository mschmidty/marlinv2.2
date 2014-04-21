<?php
/*
Template Name: Interior-Roller
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="content exterior new">
    <div class="grid"> 
        <h2>Roller Shades</h2>
    <?php
 
    $custom_query = new WP_Query(array(
        'posts_per_page' => 10,
        'cat' => '9',
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
    ));
 

if ( $custom_query->have_posts() ) :
    while ( $custom_query->have_posts() ) : $custom_query->the_post();
    echo    '<div class="col col-1-2">';
    echo        '<div class="products-show">';
    echo            '<div class="products-thumb">';
                   $exterior_image = get_field('exterior_thumb');
                        if(!empty($exterior_image)):
                            echo '<img src="' . $exterior_image['url'] . '" alt="' . $product_image['alt'] . '" />';
                        
                    endif;
    echo            '</div>';
    echo            '<h4>' . get_the_title() . '</h4>';
    echo            '<p>' . get_field('product_info') . '</p>';
    echo            '<a class="' . get_field('unique_ident_dropdown') . '" href="#">Click for More Info</a>';
    echo        '</div>';
    echo        '<div class="hide ' . get_field('unique_ident_show') . '">';
    echo        '<a class="close-product" href="#">Click to Close</a>';
    echo        '<h3>' . get_the_title() . ' Details</h3>';
    echo            '<div class="col col-1-3">';
    echo                '<h4>Image</h4>';
    echo                '<div class="products-thumb">';
                            $mechanism_image = get_field('mechanism_image');
                            if(!empty($mechanism_image)):
                                echo '<img src="' . $mechanism_image['url'] . '" alt="' . $mechanism_image['alt'] . '" />';
                            endif;                   
    echo                '</div>';
    echo            '</div>';
    echo            '<div class="col col-1-3">';
    echo                '<h4>Specs</h4>';
    echo                '<ul>';
    echo                    '<li><p>' . get_field('list_option_1') . '</p></li>',
                            '<li><p>' . get_field('list_option_2') . '</p></li>',
                            '<li><p>' . get_field('list_option_3') . '</p></li>',
                            '<li><p>' . get_field('list_option_4') . '</p></li>';
    echo                '</ul>';
    echo            '</div>';
    echo            '<div class="col col-1-3">';
    echo                '<h4>Info</h4>',
                        '<ul>',
                            '<li><p>' . get_field('list_of_example_applications_1') . '</p></li>',
                            '<li><p>' . get_field('list_of_example_applications_2') . '</p></li>',
                            '<li><p>' . get_field('list_of_example_applications_3') . '</p></li>',
                        '</ul>';
    echo            '</div>';
    echo        '</div>';
    echo    '</div>';


    endwhile;
    wp_reset_query();
    endif;
    ?>
    </div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>