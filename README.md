POTREBNI UKAZI<br>

==================================================================<br>
composer install <br>
(instalira vse potrebne datoteke, potrebne za projekt)<br>

==================================================================<br>
php artisan make:model Computer -m <br>
ali<br>
php artisan make:model Uporabnik -m <br>

(kreira model in vzpostavi migracijsko tabelo)<br>

===================================================================<br>
php artisan migrate <br>
(po vpisu podatkov v migracijsko tabelo ti migrira oz. ustvari novo tabelo)<br>

======================================================================<br>

php artisan make:controller ComputerController --resource<br>
ali<br>
php artisan make:controller UporabnikController --resource<br>

(kreira nov kontroller)<br>

=====================================================================<br>

NE POZABI KREIRATI ROUTE<br>

v routes/web.php se kreirajo route<br>

Route::resource('computers', 'App\Http\Controllers\ComputerController');<br>
ali<br>
Route::resource('uporabnik', 'App\Http\Controllers\UporabnikController');<br>
