➜  Monedero git:(master) ✗ cp .env.example .env
➜  Monedero git:(master) ✗ composer i
➜  Monedero git:(master) ✗ rm -rf vendor
➜  Monedero git:(master) ✗ rm composer.lock
➜  Monedero git:(master) ✗ composer clear-cache
➜  Monedero git:(master) ✗ composer install
➜  Monedero git:(master) ✗ php artisan migrate:fresh --seed
