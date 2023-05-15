<?php
wp_head();
get_header();
?>
<main>
    <div class="post-header">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <h3 class="post-date"><?php the_date('d.m.Y H:i'); ?></h3>
    </div>
    <div class="post-main">
        <div class="post-photo">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', ['class' => 'posts-photo-image']); ?>
            <?php else : ?>
                <img class="posts-photo-image" src="<?php the_field("main_image")?>" alt="Зображення відсутнє">
            <?php endif; ?>
        </div>
        <div class="post-text">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="post-comment">
        <?php comments_template(); ?>
    </div>
</main>
<?php
get_footer();
?>
