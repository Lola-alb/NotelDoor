<?php /* Template Name: resaTemplate */ ?>
<?php get_header(); ?>
<section class="banner">
    <div class="banner-resa-inner"></div>
</section>
<main id='main-resa'>
        <?php get_template_part('loop-content-title-page');?>
    <section class="form-section">

        
    </section>

    <?php $urls = array(
    'fr' => '/fr/contact/',
    'en' => '/contact-us/',
    );
    $language = pll_current_language();
    $url = $urls[$language];?>
    
    <div class="image-bottom-room">
        <a href="<?php echo home_url($url); ?>"><?php pll_e("Contactez-nous");?></a>
        <img class="al-image" src="<?php echo get_template_directory_uri() . '/assets/images/light/perso_resa.svg';?>" alt="Direction la page contact">
    </div>
</main>
<?php wp_reset_postdata();?>

<?php get_footer(); ?>