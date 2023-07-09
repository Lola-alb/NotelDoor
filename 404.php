<?php get_header(); ?>
<main id="main-error-page">
    <section>
        <img class="al-image" src="<?php echo get_template_directory_uri() . '/assets/images/light/404.svg';?>" alt="Sortie de secours donnant sur un trou noir">
        <div>
            <h1>404</h1>
            <p><?php pll_e("Un trou noir semble avoir avalé cette ressource. Ou peut-être qu'elle n'a juste jamais existé."); ?></p>
        </div>
    </section>
</main>
<?php get_footer(); ?>