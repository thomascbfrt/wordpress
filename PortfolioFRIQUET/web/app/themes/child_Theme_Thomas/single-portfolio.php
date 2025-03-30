<?php get_header(); ?>

<div class="container portfolio-single">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        
        <?php if (has_post_thumbnail()) : ?>
            <div class="portfolio-featured-image">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php endif; ?>

        <div class="portfolio-meta">
            <?php if (function_exists('get_field')) : ?>
                <?php if (get_field('client')) : ?>
                <div class="meta-item">
                    <strong>Client:</strong>
                    <span><?php echo get_field('client'); ?></span>
                </div>
                <?php endif; ?>
                
                <?php if (get_field('completion_date')) : ?>
                <div class="meta-item">
                    <strong>Date de réalisation:</strong>
                    <span><?php echo get_field('completion_date'); ?></span>
                </div>
                <?php endif; ?>
                
                <?php if (get_field('project_url')) : ?>
                <div class="meta-item">
                    <strong>Voir le site:</strong>
                    <a href="<?php echo get_field('project_url'); ?>" target="_blank">
                        Visiter le projet
                    </a>
                </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="portfolio-content">
            <?php the_content(); ?>
        </div>

        <?php 
        //affichage de la galerie d'images si elle existe
        if (function_exists('get_field') && get_field('project_gallery')) : 
            $gallery_images = get_field('project_gallery'); 
        ?>
            <div class="portfolio-gallery">
                <h3>Galerie d'images :</h3>
                <div class="gallery-grid">
                    <?php foreach ($gallery_images as $image) : ?>
                        <div class="gallery-item">
                            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>