# larafront

My front-end Components and Guideline for **Laravel** with **Sass**.

## Prerequisite

環境:

- `MacBook Air (M1, 2020)`
- `macOS Ventura 13.4`
- Docker: `20.10.12`
- Docker Compose: `2.2.3`

Docker環境構築: [docker-laravel](https://github.com/rk-techs/docker-laravel) を参照。

## Documents

[Laravel-README](/src/README.md)

## Instruction

Clone the repository from GitHub:

```bash
git clone git@github.com:rk-techs/larafront.git
```

Rename the directory (if necessary):

```bash
mv larafront <new_dir_name>
```

Change to the newly renamed directory:

```bash
cd <new_dir_name>
```

### Set Up Docker Environment

Start the Docker containers:

```bash
docker compose up -d
```

Enter the 'app' container:

```bash
docker compose exec app bash
```

## Set Up Laravel

Install dependencies:

```bash
composer install
```

Create a .env file from the example:

```bash
cp .env.example .env
```

Update the database information in the .env file:

```text
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laraveldb
DB_USERNAME=dbuser
DB_PASSWORD=secret
```

Generate the application key:

```bash
php artisan key:generate
```

Run migrations with seeding:

```bash
php artisan migrate --seed
```

### Set Up Vite and Sass

If not already in the 'app' container, enter it:

```bash
docker compose exec app bash
```

Install npm dependencies:

```bash
npm install
```

Install Sass as a dev dependency:

```bash
npm add -D sass
```

Compile assets using Vite:

```bash
npm run dev
```
