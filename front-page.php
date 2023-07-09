
<?php get_header(); ?>
<section class="hero">
    <div class="hero-inner"></div>
    <div><?php pll_e("Voir plus");?></div>
</section>

<main id="main-home">
    <div class="al-home-eye"></div>
    <div class="al-home-line"></div>
    <?php get_template_part('loop-content-page');?>
</main>
<?php get_footer(); ?>