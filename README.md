## Create new project
1. Create project
```
laravel new fortify-bootstrap
```

2. Kemudian install node modules.

```
# npm install
```

3. Lalu kita install bootstrap dan library pendukung.

```
npm install bootstrap jquery popper.js --save-dev

npm install @popperjs/core

```

4. Kemudian buka bootstrap.js dan tambahkan dibawah ini.

```
//resources/js/bootstrap.js
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

```

5. Setelah itu kita install sass dan sass-loader.

```
npm install sass sass-loader --save-dev
```

6. Selanjutnya buat folder baru di direktori resources dengan nama ```sass```. Pada folder sass kita tambahkan file baru dengan nama ```app.scss```, dan kita import bootstrap.

```
//resources/sass/app.scss
@import '~bootstrap/scss/bootstrap';
```

7. Setelah bootstrap di import kita akan gunakan compiler laravel mix. Kita buka file webpack.mix.js, buat seperti dibawah ini.

```
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
```
  Install laravel ui
  - instal laravel ui
  ```
  composer require laravel/ui
  ```

8. Install fortify
```
composer require laravel/fortify
```

9. Next, publish Fortify's resources using the ```vendor:publish``` command:

```
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
```

```
php artisan migrate
```

10. Open ```app/prividers/AppServiceProvider.php```
```
public function boot()
{
    Fortify::loginView(function () {
        return view('auth.login');
    });

    // ...
}
```

11. instal npm
  ```
  npm install
  ```
12.  ``npm run dev``

13. Lalu jalankan perintah npm run dev.

```
@labootstrap  ➜  npm run dev
DONE  Compiled successfully in 5866ms                                                                        2:25:35 PM
       Asset      Size   Chunks             Chunk Names
/css/app.css   179 KiB  /js/app  [emitted]  /js/app
  /js/app.js  1.08 MiB  /js/app  [emitted]  /js/app

```

14.  Pemanggilan

```
<link href=" {{ mix('css/app.css') }}" rel="stylesheet">
<script src="{{ mix('js/app.js') }}"></script>

```