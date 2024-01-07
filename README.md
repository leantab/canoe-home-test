# Canoe Home Test
A simple Laravel app for Canoe hiring process


## Run the program
<p>Clone the repo. </p>
<p>Run composer install & npm run dev (then exit) </p>
<p>Provide a database conection in the .env </p>
Run migrations: 

```bash
php artisan migrate
```

Run test seeder:
```bash
php artisan db:seed --class=TestSeeder"
```

run app with 
```bash
php artisan serve
```

<p>You can create a new user or use the existing "test@expample.com" with password "password".</p>

create funds with duplications and verity the assesment
```bash
php artisan app:create-funds
```

<p>The list of Funds can be filtered by duplications.</p>
<p>You can also assign some companies to the new funds or delete them.</p>