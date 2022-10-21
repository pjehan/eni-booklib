# Booklib ENI

## Pour installer le projet

Créer le fichier .env.local

```shell
composer install
php bin\console doctrine:database:drop --force
php bin\console doctrine:database:create
php bin\console doctrine:migrations:migrate
php bin\console doctrine:fixtures:load
```
