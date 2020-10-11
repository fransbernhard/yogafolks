<?php 
    /* Template Name: Treatments */ 

    global $post;  
  
	$items = get_posts([
		'post_type' => 'treatment',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'title', 
        'order' => 'ASC'
    ]);
    
?>

<?php get_header(); ?>

<main class="treatments">
    <div class="treatments__wrapper">
        <h1 class="treatments__title"><?= get_the_title($post->ID); ?></h1>
        <div class="treatments__text">
            <?= get_the_content($post->ID); ?>
        </div>      
        <?php if(!empty($items)): ?>
            <div class="treatments__list">
                <?php foreach($items as $item): ?>
                    <a class="treatments__item" href=<?= get_permalink($item->ID); ?> >
                        <img 
                            src="<?= get_the_post_thumbnail_url($item->ID, "large"); ?>" 
                            alt="" 
                            class="treatments__item__image"
                        />
                        <div class="treatments__item__content">
                            <h2 class="treatments__item__title"><?= get_the_title($item->ID); ?></h2>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>