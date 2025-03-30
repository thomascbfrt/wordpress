<?php 
/**
 * Le modèle pour l'affichage des pages d'archives du portfolio
 *
 * @package Thomas Child
 */

// Inclusion de l'en-tête du thème
get_header();
?>

<div class="container portfolio-archive">
    <h1 class="archive-title">Portfolio</h1>

    <?php if (have_posts()) : ?>
        <!-- Grille contenant tous les projets du portfolio -->
        <div class="portfolio-grid">
            <?php while (have_posts()) : the_post(); 
                // Récupération des données ACF pour l'aperçu
                $client = get_field('client');
            ?>
                <!-- Élément individuel du portfolio -->
                <div class="portfolio-item">

                    <!-- Conteneur pour l'image miniature -->

                    <div class="portfolio-thumbnail">

                        <?php if (has_post_thumbnail()) : ?>
                            <!-- Affichage de l'image mise en avant -->
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                        
                        <!-- Superposition qui apparaît au survol -->
                        <div class="portfolio-overlay">
                            <!-- Titre du projet -->
                            <h3 class="portfolio-title"><?php the_title(); ?></h3>
                            <!-- Lien vers la page détaillée du projet -->
                            <a href="<?php the_permalink(); ?>" class="view-project">Voir le projet</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        
        <!-- Pagination pour naviguer entre les pages de portfolio -->
        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <!-- Message affiché si aucun projet n'est disponible -->
        <p>Aucun projet à afficher pour le moment.</p>
    <?php endif; ?>
</div>

<?php
// Inclusion du pied de page du thème
get_footer();