<?php 
    global $post;

    get_header(); 

    $links = get_field('links');

    $about = get_field("about");
    $aboutSlug = $about['hash_id'];
    $aboutTitle = $about['about_title'];
    $aboutText = $about['about_text'];
    $contactImage = $about['contact_image'];
    $contactImageLink = $about['contact_image_link'];
    $contactInfo = $about['contact_info'];
?>

<main class="main">
    <section class="introduction">
        <div class="introduction__wrapper">
            <div class="introduction__border">
                <img 
                    class="introduction__image" 
                    src="<?= get_the_post_thumbnail_url($post->ID, "large"); ?>" 
                />
                <div class="introduction__description">
                    <?= get_the_content($post->ID); ?>
                </div>
                <?php if($links): ?>
                    <div class="introduction__links">
                        <?php foreach($links as $link): ?>
                            <a 
                                class="introduction__link" 
                                href="<?= $link['link']['url']; ?>" 
                            >
                                <?= $link['link']['title']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="about" id="<?= $aboutSlug; ?>">
        <div class="about__wrapper">
            <div class="about__border">
                <h2 class="about__title"><?= $aboutTitle; ?></h2>
                <div class="about__text wysiwyg">
                    <?= $aboutText; ?>
                </div>

                <div class="about__contact">
                    <?php if($contactImageLink): ?>
                        <a 
                            class="about__contact__map-link" 
                            target="_blank" 
                            href="<?php $contactImageLink; ?>"
                        >
                            <img 
                                class="about__contact__map" 
                                src="<?= $contactImage['url']; ?>"
                            />
                        </a>
                    <?php else: ?>
                        <img 
                            class="about__contact__map" 
                            src="<?= $contactImage['url']; ?>"
                        />
                    <?php endif; ?>
                    <p class="about__contact__information">
                        <?= $contactInfo; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>