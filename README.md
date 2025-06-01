# 🌿 RSE-IT – Site web d'une association écologique (Projet Symfony)

Ce projet a été réalisé dans le cadre d’un **cours sur Symfony**. Il s’agit d’un site vitrine dynamique pour une association fictive nommée **RSE-IT**, engagée dans la protection de l’environnement.

## 🔍 Fonctionnalités principales

- Présentation de l’association
- Affichage des événements
- Formulaire de contact fonctionnel
- Stockage des messages dans une base de données
- Liste des messages reçus en back-office
- Navigation simple via une navbar
- Intégration de CSS personnalisé

## 🛠️ Stack technique

- Symfony 6
- Twig
- Doctrine ORM (base de données)
- HTML / CSS
- SQLite (ou MySQL selon config)

## 📁 Structure du projet

├── assets/
├── config/
├── public/
│ ├── assets/
│ └── index.php
├── src/
│ ├── Controller/
│ ├── Entity/
│ └── Form/
├── templates/
│ ├── base.html.twig
│ ├── home/
│ └── contact/
├── .env
├── composer.json
└── README.md

## 🚀 Lancer le projet en local

### 1. Cloner le dépôt :
```bash
git clone https://github.com/Kromaric/rse_it.git
cd rse-it
```
### 2. Installer les dépendances :

```bash
composer install
```
### 3. Lancer le serveur Symfony :

```bash
symfony server:start
```

### 4. Créer la base de données :

```bash
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

🙋‍♂️ Auteur
Romaric – Développeur web & passionné par l'écologie numérique 🌱
Projet réalisé dans un contexte pédagogique (cours Symfony)


