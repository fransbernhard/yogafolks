<?php 
    /* Template Name: Courses */ 

    global $post;  
  
    $startDate = date("Ymd");

	$courses = get_posts([
		'post_type' => 'course',
        'post_status' => 'publish',
        'posts_per_page' => -1,
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

<main class="archive archive--courses">
    <div class="archive__wrapper">
        <h1 class="archive__title"><?= get_the_title($post->ID); ?></h1>
        <div class="archive__text">
            <?= get_the_content($post->ID); ?>
        </div>      
        <?php if(!empty($courses)): ?>
            <div class="archive__list">
                <?php foreach($courses as $course): ?>
                    <?php
                        $start_date = get_field('start_date', $course->ID);
                        $courseDate = strtotime($start_date);
                        $date = date("j/n", $courseDate);
                    ?>
                    <a class="item" href=<?= get_permalink($course->ID); ?> >
                        <div class="item__image-container">
                            <div 
                                style="background-image: url(<?= get_the_post_thumbnail_url($course->ID, "large"); ?>);"
                                class="item__image"
                            ></div>
                        </div>
                        <div class="item__content">
                            <span class="item__date"><?= $date; ?></span> 
                            <h2 class="item__title"><?= get_the_title($course->ID); ?></h2>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>