<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

- Install this package for addition of 2 numbers
- Then you should use example
```
<?php

use Illuminate\Support\Facades\Route;
use dadirohan\SimpleMath\SimpleMathService;

Route::get('/sum', function(SimpleMathService $math) {
    return $math->add(3, 4); 
});

```
