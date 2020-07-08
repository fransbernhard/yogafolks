<?php get_header(); ?>

<main class="main">
    <?php if(have_rows("blocks")): ?>
        <?php while(have_rows("blocks")): the_row(); ?>
            <?php if(get_row_layout() == "introduction"): ?>
                <?php get_template_part("./blocks/introduction"); ?>
            <?php elseif(get_row_layout() == "content"): ?>
                <?php get_template_part("./blocks/content"); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>