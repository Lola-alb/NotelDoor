<?php if(have_posts()):?>
    <?php while (have_posts()) : the_post(); ?>
    <section class="al-content">
            <h1 class="al-content-title">
                <?php the_title();?>
            </h1>
            <div>
                <?php the_content();?>
            </div>
    </section>
    <?php endwhile;?>
    <?php else:?>
        <?php pll_e("Il n'y a rien à voir ici");?>
<?php endif;?>