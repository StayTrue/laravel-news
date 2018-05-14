## Laravel newsfeed

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Requirements

- [Vagrant](https://www.vagrantup.com/downloads.html)
- [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
- [NodeJS](https://nodejs.org)

## Installation

1) Clone repository, go to project path and install all dependencies by running
```shell
composer update
```
2) Create env file 
```shell
cp .env.example .env
```

3) Make Homestead config files

Using Windows
```shell
vendor\\bin\\homestead make
```

Using Linux \ MacOS
```shell
php vendor/bin/homestead make
```

4) Next run vagrant by
```shell
vagrant up
```

5) Log into vagrant ssh and go to project path by running
```shell
vagrant ssh
cd code
```

6) Make DB migrations and exit vagrant ssh
```shell
php artisan migrate
exit
```

7) Build the client side by running
```shell
npm install
npm run dev
```

8) Add this line to your hosts file
```shell
192.168.10.10 news.test
```
9) Finally open http://news.test in your browser

