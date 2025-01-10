# SAÉ 3.01 - Développement d’une application
## 📄 Sujet
### Pharmatic - Plateforme de gestion de pharmacie en ligne

**Pharmatic** est une application web développée pour simplifier la gestion des commandes et des stocks pour les pharmacies, tout en offrant une expérience utilisateur fluide et intuitive.

**Fonctionnalités principales :**
- **Côté utilisateur :**
  - Recherche avancée de produits, catégories ou marques avec une barre de recherche intégrée.
  - Filtres dynamiques pour affiner les résultats.
  - Gestion de panier interactif et passage de commandes sécurisé.
- **Côté administrateur :**
  - Gestion des stocks en temps réel.
  - Ajout, modification et suppression des produits via une interface dédiée.
  - Visualisation des commandes passées par les clients.

**Technologies utilisées :**
- **Back-end :** Framework Symfony, PHP 8, MySQL pour la gestion de la base de données.
- **Front-end :** HTML5, CSS3, JavaScript, avec une charte graphique élaborée.
- **Environnement de déploiement :** Machine virtuelle configurée en serveur (Linux, Apache/Nginx).

**Objectif pédagogique :**

Ce projet a été réalisé dans un contexte académique pour mettre en pratique des compétences en développement full-stack, gestion de projet et travail en équipe.

## 👥 Membres du groupe 
- Marcoux Corentin **(marc0237)** ou **(corentinmrcx)**
- Baudat Louis **(baud0157)**
- Lobreau Romain **(lobr0013)** ou **(RomsLob1)**

## 📝 Notes
**Machine Virtuelle :**
- Identifiant : `pc-client-sae3-01`
- Mot de passe : `Azerty01@`
- Adresse IP : `10.31.33.115`
- Site : http://2a4v3-31uvm0371.ad-urca.univ-reims.fr/

## 🛠️ Installation et configuration du projet
### 1. Pré-requis
Avant de commencer, assurez-vous d’avoir les éléments suivants installés sur votre machine :
- PHP (version 8.2)
- Composer
- Un serveur local (par exemple : WAMP, XAMPP, ou Symfony CLI)
- Git

### 2. Etapes d'installation
1. **Cloner le dépot**
   - Clonez le dépot en local avec la commande suivante : `git clone https://iut-info.univ-reims.fr/gitlab/marc0237/sae3-01.git`
2. **Installer les dépendances PHP avec Composer**
   - Exécutez la commande suivante pour installer les dépendances : `composer install`
3. **Configurer le fichier .env**
   - Dupliquez le fichier `.env` en `.env.local`
   - Mettez à jour les variables d’environnement (base de données, etc.) en fonction de votre configuration.
4. **Installer la base de données**
   - Exécutez les commandes suivantes pour créer et peupler la base de données :
     ```
     php bin/console doctrine:database:create
     php bin/console doctrine:migrations:migrate
     php bin/console doctrine:fixtures:load
     ```
5. **Lancer le serveur de développement**
   - Démarrez le serveur Symfony avec : `composer start`
   
### 3. Scripts Composer
- `composer start` : Lance le serveur web de test.
- `composer test:phpcs` : Lance la commande de vérification du code par PHP CS Fixer.
- `composer fix:phpcs` : Lance la commande de correction du code par PHP CS Fixer.
- `composer test:twigcs` : Lance la commande de vérification du code par Twig CS Fixer.
- `composer fix:twigcs` : Lance la commande de de correction du code par Twig CS Fixer.
- `composer test:codeception` : Nettoie le répertoire « _output » et le code généré par Codeception, initialise la base de données de test et lance les tests de Codeception.
- `composer test` : Teste la mise en forme du code et lance les tests avec Codeception.
- `composer db` : Détruit et recrée la base de données, migre sa structure et regénère les données factices.

***
## 🙋‍♂️ Comptes et Authentification
| **Prénom - Nom** | **Email**                | **Mot de passe** | **Rôle**          |
|------------------|----------------------|--------------|---------------|
| Louis Baudat     | louis@example.com     | test         | ROLE_ADMIN    |
| Corentin Marcoux | corentin@example.com  | test         | ROLE_ADMIN    |
| Romain Lobreaux  | romain@example.com    | test         | ROLE_ADMIN    |
| Peter Parker     | user@example.com      | test         | ROLE_CUSTOMER |
| Tony Stark       | manager@example.com    | test         | ROLE_MANAGER  |
***

## Fonctionnalités du projet
### 1. Recherche de produits
- **Barre de recherche dynamique :**
  - Les utilisateurs peuvent rechercher des produits par **nom**, **marque** ou **catégorie**.
  - Les résultats de recherche sont affichés directement sur la page `/product`.
- **Affichage des résultats :**
  - Lorsque l'utilisateur effectue une recherche, un message indique les termes recherchés.
  - Si aucun produit ne correspond, un message est affiché.
### 2. Gestion des images de produits avec VichUploaderBundle
  - **Installation et configuration :**
     - Mise en place de **VichUploaderBundle** pour faciliter la gestion des fichiers uploadés.
      - Configuration d'un mapping product_images permettant de sauvegarder les images des produits dans le dossier `/public/images/products`.
- **Image par défaut :**
   - Si aucune image n'est uploadée pour un produit, une image par défaut (`default_image.webp`) est automatiquement affichée.
- **Affichage dynamique des images :**
   - Les templates utilisent `vich_uploader_asset` pour récupérer les images des produits.
   - Si aucune image n'est associée, l'image par défaut est utilisée via Twig.
  


