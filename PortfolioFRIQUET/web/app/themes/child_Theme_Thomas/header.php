<!DOCTYPE html>
<!-- Ouverture de la balise HTML avec les attributs de langue-->
<html <?php language_attributes(); ?>>
<head>
    <!--  l'encodage des caractères -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <!--  l'affichage responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Charge les scripts, styles et métadonnées de WordPress et des plugins -->
    <?php wp_head(); ?>

    <!-- Explication : (seulement pour moi car jessaie de comprendre comment ca marche ) :
     Hook crucial qui charge:
         - Les feuilles de style CSS du thème
         - Les scripts JavaScript
         - Les styles d'admin bar (si connecté)
         - Les métadonnées SEO (si plugin SEO)
         - D'autres éléments ajoutés par des plugins -->
</head>
<!-- ouverture de la balise body avec des classes générées par WordPress -->

<body <?php body_class(); ?>>
<!-- Ouverture de la balise body avec des classes dynamiques générées par WordPress -->
<!-- Ces classes incluent des informations comme: page-id-X, single, category-X, logged-in, etc. -->
<!-- Elles sont utilisées pour le ciblage CSS et JavaScript spécifique -->

<?php wp_body_open(); ?>
<!-- Hook introduit dans WP 5.2+ qui permet aux plugins d'insérer du contenu juste après l'ouverture du body -->
<!-- Important pour la compatibilité avec les plugins d'analyse, de chat, etc. -->

<?php

// 1. Récupère le chemin du fichier parts/header.html dans votre thème
//    (cherche d'abord dans le thème enfant, puis dans le parent)
block_template_part('header');;


?>