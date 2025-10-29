# Tchat-Mercure

Un système de chat simple avec Mercure et ux-turbo.

## 📦 Requis

- PHP 8.4 ou supérieur
- Symfony 7.3 ou supérieur

## 🚀 Installation

Après avoir cloné le projet, installer les dépendances :

```bash
composer install
```

Installer Boostrap via asset-mapper :

```bash
symfony console importmap:install
```

Lancer le hub Mercure :

```bash
docker compose up -d
```

Lancer le serveur interne de Symfony avec le flag no tls :

```bash
symfony serve --no-tls -d
```

> [!WARNING]
> **L'application est configurée pour ne fonctionner qu'en HTTP et non HTTPS.**

Créer la base de données :

```bash
symfony console doctrine:database:create
```

Appliquer la migration :

```bash
symfony console doctrine:migrations:migrate
```

> [!IMPORTANT]
> Créer un utilisateur en cliquant sur le bouton **Register** pour que le tchat fonctionne.

## 📄 Licence

MIT

## 👤 Auteur

**Jonathan Martin**

- email: hyperion@ikmail.com
