<?php /* Template Name: chambresTemplate */ ?>
<?php get_header(); ?>
<section class="banner">
    <div class="banner-rooms-inner"></div>
</section>
<main>
    <section id="al-room-content">
        <h1 class="room-title"><?php the_title();?></h1>
        <!-- <div class="image-room"><img class="al-image" src="<?php echo get_template_directory_uri() . '/assets/images/light/porte_chambre1.svg';?>" alt="Porte de l'hôtel"></div> -->
        <?php get_template_part('loop-content-page');?>
        <?php wp_reset_postdata();?>
    </section>
    <section id="al-post-list">
        <?php 
        $args = array('post_type' => 'post', 'order' => 'ASC', 'orderby' => 'title');
        $the_query = new WP_Query($args);
        ;?>

        <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
            <article class="post" id="post-<?php the_ID();?>">
                <div class="al_post_thumbnail">            
                    <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('thumbnail');?> 
                    </a> 
                </div>
                <h3>
                    <a href="<?php the_permalink();?>">
                        <?php the_title();?>
                    </a>
                </h3>   
            </article>
    
        <?php endwhile; ?>
        <?php else:?>
            <?php pll_e("La page ne contient pas d'articles");?>
        <?php endif; ?>
    </section>

    <?php $urls = array(
    'fr' => '/fr/contact/',
    'en' => '/contact-us/',
    );
    $language = pll_current_language();
    $url = $urls[$language];?>
    
    <div class="image-bottom-room">
        <a href="<?php echo home_url($url); ?>"><?php pll_e("Réserve la tienne");?></a>
        <img class="al-image" src="<?php echo get_template_directory_uri() . '/assets/images/light/perso_chambre1.svg';?>" alt="Direction la page réservation">
    </div>
</main>
<?php get_footer(); ?>