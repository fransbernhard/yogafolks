<?php get_header(); ?>

<main class="single-treatment">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <div class="single-treatment__hero">
                <?= get_the_post_thumbnail(null, "full"); ?>
            </div>
            <div class="single-treatment__wrapper">
                <!-- <div class="single-treatment__border"> -->
                    <h1 class="single-treatment__title"><?php the_title(); ?></h1>
                    <div class="single-treatment__content wysiwyg">
                        <?php the_content(); ?>
                    </div>
                <!-- </div> -->
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
