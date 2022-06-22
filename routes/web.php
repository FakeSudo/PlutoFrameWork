<?php

use FakeSudo\Pluto\Web\View;

$Route->get('/',function(){
    View::render('Home',['title' => 'Pluto', 'phpversion' => phpversion()]);
});

$Route->get('/Test', 'app\Controllers\Http\TestController@show');