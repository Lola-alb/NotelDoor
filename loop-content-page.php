<!-- <?php if(have_posts()):?>
    <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_id();?>">
        <header>
            <!-- <h1 class="room-title">
                    <?php the_title();?>
            </h1> 
            <div class="room-content">
                <?php the_content();?>
            </div>
        </header>
    </article>
    <?php endwhile;?>
    <?php else:?>
        <?php pll_e("Il n'y a rien à voir ici");?>
<?php endif;?> -->

<?php if(have_posts()):?>
    <?php while (have_posts()) : the_post(); ?>
            <section class="al-content">
                <?php the_content();?>
            </section>
    <?php endwhile;?>
    <?php else:?>
        <?php pll_e("Il n'y a rien à voir ici");?>
<?php endif;?>