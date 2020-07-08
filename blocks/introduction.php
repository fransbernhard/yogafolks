<?php 
    $logo = get_sub_field("logo");
    $title = get_sub_field("title");
    $description = get_sub_field("description");
    $links = get_sub_field("links");
    $bgColor = get_sub_field("bg_color");
?>

<section 
    class="section section--introduction" 
    style="background-color: <?= $bgColor; ?>;"
>
    <div class="wrapper">
        <div class="introduction__border">
            <?php if($logo): ?>
                <img class="introduction__image" src="<?= $logo['url']; ?>" />
            <?php endif; ?>
            <?php if($title): ?>
                <h1 class="introduction__title"><?php the_sub_field("title"); ?></h1>
            <?php endif; ?>
            <div class="introduction__description"><?php the_sub_field("description"); ?></div>
            <div class="introduction__links">
                <?php foreach($links as $link): ?>
                    <?php $url = $link['hash_link'] ? "#" . $link['hash_link'] : $link['link']['url']; ?>
                    <a class="introduction__link" href="<?= $url ?>" >
                        <?= $link['link_text']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
