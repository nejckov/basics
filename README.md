POTREBNI UKAZI

composer install
(instalira vse potrebne datoteke, potrebne za projekt)

php artisan make:model Computer -m
ali
php artisan make:model Uporabnik -m

(kreira model in vzpostavi migracijsko tabelo)


php artisan migrate
(po vpisu podatkov v migracijsko tabelo ti migrira oz. ustvari novo tabelo)


php artisan make:controller ComputerController --resource
ali
php artisan make:controller UporabnikController --resource

(kreira nov kontroller)



NE POZABI KREIRATI ROUTE

v routes/web.php se kreirajo route

Route::resource('computers', 'App\Http\Controllers\ComputerController');
ali
Route::resource('uporabnik', 'App\Http\Controllers\UporabnikController');
