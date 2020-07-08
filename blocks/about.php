<?php 
    $title = get_sub_field("title");
    $description = get_sub_field("description");
    $bgColor = get_sub_field("bg_color");
    $slug = get_sub_field("hash_id");
    $image = get_sub_field("image");

    $contactImage = get_sub_field('contact_map_image');
?>

<section 
    class="section section--<?= $slug; ?>" 
    id="<?= $slug; ?>" 
    style="background-color: <?= $bgColor; ?>;"
>
    <div class="wrapper">
        <div class="about__border">
            <h1 class="about__title <?= $slug . "__title"; ?>"><?= $title; ?></h1>
            <?php if($image): ?>
                <img class="about__image" src="<?= $image['url']; ?>" />
            <?php endif; ?>
            <div class="about__text">
                <?= $description ?>
            </div>

            <div class="contact">
                <h3 class="contact__title"><?php the_sub_field('contact_title'); ?></h3>
                <a class="contact__email" href="mailto:<?php the_sub_field('contact_email'); ?>"><?php the_sub_field('contact_email'); ?></a>
                <?php if(get_sub_field('contact_map_link')): ?>
                    <a class="contact__map-link" target="_blank" href="<?php the_sub_field('contact_map_link'); ?>">
                        <img class="contact__map" src="<?= $contactImage['url']; ?>"/>
                    </a>
                <?php else: ?>
                    <img class="contact__map" src="<?= $contactImage['url']; ?>"/>
                <?php endif; ?>
                <p class="contact__information"><?php the_sub_field('contact_info'); ?></p>
            </div>
        </div>
    </div>
</section>

