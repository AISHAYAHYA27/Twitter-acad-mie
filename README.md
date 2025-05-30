# Tweet\_Academie

**par Vivilia LOUIS ADORE, Paul DAVID, Kandyss CAMIER et Aissatou LABBO SOW**

&#x20;

## Description du projet

Tweet\_Academie est un projet étudiant visant à recréer les fonctionnalités principales de Twitter. Ce remake est développé en **PHP** et **JavaScript**, avec **Tailwind CSS** pour le design et des requêtes **AJAX** pour une expérience utilisateur fluide.

<img width="1440" alt="Capture d’écran 2025-03-14 à 16 40 18" src="https://github.com/user-attachments/assets/3bb9eeef-2834-4079-8601-690881be5b2b" />

(mode sombre disponible également)

![Capture d'écran 2025-03-16 122606](https://github.com/user-attachments/assets/a34a490b-c65b-4ff3-9448-30b904618be8)


## Fonctionnalités principales

- **Inscription & Connexion**
- **Publier un tweet**
- **Like & Retweet**
- **Messagerie privée**
- **Commentaires & réponses aux tweets**
- **Système de favoris (Bookmarks)**
- **Mise à jour dynamique avec AJAX**

## Technologies utilisées

- **Backend** : PHP
- **Frontend** : JavaScript, AJAX
- **Style** : Tailwind CSS
- **Base de données** : MySQL

# Installation

1. Clonez le repository :
   ```bash
   git clone https://github.com/EpitechWebAcademiePromo2026/W-WEB-090-PAR-1-1-academie-vivilia.louis-adore.git
   ```
2. Configurez votre base de données MySQL.
3. Assurez-vous d'ajouter un fichier `Connect.php` dans le dossier `model` avec la votre configuration de connexion :
   
   ```php
   <?php 
   // Connexion à la base de données

   CONST DBHOST = "localhost";
   CONST DBUSER = "root";
   CONST DBPASS = "";
   CONST DBNAME = "twitter";

   $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

   try {
       $db = new PDO($dsn, DBUSER, DBPASS);
       $db->exec("SET NAMES utf8");
       $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Définit le fetch par défaut en tableau associatif
   } catch (PDOException $e) {
       die($e->getMessage());
   }
   ?>
   ```

4. Installez les dépendances avec :
   ```bash
   npm i
   ```

5. Démarrez le serveur PHP.
   ```bash
   php -S localhost:8000
   ```
6. Accédez au projet via votre navigateur.





<img width="1435" alt="Capture d’écran 2025-03-14 à 16 39 38" src="https://github.com/user-attachments/assets/2991f5a9-97a4-46ab-8589-1999774e9f4c" />


