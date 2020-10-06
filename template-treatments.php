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

<main class="archive archive--treatment">
    <div class="archive__wrapper">
        <h1 class="archive__title"><?= get_the_title($post->ID); ?></h1>
        <div class="archive__text">
            <?= get_the_content($post->ID); ?>
        </div>      
        <?php if(!empty($items)): ?>
            <div class="archive__list">
                <?php foreach($items as $item): ?>
                    <a class="item" href=<?= get_permalink($item->ID); ?> >
                        <div class="item__image-container">
                            <div 
                                style="background-image: url(<?= get_the_post_thumbnail_url($item->ID, "large"); ?>);"
                                class="item__image"
                            ></div>
                        </div>
                        <div class="item__content">
                            <h2 class="item__title"><?= get_the_title($item->ID); ?></h2>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>