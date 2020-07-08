<?php 
    get_header(); 
?>

<main class="main">

    <?php if(have_rows("blocks")): ?>
        <?php while(have_rows("blocks")): the_row(); ?>
            <?php if(get_row_layout() == "introduction"): ?>
                <?php get_template_part("./blocks/introduction"); ?>
            <?php elseif(get_row_layout() == "content"): ?>
                <?php get_template_part("./blocks/content"); ?>
            <?php elseif(get_row_layout() == "about"): ?>
                <?php get_template_part("./blocks/about"); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

</main>

<?php get_footer(); ?>