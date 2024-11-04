# Gestionnaire de Contacts

## Description du projet

Ce projet est un gestionnaire de contacts réalisé en **PHP**, **HTML/CSS**, **JavaScript** et **SQL**, conçu pour gérer les contacts d'une personne ou d'une organisation sans utiliser de frameworks ou d'outils externes. Le gestionnaire permet de :

- Afficher tous les contacts enregistrés
- Ajouter un nouveau contact
- Modifier un contact existant
- Supprimer un contact

## Fonctionnalités

1. **Affichage des contacts** : Affiche la liste complète des contacts avec leurs informations.
2. **Ajout de contacts** : Formulaire pour ajouter un nouveau contact avec les informations nécessaires.
3. **Modification de contacts** : Édition des informations d’un contact existant.
4. **Suppression de contacts** : Suppression d’un contact de la base de données.

## Technologies utilisées

- **Langage serveur** : PHP
- **Langage client** : HTML, CSS, JavaScript
- **Base de données** : SQL (MySQL)
- **Frontend** : HTML/CSS pour le design simple et JavaScript pour certaines interactions.

## Structure des fichiers

- `./php/bdd/config.php` : Fichier de configuration pour la connexion à la base de données.
- `./sql/directories_table.sql` : Fichier SQL contenant la structure de la table `contacts` pour la base de données.
- `./php/` : Contient les fichiers PHP pour la gestion des opérations CRUD (Create, Read, Update, Delete).
- `./css/` : Fichiers CSS pour le style des pages.
- `./js/` : Scripts JavaScript pour les interactions côté client.

## Installation

### Étape 1 : Cloner le projet

Cloner le dépôt GitHub du projet en local :
```bash
git clone https://github.com/hardcodeur/Cogiterra_test.git
```

### Étape 2 : Configuration de la base de données

1. **Connexion BDD** : Configurez les informations de connexion dans le fichier `./php/bdd/config.php` :
   ```php
   <?php
   $host = 'votre_hote';
   $dbname = 'votre_base_de_donnees';
   $username = 'votre_utilisateur';
   $password = 'votre_mot_de_passe';
   ```
2. **Importation de la structure de la table** : Importez le fichier `./sql/directories_table.sql` dans votre base de données pour créer la table `contacts`.

### Étape 3 : Lancement du projet

- Placez les fichiers dans un serveur local (comme **XAMPP**, **WAMP** ou **MAMP**) dans le dossier approprié (ex: `htdocs`).
- Accédez au projet via `http://localhost/nom_du_projet`.

## Utilisation du gestionnaire de contacts

1. **Page d’accueil** : Liste tous les contacts enregistrés dans la base de données.
2. **Ajouter un contact** : Utilisez le formulaire de la page d’accueil pour saisir les informations d’un nouveau contact.
3. **Modifier un contact** : Cliquez sur le bouton de modification à côté d’un contact pour éditer ses informations.
4. **Supprimer un contact** : Cliquez sur le bouton de suppression pour retirer un contact de la liste.
