<?php get_header(); ?>
<section class="banner">
    <div class="banner-rooms-inner"></div>
</section>
<main>
    <section class="search-result-bloc">
        <h1><?php 
            $recherche = $_GET['s'];
            pll_e('Résultats de votre recherche pour : ');
            echo $recherche; ?>
        </h1>
        <?php if ( have_posts() ) : ?>
            <ul class="display-search-result">
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p><?php the_excerpt(); ?></p>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p><?php _e('Aucun résultat trouvé.'); ?></p>
        <?php endif; ?>
    </section>
</main>
 
<?php get_footer(); ?>