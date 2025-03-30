# Portfolio WordPress - Thomas FRIQUET

Ce projet est un site portfolio réalisé avec WordPress en utilisant Roots/Bedrock

mdp wordpress bdd : &zDiG1h3qDU@s4p20S
identifiant : Thomas

## Étapes réalisées

### 1. Installation et Configuration
- Installation de WordPress avec Roots/Bedrock pour une structure de projet optimisée
- Gestion des plugins et thèmes via Composer (voir le fichier composer.json)/(sauf pour le plugin de creation de themes enfant).
- Choix du thème parent "makoa"
- Création d'un thème enfant "child_Theme_Thomas" basé sur ce thème parent
- Activation et configuration du thème enfant

### 2. Création du Custom Post Type (CPT)
- Ajout du fichier cpt-portfolio.php dans le dossier du thème child_Theme_Thomas
- Déclaration du CPT "portfolio" avec support pour le titre, l'éditeur et l'image mise en avant
- Configuration des catégories personnalisées pour le portfolio (Web, Design, Photographie)
- Mise en place d'une structure de permalien p 
oooolllkgversonnalisée (/portfolio/"le nom de mon projet"/)
- Enregistrement du CPT dans le fichier functions.php de mon theme enfant

### 3. Ajout des Champs Personnalisés avec ACF
- Installation et activation du plugin Advanced Custom Fields (ACF) via Composer
- Création d'un groupe de champs associé au CPT portfolio incluant:
  - Champ "client" (texte)
  - Champ "date de réalisation" (date)
  - Champ "lien du projet" (URL)
  - Champ "galerie d'images" (galerie)/ (si il y a une image)

### 4. Affichage des Réalisations
- Création du fichier single-portfolio.php pour l'affichage individuel des réalisations
- Intégration et affichage des champs ACF dans ce template
- Création du fichier archive-portfolio.php pour afficher la grille de toutes les réalisations
- Personnalisation du style via le fichier style.css de mon theme enfant

### 5. Création de la Homepage
- Personnalisation de la page d'accueil pour présenter mon profil et mes compétences sur l'interface graphique Wordpress

## Difficultés rencontrées

- **Création du thème enfant**: J'ai eu du mal à comprendre comment creer mais surtout utiliser le theme enfant.
  J'ai notament pris du temps a comprndre comment creer une page a partir d'un theme enfant.

- **Intégration d'ACF**: La gestion des champs personnalisés et leur affichage dans les templates a nécessité plusieurs essais pour obtenir un rendu correct. J'ai trouver ca dur à comprendre au début.


## Installation et lancement du projet

### Prérequis
- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur
- Composer

### Étapes d'installation

1. **Cloner le repository**
```
git clone [URL_DU_REPO] portfolio
cd portfolio
```

2. **Installer les dépendances avec Composer**
```
composer install
```

3. **Configurer l'environnement**
Créer un fichier `.env` à la racine du projet en utilisant `.env.example` comme modèle:
```
cp .env.example .env
```
Et modifier les variables suivantes:
```
DB_NAME=nom_de_la_base
DB_USER=utilisateur_mysql
DB_PASSWORD=mot_de_passe_mysql
WP_HOME=http://localhost/chemin_vers_le_site
```

4. **Importer la base de données**
```
mysql -u [votre_nom_utilisateur] -p [nom_de_la_base] < database.sql
```

5. **Configurer le serveur web**
Pointer votre serveur web (exemple : Apache) vers le dossier `web` du projet.

6. **Accéder au site**
Ouvrez votre navigateur et accédez à l'URL configurée dans `WP_HOME`.

7. **Accéder à l'administration**
```
Accedr au liens permettant d'avoir l'interface admin : URL: [WP_HOME]/wp/wp-admin 
Utilisateur: admin
Mot de passe: (que vous avez founit lors de l'importation de la base de données)
```

## Technologies utilisées
- WordPress avec Bedrock
- Thème parent: Makoa
- ACF (Advanced Custom Fields)
- Composer pour la gestion des dépendances

---

© 2025 Thomas FRIQUET
