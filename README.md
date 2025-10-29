# Tchat-Mercure

Un système de chat simple avec Mercure et ux-turbo

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

---
⚠️ **L'application ne fonctionne qu'en HTTP et non HTTPS** ⚠️

‼️ **A n'utiliser qu'en mode DEV** ‼️

---

## Lancement

Créer un utilisateur en cliquant sur le bouton **Register** une fois le site lancé

Le tchat fonctionne 😊

## 📄 Licence

MIT

## 👤 Auteur

**Jonathan Martin**

- email: hyperion@ikmail.com
