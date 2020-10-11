<?php 
    /* Template Name: Template: Activities */ 

    global $post;  
  
    $startDate = date("Ymd");

    $categories = get_categories([
        'orderby' => 'name',
        'order'   => 'ASC',
        'hide_empty' => false
    ]);

    $activeCategorySlug = isset($_GET["type"]) ? $_GET["type"] : 'event';

	$items = get_posts([
		'post_type' => 'activity',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => [
            [
                'taxonomy' => 'activity_category',
                'field' => 'slug',
                'terms' => $activeCategorySlug,
            ]
        ],
        'meta_query' => [
            [
                'key' => 'start_date', 
                'value' => $startDate, 
                'compare' => '>='
            ]
        ],
        'orderby' => 'meta_value',
        'order' => 'ASC'
    ]);    
?>

<?php get_header(); ?>

<main class="activities">
    <div class="activities__wrapper">
        <h1 class="activities__title"><?= get_the_title($post->ID); ?></h1>
        <div class="activities__text">
            <?= get_the_content($post->ID); ?>
        </div>      

        <?php if(!empty($categories)):?>
            <ul class="activities__filter">
                <?php foreach($categories as $category): ?>
                    <li class="activities__filter__item">
                        <a 
                            class="activities__filter__link <?= $category->slug === $activeCategorySlug ? 'activities__filter__link--active' : ''; ?>" 
                            href="?type=<?= $category->slug?>"
                        >
                            <?= $category->name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif ?>
        
        <?php if(!empty($items)): ?>
            <div class="activities__list">
                <?php foreach($items as $item): ?>
                    <?php
                        $start_date = get_field('start_date', $item->ID);
                        $itemDate = strtotime($start_date);
                        $date = date("j/n", $itemDate);
                    ?>
                    <a class="activities__item activities__item--<?= $activeCategorySlug; ?>" href=<?= get_permalink($item->ID); ?> >
                        <div class="activities__item__image-container">
                            <div 
                                style="background-image: url(<?= get_the_post_thumbnail_url($item->ID, "large"); ?>);"
                                class="activities__item__image"
                            ></div>
                        </div>
                        <div class="activities__item__content">
                            <span class="activities__item__date"><?= $date; ?></span> 
                            <h2 class="activities__item__title"><?= get_the_title($item->ID); ?></h2>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
