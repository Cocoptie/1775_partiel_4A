<h1 align="center">Welcome to 1775_partiel_4A 👋</h1>
<p>
  <a href="#" target="_blank">
    <img alt="License: UNLICENSED" src="https://img.shields.io/badge/License-UNLICENSED-yellow.svg" />
  </a>
</p>

> This symfony project was made to present solutions to differents problematics

## Install

```sh
composer install
yarn install
symfony console database:create
symfony console doctrine:migration:migrate
symfony console doctrine:fixture:load
```

Ouvrez ensuite deux terminaux et dans l'un, pour lancer le back, mettez:

```sh
symfony serve
```

Dans l'autre, pour lancer le front, mettez

```sh
yarn dev-server
```

## Author

👤 **Etudiant de l'eemi en CTO :)**

* Github: [@cocoptie](https://github.com/cocoptie)

## Show your support

Give a ⭐️ if this project helped you!

***
_This README was generated with ❤️ by [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_