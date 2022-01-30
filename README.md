![Logo](https://yt3.ggpht.com/ytc/AKedOLQsybJpYLRCUbm0mBUsEUvwHqZBQ7YpApqEPqBL=s88-c-k-c0x00ffffff-no-rj)

# Parlons Code le Blog.

Blog en complément de la chaine youtube
[Les Teacher du Net](https://www.youtube.com/channel/UCzuaB4F2znrMggxcwUuVhAw).
Un espace collaboratif de partage de code pour dévellopeurs, il permettra de coder en collaboration
avec les membres du site n'inteporte qui n'étant pas inscrit sur le site.

## Authors

- [@Pascal BRIFFARD](https://github.com/Papoel)
- [@Honoré HOUNWANOU](https://github.com/mercuryseries)
- [@Aurélien BICHOTTE](https://github.com/AurelBichop)
- [@Pascal JURION](https://github.com/c3soft)
- [@Olivier LACHHAB](https://github.com/aregotech)
- [@Salif]()
- [@Gilles]()
- [@Nestate]()
- .....

## Tech Stack

**Frontend:** Nuxt | TailwindCSS

**Backend:** Symfony >= 6.0 | php >= 8.1

## Exécuter localement

Cloner le projet

```bash
  git clone git@github.com:Papoel/code-sharing.git
  # Ou 
  git clone https://github.com/Papoel/code-sharing.git
```

Allez dans le répertoire du projet

```bash
  cd code-sharing
```

Installer les dépendances

```bash
  composer install
```

```bash
  docker-compose up -d
```

### Création de la base de donnée

Vous pouvez directement modifier le nom de la base de données ainsi 
que le mot de passe dans le **docker-compose.yml**, si 
toutefois ne souhaitez pas le faire
maintenant voici les informations de connexion par défaut :

> Login de connexion à pgAdmin4 : admin@admin.com <br>
> Mot de passe à pgAdmin4 : root <br>
> Nom d'Hôte : database
> Nom de la base de donnée : app <br>
> Nom d'utilisateur : symfony <br>
> Mot de passe : ChangeMe <br>
> port : 5432 (ou 53859 si vous avez dèja postgreSql qui tourne)

```.bash
symfony console doctrine:database:create
```
### Jouer les migrations

La liste des commandes listées utilise le CLI de Symfony
si toutefois vous ne l'utilisez pas, vous pouvez remplacer
`symfony console` par `php bin/console`.

Une fois la base de donnée crée taper la commande suivante :

```bash
symfony console doctrine:migrations:migrate
symfony console doctrine:fixtures:load -n
```

Voilà, maintenant la base de donnée est crée et elle est 
opérationelle, un jeu de fausse donnée à été chargé, tout est prêt.

Rentrer cette URL dans le navigateur :  `https://localhost`

