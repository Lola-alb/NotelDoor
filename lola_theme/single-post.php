<?php get_header();?>
<!-- <section class="banner">
    <div class="banner-single-inner"></div>
</section> -->
<main id="al-single-main">
    <?php get_template_part('loop-content-page');?>
   
    <section class="al-single-navigation">
        <div class="al-single-navigation-prev">
            <?php previous_post_link( '%link', '%title', true, '', 'category' ); ?> 
        </div>
        <div>
            <img class="al-image" src="<?php echo get_template_directory_uri() . '/assets/images/dark/deco_single.svg';?>" alt=" ">
        </div>
        <div class="al-single-navigation-next">
            <?php next_post_link( '%link', '%title', true, '', 'category' ); ?> 
        </div>
    </section>

    <?php $urls = array(
    'fr' => '/fr/chambres/',
    'en' => '/rooms/',
    );
    $language = pll_current_language();
    $url = $urls[$language];?>
    
    <div class="image-bottom-single">
        <a href="<?php echo home_url($url); ?>"><?php pll_e('Retourner au salon');?></a>
        <img class="al-image" src="<?php echo get_template_directory_uri() . '/assets/images/dark/perso_single.svg';?>" alt="Porte vers le salon">
    </div>
</main>
<?php get_footer();?>