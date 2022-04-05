<?php
/**
 * Template Name: Modèle Recipe creation
 * Template Post Type: page, post
 * Description: Un modèle de page pour la création de recettes
 */
?>

<?php get_header(); ?>

    <div class="container">
        <h2>Page de création de recette</h2>
    </div>


<?php get_template_part('partials/recipe', 'post')?>

<?php get_footer(); ?>