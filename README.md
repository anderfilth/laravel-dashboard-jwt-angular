Painel AdminLTE Angular 4 e API JWT Laravel 5.5 
============

Laravel
------------

Vá para o diretório Dashboard.

```bash
cd Dashboard
```

edite o arquivo .env, configure o banco de dados e o segredo do jwt

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password

JWT_SECRET=key
```

Faça a migração das tabelas

```bash
php artisan migrate --seed
```


Angular
------------

Instale o angular cli.
```bash
npm install -g @angular/cli
```

vá até o diretório web

```bash
cd web
```

```bash
npm install
```