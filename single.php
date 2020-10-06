<?php get_header(); ?>

<main class="single">
    <div class="single__wrapper">
        <div class="single__border">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <h1 class="single__title"><?php the_title(); ?></h1>
                    <div class="single__text">
                        <?php the_content(); ?>
                    </div>                            
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>