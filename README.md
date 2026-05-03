# INSTALLATION

Follow these steps

1. Clone repository

```git
git clone https://github.com/mhdhaikalll/LAB-ITT626.git
```

OR

Download and extract the ZIP file on the GitHub repository

2. Install the necessary package

```cmd
npm install
```
```cmd
composer install
```

3. Set up your .env

```cmd
cp .env.example .env
```

4. Configure your database

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lab2
DB_USERNAME=root
DB_PASSWORD=
```

5. Do migration (if needed)

```cmd
php artisan migrate
```

5. Run this project

```cmd
npm run dev
```
```cmd
php artisan serve
```
