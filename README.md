POTREBNI UKAZI

==================================================================
composer install <br>
(instalira vse potrebne datoteke, potrebne za projekt)

==================================================================
php artisan make:model Computer -m <br>
ali<br>
php artisan make:model Uporabnik -m <br>

(kreira model in vzpostavi migracijsko tabelo)

===================================================================
php artisan migrate <br>
(po vpisu podatkov v migracijsko tabelo ti migrira oz. ustvari novo tabelo)


php artisan make:controller ComputerController --resource<br>
ali<br>
php artisan make:controller UporabnikController --resource<br>

(kreira nov kontroller)

=====================================================================

NE POZABI KREIRATI ROUTE

v routes/web.php se kreirajo route

Route::resource('computers', 'App\Http\Controllers\ComputerController');<br>
ali<br>
Route::resource('uporabnik', 'App\Http\Controllers\UporabnikController');<br>
