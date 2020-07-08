<?php 
    /* Template Name: Medlemsskap */ 
?>

<?php get_header(); ?>

<main class="memberships">
    <section class="section section--memberships">
        <div class="wrapper">
            <div class="memberships__border">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <h1 class="memberships__title"><?php the_title(); ?></h1>
                        <div class="memberships__text">
                            <?php the_content(); ?>
                        </div>                            
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>