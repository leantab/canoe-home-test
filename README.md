# Canoe Home Test
A simple Laravel app for Canoe hiring process


## Run the program
Clone the repo
run composer install & npm run dev (then exit)
provide a database conection in the .env
run migrations: 

```bash
"php artisan migrate"
```

run test seeder:
```bash
php artisan db:seed --class=TestSeeder"
```

run app with 
```bash
php artisan serve
```

You can create a new user or use the existing "test@expample.com" with password "password".

create funds with duplications and verity the assesment
```bash
php artisan app:create-funds
```

<p>The list of Funds can be filtered by duplications.</p>
<p>You can also assign some companies to the new funds or delete them.</p>