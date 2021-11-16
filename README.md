# Projet de démonstration

Ce projet est une coquille vide destinée aux élève de l'école entreprise. Son but est de montrer comment créer une structure de projet PHP professionnelle.

Il se compose des éléments suivants:

- ``` public ```: ce dossier est celui servi par Apache. Il contient un fichier index.php qui sert de point d'entrée à l'application, toutes les urls sont redirigées sur ce fichier. C'est dans ce dossier que viendront s'ajouter les images, fichiers css et js;
- ``` routes ```: ce dossier contient un fichier ``` web.php ``` qui définit les routes de l'application;
- ``` src ```: ce dossier contiendra toutes les sources de votre application. Pour la démonstration il ne contient qu'un dossier ``` Controllers ```;
- fichier ``` .gitignore ```: ce fichier sert à indiquer à git les éléments qu'il doit ignorer (ici le dossier vendor et le fichier coposer.lock);
- ``` composer.json ```: le fichier de configuration de composer pour ce projet. Il contient des informations sur le projet et ses dépendances;
- ``` README.md ```: le présent fichier

## Installation

Cloner le projet, vous rendre dans le dossier racine, puis lancer la commande suivante:

```
composer install
```

Les dépendances du projet sont installées et vous verrez apparaitre un dossier ``` vendor ``` ainsi qu'un fichier ``` composer.lock ``` à la racine du projet.

Vous pouvez maintenant naviguer sur les 2 urls du projet:
- ``` / ```: la page d'accueil
- ``` /test/show ```: une page de test, il est possible d'ajouter un paramètre à cette url, essayez par exemple ``` /test/show/votre_nom ```

## Dépendance

Ce projet utilise une unique dépendance, un router PHP nommé [simple-php-router](https://github.com/skipperbent/simple-php-router) qui s'occupe de gérer le routing.